@extends('layout')
@section('content')

 <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-5" data-bg-img="/images/bg/bg6.jpg">
      <div class="container pt-100 pb-50">
        <!-- Section Content -->
        <div class="section-content pt-100">
          <div class="row"> 
            <div class="col-md-12">
              <h3 class="title text-white">About Us</h3>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- Section: About -->
    <section> 
      <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <img src="/images/bg/bg3.jpg" alt="">
            </div>
            <div class="col-sm-12 col-md-5">
                <h3 class="text-theme-colored text-uppercase mt-0">About Us</h3>
                <p>RCCG Resurrection Ground Parish was founded on the 6th of October, 2013 and was pioneered by Pastor Joseph Ugochukwu Okenwa who is also the Country Coordinator of The Redeemed Christian Church of God Angola.</p>

                <p>It is an arm of the big body of The Redeemed Christian Church of God. Her mother Parish is RCCG, Resurrection Parish Lekki @ 1st Gate Jakande Estate, Km 15, Lekki Express Way, Nigeria.</p>

                <h5>Pastor in charge of Parish</h5>
                  <ul class="list theme-colored">
                    <li><strong>Name</strong> : Pastor Ekpe Declan C.</li>
                    <li><strong>Phone</strong> : {{ config('app.phone')}}</li>
                    <li><strong>Email</strong> : {{ config('app.email')}}</li>
                  </ul>

                 <h3 class="text-theme-colored text-uppercase mt-10">CORE OBJECTIVE:</h3>
                <p>Reach Angolans, equip them with the undiluted Truth of God's Word and the Holy Spirit so that burning with passion and zeal for the Lord's Kingdom, they will eclipse the territory with the principles and glory of God's kingdom.</p>
            </div>
        </div>
      </div>
    </section>
    
    <!-- divider: Emergency Services -->
    <section class="divider parallax layer-overlay overlay-deeper" data-stellar-background-ratio="0.2"  data-bg-img="/images/bg/bg1.jpg">
      <div class="container">
        <div class="section-content text-center">
          <div class="row">
            <div class="col-md-12">
              <h3 class="mt-0 text-white">Come and be part of our wonderful family</h3>
              <h2 class="text-white">Join the destiny moulders as we together make the difference the world is looking for. Just call at <span class="text-theme-colored">({{ config('app.phone')}})</span> </h2>
            </div>
          </div>
        </div>
      </div>      
    </section>

    <!-- Section: Causes 3 -->
    <section class="bg-lighter"> 
      <div class="container pb-80">
        <div class="section-title text-center">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">
              <h2 class="mt-0 line-height-1">PARISHES<span class="text-theme-colored"> UNDER US </span></h2>
              
            </div>
          </div>
        </div>
        <div class="row mb-30">
            <div class="col-md-3">
              <div class="team-member maxwidth400">
                <div class="thumb"><img alt="" src="/images/team/0.jpg" class="img-fullwidth"></div>
                <div class="info">
                  <h5 class="mb-0">RCCG Resurrection Ground (Headquarter) Parish, Luanda, Angola.</h5>
                  <p><b><i class="fa fa-user"></i></b> Pastor Ekpe Declan C.
                  <br><b><i class="fa fa-mobile"></i></b> +244 927 556 703</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-member maxwidth400">
                <div class="thumb"><img alt="" src="/images/team/6.jpg" class="img-fullwidth"></div>
                <div class="info">
                  <h5 class="mb-0"> RCCG, Mount Olives Parish, Prenda, Luanda, Angola</h5>
                  <p><b><i class="fa fa-user"></i></b> Deacon Rufino Sumonga Daniel
                  <br><b><i class="fa fa-mobile"></i></b> +244 927 111 732</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-member maxwidth400">
                <div class="thumb"><img alt="" src="/images/team/1.jpg" class="img-fullwidth"></div>
                <div class="info">
                  <h5 class="mb-0"> RCCG City Church Parish, Talatona, Luanda Angola.</h5>
                  <p><b><i class="fa fa-user"></i></b> Pastor Adenuga Damilola.
                  <br><b><i class="fa fa-mobile"></i></b> +244 928 020 296</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="team-member maxwidth400">
                <div class="thumb"><img alt="" src="/images/team/2.jpg" class="img-fullwidth"></div>
                <div class="info">
                  <h5 class="mb-0"> I.C.R.D.A, A Mão de Deus Paróquia, Vila Flor, Luanda, Angola</h5>
                  <p><b><i class="fa fa-user"></i></b> Bro Pedro Da Silva Costa
                  <br><b><i class="fa fa-mobile"></i></b> +244 943 022 977</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          
            <div class="col-md-3">
              <div class="team-member maxwidth400">
                <div class="thumb"><img alt="" src="/images/team/7.jpg" class="img-fullwidth"></div>
                <div class="info">
                  <h5 class="mb-0">RCCG, Solution Arena Parish, Zango 4, Luanda, Angola</h5>
                  <p><b><i class="fa fa-user"></i></b> Bro Nduka Onyinye
                  <br><b><i class="fa fa-mobile"></i></b> +244 925 374 067</p>
                  <ul class="styled-icons icon-theme-colored icon-circled icon-dark icon-sm mt-10 mb-0">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>     
          </div>
      </div>
    </section>
    
  
@endsection