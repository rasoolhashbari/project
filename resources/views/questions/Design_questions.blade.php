@extends('layouts.main')

@section('content')
<!-- Main Container -->
<main id="main-container">

    <!-- Hero -->
    <div class="bg-body-light">
        <div class="content content-full">
            <div class="d-flex flex-column flex-sm-row justify-content-sm-between align-items-sm-center">
                <h1 class="flex-sm-fill h3 my-2">
                    عنوان صفحه <small class="d-block d-sm-inline-block mt-2 mt-sm-0 font-size-base font-w400 text-muted">عنوان</small>
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
                <h3 class="block-title">طراحی سوال</h3>
            </div>
            <div class="block-content block-content-full">
                <div class="row">
                    <div class="col-lg-12">
                        <form class="form-inline mb-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">
                            <input type="text" size="60" class="form-control mb-2 mr-sm-2 mb-sm-0" placeholder="تایپ سوال...">
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <!-- Form Inline - Default Style -->
                        <form class="form-inline mb-4" action="be_forms_layouts.html" method="POST" onsubmit="return false;">

                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="option1" placeholder="گزینه1">
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="option2" placeholder="گزینه 2">
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="option3" placeholder="گزینه3">
                            <input type="text" class="form-control mb-2 mr-sm-2 mb-sm-0" id="option4" placeholder="گزینه4">
                            <button type="submit" class="btn btn-primary">ثبت</button>
                        </form>
                        <!-- END Form Inline - Default Style -->
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