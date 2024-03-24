<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('title')</title>
		<meta charset="utf-8" />
		<meta name="description" content="Dash Fusion Admin is a reliable and ready to use laravel admin template" />
		<meta name="keywords" content="web, admin, template, laravel" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Dash Fusion Admin - Ready To Use Laravel Admin Template" />
		<meta property="og:url" content="http://localhost" />
		<meta property="og:site_name" content="Dash Fusion Admin" />
		<link rel="canonical" href="http://localhost" />
		<link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
		<script>
			if (window.top != window.self) {
				window.top.location.replace(window.self.location.href); 
			}
		</script>
	</head>
	<body @yield('body_parameter')>
		<script>
            var defaultThemeMode = "light";
            var themeMode;
            if ( document.documentElement ) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if ( localStorage.getItem("data-bs-theme") !== null ) {
                        themeMode = localStorage.getItem("data-bs-theme"); 
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                } 
                
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
        </script>

        @yield('content')
		
		<script>var hostUrl = "assets/";</script>
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		
        @yield('page_specific_js')
	</body>
</html>