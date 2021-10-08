@extends('/front/layout.layout')
@section('page_title', $result[0]->title)


@section('container')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{asset('/storage/posts/' . $result[0]->image) }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="post-heading">
                    <h2 class="subheading"></h2>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Post Content-->
<article class="mb-4">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">

                {{-- heading --}}
                <h2 class="section-heading">{{$result[0]->title}} </h2>
                
                {{-- short desc --}}
                <blockquote class="blockquote">{{$result[0]->short_desc}} .</blockquote>

                {{-- Long desc --}}
                <p>{{$result[0]->long_desc}} </p>
                <p>

                    
                
               
               
            </div>
        </div>
    </div>
</article>
@endsection