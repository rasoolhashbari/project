@extends('auth.layouts.main')

@section('content')

<div id="page-container">

<!-- Main Container -->
<main id="main-container">
    <!-- Page Content -->
    <div class="hero-static">
        <div class="content">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <!-- Sign Up Block -->
                    <div class="block block-themed block-fx-shadow mb-0">
                        <div class="block-header bg-success">
                            <h3 class="block-title">حساب را ایجاد کنید</h3>
                            <div class="block-options">
                                <a class="btn-block-option font-size-sm" href="javascript:void(0)" data-toggle="modal" data-target="#one-signup-terms">مشاهده قوانین</a>
                                <a class="btn-block-option" href="op_auth_signin.html" data-toggle="tooltip" data-placement="left" title="Sign In">
                                    <i class="fa fa-sign-in-alt"></i>
                                </a>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="p-sm-3 px-lg-4 py-lg-5">
                                <h1 class="mb-2">OneUI</h1>
                                <p>.لطفاً برای ایجاد یک حساب کاربری ، جزئیات زیر را پر کنید</p>

                                <!-- Sign Up Form -->
                                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _es6/pages/op_auth_signup.js) -->
                                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                                <form class="js-validation-signup" action="be_pages_auth_all.html" method="POST">
                                    <div class="py-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-lg form-control-alt" id="signup-username" name="signup-username" placeholder="نام کاربری">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-lg form-control-alt" id="signup-email" name="signup-email" placeholder="ایمیل">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password" name="signup-password" placeholder="رمز عبور">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-lg form-control-alt" id="signup-password-confirm" name="signup-password-confirm" placeholder="تایید گذرواژه">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms">
                                                <label class="custom-control-label font-w400" for="signup-terms">من با شرایط و ضوابط موافقم</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6 col-xl-5">
                                            <button type="submit" class="btn btn-block btn-success">
                                                <i class="fa fa-fw fa-plus mr-1"></i> ثبت نام
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Sign Up Form -->
                            </div>
                        </div>
                    </div>
                    <!-- END Sign Up Block -->
                </div>
            </div>
        </div>
        <div class="content content-full font-size-sm text-muted text-center">
            <strong>OneUI 4.6</strong> &copy; <span data-toggle="year-copy"></span>
        </div>
    </div>
    <!-- END Page Content -->
</main>
<!-- END Main Container -->
</div>

@endsection