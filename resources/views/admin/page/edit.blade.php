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
                <h2>Manage Pages</h2>
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
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{ url('/admin/page/update/'.$result[0]->id) }}" enctype="multipart/form-data">
                    {{@csrf_field()}}
                    
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="name">Name <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="name" name="name" required="required"
                                class="form-control " value="{{$result[0]->name}}">
                        </div>
                        <span>@error('name')
                            {{$message}}
                        @enderror</span>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="slug">Slug <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" id="slug" name="slug" required="required"
                                class="form-control" value="{{$result[0]->slug}}">
                        </div>
                        <span>@error('slug')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                            for="description">Description <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea id="description" rows="3" name="description" required="required"
                                class="form-control">{{$result[0]->description}}</textarea>
                        </div>
                        <span>@error('description')
                            {{$message}}
                        @enderror</span>
                    </div>

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">


                            <button type="submit" name="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection