@extends('/front/layout.layout')
@section('page_title', 'Home Page')

@section('container')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{ asset('front_assets/assets/img/home-bg.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1 style="font-size: 55px">Home</h1>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->
<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            @foreach ($result as $list)
                
            <!-- Post preview-->
            <div class="post-preview">
                <a href=" {{url('front/post/'.$list->slug)}} ">
                    <h2 class="post-title">{{$list->title}}</h2>
                    <h3 class="post-subtitle">{{$list->short_desc}}</h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#!">Start Bootstrap</a>
                    on September 24, 2021
                </p>
            </div>
            <!-- Divider-->
            <hr class="my-4" />
            @endforeach
            
            <!-- Pager-->
            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
        </div>
    </div>
</div>
@endsection