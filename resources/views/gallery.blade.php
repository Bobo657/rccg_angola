@extends('layout')
@section('content')

 <div class="content-wrapper">
    <div class="breadcrumb-wrap bg-f br-1">
        <div class="overlay bg-black op-9"></div>
        <img src="/assets/img/shape-1.png" alt="Image" class="br-shape-1">
        <img src="/assets/img/shape-2.png" alt="Image" class="br-shape-2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="breadcrumb-title">
                        <h2>Gallery</h2>
                        <ul class="breadcrumb-menu list-style">
                            <li><a href="/">Home </a></li>
                            <li>Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="gallery-wrap pt-100 pb-75">
        <div class="container">
            <div class="row justify-content-center">
                @for($i = 1; $i < 17; $i++)
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <a data-fancybox="gallery" href="/assets/img/feature/feature-item-{{ $i}}.jpg">
                                <img src="/assets/img/feature/feature-item-{{ $i}}.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
                @endfor
              
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <a data-fancybox="gallery" href="/assets/img/feature/feature-item-2.jpg">
                                <img src="/assets/img/feature/feature-item-2.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6 col-md-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <a data-fancybox="gallery" href="/assets/img/feature/feature-item-3.jpg">
                                <img src="/assets/img/feature/feature-item-3.jpg" alt="Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>


@endsection