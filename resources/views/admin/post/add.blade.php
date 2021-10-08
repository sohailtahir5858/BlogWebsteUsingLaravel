@extends('admin/layout.layout')

@section('container')
<div class="page-title">
    <div class="title_left">
        <h3>Form Elements</h3>
    </div>

</div>
<div class="clearfix"></div>
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Manage Posts</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ url('/admin/post/submit') }}" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="title">Title <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="title" name="title" required="required"
                                class="form-control ">
                        </div>
                        <span>@error('title')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="slug">Slug <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="slug" name="slug" required="required"
                                class="form-control ">
                        </div>
                        <span>@error('slug')
                            {{$message}}
                        @enderror</span>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="short_desc">Short Desc <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="short_desc" name="short_desc" required="required"
                                class="form-control">
                        </div>
                        <span>@error('short_desc')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="long_desc">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="long_desc" rows="3" name="long_desc" required="required"
                                class="form-control"></textarea>
                        </div>
                        <span>@error('long_desc')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="image">Image <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="file" id="image"  name="image" 
                                class="form-control"></textarea>
                        </div>
                        <span>@error('image')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="post_date">Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="date" id="date"  name="post_date" required="required"
                                class="form-control"></textarea>
                        </div>
                        <span>@error('post_date')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <button class="btn btn-primary" type="reset">Reset</button>


                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection