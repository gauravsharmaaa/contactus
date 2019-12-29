<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>  
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script> -->

        <script src="{{ asset('public/vendor/contactus/bootstrap/jquery.min.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('public/vendor/contactus/bootstrap/bootstrap.min.css')}}"> 
        <script type="text/javascript" src="{{ asset('public/vendor/contactus/bootstrap/bootstrap.min.js') }}"></script> 

</head>
<body>
	<!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    @if(session('success'))
        <div class="alert alert-success" style="text-align: center;"> 
          {{ session('success') }}
        </div>
    @endif 
    @if(session('error'))
        <div class="alert alert-danger" style="text-align: center;">  
          {{ session('error') }}
        </div>
    @endif 
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row"> 

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="{{ route('contactus') }}" method="POST">
                    {{ csrf_field() }}

                <!--Grid row-->
                <div class="row">

                    <!--Grid column--> 
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control" required>  
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6"> 
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control" required >
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->  

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control" required>
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div> 
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form"> 
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            <div class="text-center text-md-left">
                <button class="btn btn-primary" type="submit">Send</button>
            </div>
            <div class="status"></div>
            </form>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>test testing</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@sharmag.in</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->

</body>
</html>