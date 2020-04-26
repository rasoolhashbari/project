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
<div class="block">
                        <div class="block-header">
                            <h3 class="block-title">Inline</h3>
                        </div>
                        <div class="block-content block-content-full">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p class="font-size-sm text-muted">
                                        Using an inline layout can come really handy for small forms
                                    </p>
                                </div>
                                <div class="col-lg-8">
                                    <!-- Form Inline - Default Style -->
                                    <form class="form-inline mb-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                                        <label class="sr-only" for="example-if-email">Email</label>
                                        <input type="email" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-email" name="example-if-email" placeholder="Email">
                                        <label class="sr-only" for="example-if-password">Password</label>
                                        <input type="password" class="form-control mb-2 mr-sm-2 mb-sm-0" id="example-if-password" name="example-if-password" placeholder="Password">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </form>
                                    <!-- END Form Inline - Default Style -->

                                    <!-- Form Inline - Alternative Style -->
                                    <form class="form-inline" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                                        <label class="sr-only" for="example-if-email2">Email</label>
                                        <input type="email" class="form-control form-control-alt mb-2 mr-sm-2 mb-sm-0" id="example-if-email2" name="example-if-email2" placeholder="Email">
                                        <label class="sr-only" for="example-if-password2">Password</label>
                                        <input type="password" class="form-control form-control-alt mb-2 mr-sm-2 mb-sm-0" id="example-if-password2" name="example-if-password2" placeholder="Password">
                                        <button type="submit" class="btn btn-dark">Login</button>
                                    </form>
                                    <!-- END Form Inline - Alternative Style -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Inline -->


</div>
<!-- END Page Content -->



</main>
<!-- END Main Container -->
@endsection