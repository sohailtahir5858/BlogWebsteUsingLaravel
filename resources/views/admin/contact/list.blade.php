@extends('admin/layout.layout')

@section('page_title', 'Contact Listing')
@section('container')
<div class="page-title">
	<div class="title_left">
	  <h3>Contacts </h3>
	  <a href="/admin/page/add" class="btn btn-primary ">Add Contact</a>
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
					  <th style="width:10%;" >Name</th>
					  <th style="width:10%;" >Email</th>
					  <th style="width:10%;" >Mobile</th>
					  <th style="width:60%;" >Message</th>
					  <th style="width:80%;" >Added on</th>


					</tr>
				  </thead>
				  <tbody>

					{{-- retrieving data from posts database table --}}
					  {{$counter = 0}}
					  @foreach ($result as $list)
					  {{$counter +=1}}
					<tr>
					  <td>{{$counter}}</td>
					  <td>{{$list->name}}</td>
					  <td>{{$list->email}}</td>
					  <td>{{$list->mobile}}</td>
					  <td>{{$list->message}}</td>
					  <td>{{$list->added_on}}</td>


					  
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