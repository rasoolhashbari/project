@extends('layouts.main')

@section('content')
<!-- Main Container -->
<main id="main-container">

<!-- Hero -->
<div class="bg-body-light">
    <div class="content content-full">
        <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
            <h1 class="flex-sm-fill h3 my-2">
                عنوان صفحه <small
                    class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">عنوان</small>
            </h1>
            <nav class="flex-sm-00-auto ml-sm-3" aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-alt">
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">داشبورد</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="javascript:void(0)">حساب</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">جاری</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- END Hero -->

<!-- Page Content -->
<div class="content">
    <!-- Your Block -->
    <div class="block block-rounded">
        <div class="block-header">
            <h3 class="block-title">
                عنوان <small>شروع کنید</small>
            </h3>
            <div class="block-options pl-0 pr-3">
                <button type="button" class="btn-block-option" data-toggle="block-option"
                    data-action="fullscreen_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option"
                    data-action="pinned_toggle">
                    <i class="si si-pin"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option"
                    data-action="state_toggle" data-action-mode="demo">
                    <i class="si si-refresh"></i>
                </button>
                <button type="button" class="btn-block-option" data-toggle="block-option"
                    data-action="content_toggle"></button>
                <button type="button" class="btn-block-option" data-toggle="block-option"
                    data-action="close">
                    <i class="si si-close"></i>
                </button>
            </div>
        </div>
        <div class="block-content font-size-sm">
            <p>
                پروژه عالی خود را بسازید
            </p>
        </div>
    </div>
    <!-- END Your Block -->
    <!-- table user -->
<div class="block">
    <div class="block-header">
        <h3 class="block-title">جدول کاربران</h3>
    </div>
    <div class="block-content">
        <table class="table table-hover table-vcenter">
            <thead>
                <tr>
                    <th class="text-center" style="width: 50px;">#</th>
                    <th>نام</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">دسترسی</th>
                    <th class="text-center" style="width: 100px;">اقدامات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th class="text-center" scope="row">1</th>
                    <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_profile.html">Susan Day</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">VIP</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Remove Client">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="text-center" scope="row">2</th>
                    <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_profile.html">Danielle Jones</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-danger">Disabled</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Remove Client">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="text-center" scope="row">3</th>
                    <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_profile.html">Susan Day</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">VIP</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Remove Client">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="text-center" scope="row">4</th>
                    <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_profile.html">Helen Jacobs</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">Personal</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Remove Client">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="text-center" scope="row">5</th>
                    <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_profile.html">Betty Kelley</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">VIP</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Remove Client">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th class="text-center" scope="row">6</th>
                    <td class="font-w600 font-size-sm">
                        <a href="be_pages_generic_profile.html">Carol Ray</a>
                    </td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-warning">Trial</span>
                    </td>
                    <td class="text-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Edit Client">
                                <i class="fa fa-fw fa-pencil-alt"></i>
                            </button>
                            <button type="button" class="btn btn-sm btn-light" data-toggle="tooltip"
                                title="Remove Client">
                                <i class="fa fa-fw fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- end table user -->
<!-- pagination -->
<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <li class="page-item">
            <a class="page-link" href="javascript:void(0)" tabindex="-1" aria-label="Previous">
                <span aria-hidden="true">
                    <i class="fa fa-angle-double-right"></i>
                </span>
                <span class="sr-only">Previous</span>
            </a>
        </li>
        <li class="page-item active">
            <a class="page-link" href="javascript:void(0)">1</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="javascript:void(0)">2</a>
        </li>
        <li class="page-item disabled">
            <a class="page-link" href="javascript:void(0)">3</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="javascript:void(0)">4</a>
        </li>
        <li class="page-item">
            <a class="page-link" href="javascript:void(0)" aria-label="Next">
                <span aria-hidden="true">
                    <i class="fa fa-angle-double-left"></i>
                </span>
                <span class="sr-only">Next</span>
            </a>
        </li>
    </ul>
</nav>
<!-- end pagination -->
</div>
<!-- END Page Content -->
</main>
<!-- END Main Container -->
@endsection