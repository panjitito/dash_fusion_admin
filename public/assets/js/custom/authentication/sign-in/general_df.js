"use strict";

var KTSigninGeneral = function () {
    var form;
    var submitButton;
    var email;
    var pwd;
    var validator;

    function toggleSubmitButton(isEnabled) {
        if (isEnabled) {
            submitButton.setAttribute('data-kt-indicator', 'off');
            submitButton.disabled = false;
            email.readOnly        = false;
            pwd.readOnly          = false;
        } else {
            submitButton.setAttribute('data-kt-indicator', 'on');
            submitButton.disabled = true;
            email.readOnly        = true;
            pwd.readOnly          = true;
        }
    }    

    var handleValidation = function (e) {
        validator = FormValidation.formValidation(
            form,
            {
                fields: {
                    'email': {
                        validators: {
                            regexp: {
                                regexp: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
                                message: 'The value is not a valid email address',
                            },
                            notEmpty: {
                                message: 'Email address is required'
                            }
                        }
                    },
                    'password': {
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            }
                        }
                    }
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    bootstrap: new FormValidation.plugins.Bootstrap5({
                        rowSelector: '.fv-row',
                        eleInvalidClass: '',
                        eleValidClass: ''
                    })
                }
            }
        );
    }

    var handleSubmitAjax = function (e) {
        submitButton.addEventListener('click', function (e) {
            e.preventDefault();

            validator.validate().then(function (status) {
                if (status == 'Valid') {
                    toggleSubmitButton(false);

                    axios.post(submitButton.closest('form').getAttribute('action'), new FormData(form)).then(function (response) {
                        if (response) {
                            const redirectUrl = form.getAttribute('data-kt-redirect-url');

                            if (redirectUrl) {
                                location.href = redirectUrl;
                            }
                        } else {
                            toggleSubmitButton(true);

                            Swal.fire({
                                text: "Sorry, the email or password is incorrect, please try again.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                    }).catch(function (error) {
                        let errorMessage = "Sorry, looks like there are some errors detected, please try again.";
                        toggleSubmitButton(true);

                        // Specifically check for a 422 status error
                        if (error.response && error.response.status === 422) {
                            // Update the message to be more specific about the validation error
                            errorMessage = "Sorry, the email or password is incorrect, please try again.";
                        }

                        Swal.fire({
                            text: errorMessage,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }
                        });
                    });
                } else {
                    toggleSubmitButton(true);

                    Swal.fire({
                        text: "Sorry, looks like there are some errors detected, please try again.",
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: "Ok, got it!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }
                    });
                }
            });
        });
    }

    var isValidUrl = function(url) {
        try {
            new URL(url);
            return true;
        } catch (e) {
            return false;
        }
    }

    return {
        init: function () {
            form            = document.querySelector('#kt_sign_in_form');
            submitButton    = document.querySelector('#kt_sign_in_submit');
            email           = document.querySelector('input[name="email"]');
            pwd             = document.querySelector('input[name="password"]');

            handleValidation();

            if (isValidUrl(submitButton.closest('form').getAttribute('action'))) {
                handleSubmitAjax();
            }
        }
    };
}();

KTUtil.onDOMContentLoaded(function () {
    KTSigninGeneral.init();
});
