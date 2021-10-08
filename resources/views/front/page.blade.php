@extends('/front/layout.layout')
@section('page_title', $result[0]->name)

@section('container')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{ asset('front_assets/assets/img/about-bg.jpg')}}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1> {{$result[0]->name}} </h1>
                    <span class="subheading">{{$result[0]->added_on}} </span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<main class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <p> {{$result[0]->description}} </p>
            </div>
        </div>
    </div>
</main>
@endsection