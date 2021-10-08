@extends('admin/layout.layout')

@section('container')
<div class="page-title">
	<div class="title_left">
	  <h3>Users <small>Post</small></h3>
	  <a href="/admin/post/add" class="btn btn-primary ">Add Post</a>
	</div>
  </div>

  <div class="clearfix"></div>

  <div class="row">
	<div class="col-md-12 col-sm-12 ">
	  <div class="x_panel">

		<div class="x_content">
		  <div class="row">
			<div class="col-sm-12">
				<span style="color:red">
					{{ session('msg') }}
				</span>
			  <div class="card-box table-responsive">
				
				<table id="datatable" class="table table-striped table-bordered" style="width:100%">
				  <thead>
					<tr>
					  <th  style="width:2%;" >S#</th>
					  <th style="width:50%;" >Title</th>
					  <th style="width:10%;" >Slug</th>

					  <th style="width:15%;" >Image</th>
					  <th style="width10%;" >Date</th>
					  <th style="width:16%;" >Action</th>
					</tr>
				  </thead>
				  <tbody>

					{{-- retrieving data from posts database table --}}
					  {{$counter = 0}}
					  @foreach ($result as $list)
					  {{$counter +=1}}
					<tr>
					  <td>{{$counter}}</td>
					  <td>{{$list->title}}</td>
					  <td>{{$list->slug}}</td>

					  <td><img style="width:50%" src="{{ asset('/storage/posts/'.$list->image) }}" alt="Image not found">  </td>
					  <td>{{$list->post_date}}</td>
					  <td>
						  <a href="{{ url('/admin/post/edit/'.$list->id) }}" class="btn btn-primary btn-round">Edit</a>

						  
						  <a href="{{ url('/admin/post/delete/'.$list->id)}}" class="btn btn-danger btn-round">Delete</a>
					  </td>
					</tr> 
					  @endforeach
					
				  </tbody>
				</table>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	</div>




  </div>
@endsection