@extends('/front/layout.layout')
@section('page_title', 'Contact Page')

@section('container')
<!-- Page Header-->
<header class="masthead" style="background-image: url('{{asset('front_assets/assets/img/contact-bg.jpg') }}')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="page-heading">
                    <h1>Contact Me</h1>
                    <span class="subheading">Have questions? I have answers.</span>
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
                <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
                <div class="my-5">
                    
                    <form id="contactForm" action=" {{url('front/contact_submit')}} " method="post">
                        {{@csrf_field()}}

                        <div class="form-floating">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." name="name" />
                            <label for="name">Name</label>
                           
                        </div>


                        <div class="form-floating">
                            <input class="form-control" id="email" type="email" name="email" placeholder="Enter your email..."  />
                            <label for="email">Email address</label>

                            
                        </div>


                        <div class="form-floating">
                            <input class="form-control" id="mobile" type="tel" name="mobile" placeholder="Enter your phone number..."  />
                            <label for="mobile">Phone Number</label>

                           
                        </div>


                        <div class="form-floating">
                            <textarea class="form-control" id="message" placeholder="Enter your message here..." style="height: 12rem" name="message"></textarea>
                            <label for="message">Message</label>

                           
                        </div>
                        <br />
                        
                        
                        
                        
                        <!-- Submit Button-->
                        <button class="btn btn-primary text-uppercase " id="submit" name="submit" type="submit">Send</button> <br>
                        <span class="spanCSS">{{ session('msg') }}</span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection