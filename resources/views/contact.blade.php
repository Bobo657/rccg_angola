@extends('layout')
@section('content')

 <!-- Section: inner-header -->
<section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="/images/bg/bg6.jpg">
  <div class="container pt-60 pb-60">
    <!-- Section Content -->
    <div class="section-content">
      <div class="row">
        <div class="col-md-12 text-center">
          <h2 class="title">Contact</h2>
          <ol class="breadcrumb text-center text-black mt-10">
            <li><a href="#">Home</a></li>
            <li class="active text-theme-colored">Contact Us</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Section: Have Any Question -->
<section class="divider">
  <div class="container pt-60 pb-60">
    <div class="section-title mb-60">
      <div class="row">
        <div class="col-md-12">
          <div class="esc-heading small-border text-center">
            <h3>Have any Questions?</h3>
          </div>
        </div>
      </div>
    </div>
    <div class="section-content">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-phone font-36 mb-10 text-theme-colored"></i>
            <h4>Call Us</h4>
            <h6 class="text-gray">Phone: {{ config('app.phone')}}<br> Phone: {{ config('app.phone1')}}<br>Phone: {{ config('app.phone2')}}

            </h6>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-map-marker font-36 mb-10 text-theme-colored"></i>
            <h4>Address</h4>
            <h6 class="text-gray">{{ config('app.address')}}</h6>
          </div>
        </div>
        <div class="col-sm-12 col-md-4">
          <div class="contact-info text-center">
            <i class="fa fa-envelope font-36 mb-10 text-theme-colored"></i>
            <h4>Email</h4>
            <h6 class="text-gray">{{ config('app.email')}}</h6>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider: Google Map -->
<section>
  <div class="container-fluid pt-0 pb-0">
    <div class="row">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3942.498656118863!2d13.268919514785248!3d-8.833077993656946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f1639a4b0d25%3A0xcae664f038b9ce2c!2sComit%C3%A9%20do%20Distrito%20Urbano%20do%20Rangel!5e0!3m2!1sen!2sng!4v1645714688249!5m2!1sen!2sng" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    <!-- Google Map HTML Codes -->

    </div>
  </div>
</section>
@endsection