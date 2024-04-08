@extends('layouts.afterlogin')

@section('title', 'Permissions')

@section('main')
<!--begin::Card-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header mt-6">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1 me-5">
                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                    <span class="path1"></span>
                    <span class="path2"></span>
                </i>
                <input type="text" data-kt-permissions-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search Permissions" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->
        <!--begin::Card toolbar-->
        <div class="card-toolbar">
            <!--begin::Button-->
            <button type="button" class="btn btn-light-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_permission">
            <i class="ki-duotone ki-plus-square fs-3">
                <span class="path1"></span>
                <span class="path2"></span>
                <span class="path3"></span>
            </i>Add Permission</button>
            <!--end::Button-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->
    <!--begin::Card body-->
    <div class="card-body pt-0">
        <!--begin::Table-->
        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0" id="kt_permissions_table">
            <thead>
                <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                    <th class="min-w-125px">Name</th>
                    <th class="min-w-250px">Assigned to</th>
                    <th class="min-w-125px">Created Date</th>
                    <th class="text-end min-w-100px">Actions</th>
                </tr>
            </thead>
            <tbody class="fw-semibold text-gray-600">
                <tr>
                    <td>User Management</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                    </td>
                    <td>25 Oct 2024, 9:23 pm</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Content Management</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-info fs-7 m-1">Support</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-warning fs-7 m-1">Trial</a>
                    </td>
                    <td>15 Apr 2024, 11:05 am</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Financial Management</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                    </td>
                    <td>25 Oct 2024, 9:23 pm</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Reporting</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                    </td>
                    <td>05 May 2024, 9:23 pm</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Payroll</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-success fs-7 m-1">Analyst</a>
                    </td>
                    <td>21 Feb 2024, 11:05 am</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Disputes Management</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-info fs-7 m-1">Support</a>
                    </td>
                    <td>10 Nov 2024, 10:30 am</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>API Controls</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                    </td>
                    <td>19 Aug 2024, 11:30 am</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Database Management</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                    </td>
                    <td>24 Jun 2024, 8:43 pm</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td>Repository Management</td>
                    <td>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-primary fs-7 m-1">Administrator</a>
                        <a href="apps/user-management/roles/view.html" class="badge badge-light-danger fs-7 m-1">Developer</a>
                    </td>
                    <td>21 Feb 2024, 11:30 am</td>
                    <td class="text-end">
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                            <i class="ki-duotone ki-setting-3 fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px" data-kt-permissions-table-filter="delete_row">
                            <i class="ki-duotone ki-trash fs-3">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--end::Table-->
    </div>
    <!--end::Card body-->
</div>
<!--end::Card-->
@endsection

@section('page_more_specific_js')
<script src="{{ asset('assets/js/custom/apps/user-management/permissions/list.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/permissions/add-permission.js') }}"></script>
<script src="{{ asset('assets/js/custom/apps/user-management/permissions/update-permission.js') }}"></script>
@endsection