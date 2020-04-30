@extends('layouts.main')

@section('content')
<div class="block">
    <div class="block-header">
        <h3 class="block-title">Basic</h3>
    </div>
    <div class="block-content block-content-full">
        <form action="be_forms_elements.html" method="POST" enctype="multipart/form-data" onsubmit="return false;">
            <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        The most often used inputs you know and love
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="example-textarea-input">Textarea</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Textarea</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Textarea</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                    </div>
                    <div class="form-group">
                        <label for="example-textarea-input">Textarea</label>
                        <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="4" placeholder="Textarea content.."></textarea>
                    </div>
                </div>
            </div>
            <div class="row push">
                <div class="col-lg-4">
                    <p class="font-size-sm text-muted">
                        Browser’s default select boxes, showcasing both simple and multiple selections
                    </p>
                </div>
                <div class="col-lg-8 col-xl-5">
                    <div class="form-group">
                        <label for="example-select">Select</label>
                        <select class="form-control" id="example-select" name="example-select">
                            <option value="0">Please select</option>
                            <option value="1">Option #1</option>
                            <option value="2">Option #2</option>
                            <option value="3">Option #3</option>
                            <option value="4">Option #4</option>
                            <option value="5">Option #5</option>
                            <option value="6">Option #6</option>
                            <option value="7">Option #7</option>
                            <option value="8">Option #8</option>
                            <option value="9">Option #9</option>
                            <option value="10">Option #10</option>
                        </select>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection