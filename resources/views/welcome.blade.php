@extends('layouts.nav')


@section('content')

  @include('layouts.search')

  <!-- BANNER -->
  <img class="banner" src="{{ asset('assets/img/banner.png') }}" />

  @include('layouts.highlights')
  


<!-- Product Slider -->
<div style="display: flex; align-items: center; margin-left: 8%; margin-right: 6%">
  <div class="inner-service-cardcontainer" style="background: #008AEE; width: 25%; height: 300px; margin-right: 30px">
   <div class="title-container">
     <img src="{{ asset('assets/img/settingsvector.svg') }}" alt="">
     <div  class="card-title-service">Parts for Sale</div>
   </div>
   <div class="subtitle-card-position">
       <span class="subtitle-card">Advertisements for parts in MegaParts
   </div>
   <button style="background-color:white; font-family: Roboto; font-size: 18px; font-weight: 700; border-radius: 20px" class="btn m-2"><span style="color: #008AEE;">Explore</span>
    <i style="color: #008AEE; vertical-align: -.125em;" class="bi bi-arrow-right"></i>
   </button>
 </div>


 @if(count($products) > 0)
      <div id="swiperRef" class="swiper mySwiper">
                      <div class="swiper-wrapper">
                          @foreach ($products as $product)
                              <div class="swiper-slide">
                                  <div class="swiper-card-container">
                                      <img src="{{ $product->image_url }}" />
                                      <div class="swiper-card-description-conatiner">
                                          <div class="swiper-card-description">{{ $product->name }}</div>
                                          <div class="swiper-card-description">{{ $product->description }}</div>
                                          <div class="swiper-card-price">{{ $product->price }} $</div>
                                      </div>
                                  </div>
                              </div>
                          @endforeach
                      </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
          </div>
    </div>
@else
            <div id="swiperRef" class="swiper mySwiper">
               <div style="ms-5"><p>NO PRODUCTS</p></div>
            </div>
            </div>
@endif

@include('layouts.services')

<!-- 3D CAROUSEL -->

  <div class="slider-container-carousel">
    <span class="arrow-left"></span>
    <span class="arrow-right"></span>
    <div class="slider-carousel" id="slider">
      <div style="box-shadow:none;" class="slide prev-2">
        <img src="{{ asset('assets/img/slider1.svg') }}" alt="">
      </div>
      <div style="box-shadow:none;" class="slide prev-1">
        <img src="{{ asset('assets/img/slider1.svg') }}" alt="">
      </div>
      <div style="box-shadow:none;" class="slide active">
        <img src="{{ asset('assets/img/slider1.svg') }}" alt="">
      </div>
      <div style="box-shadow:none;" class="slide next-1">
        <img src="{{ asset('assets/img/slider1.svg') }}" alt="">
      </div>
      <div style="box-shadow:none;" class="slide next-2">
        <img src="{{ asset('assets/img/slider1.svg') }}" alt="">
      </div>
    </div>
  </div>
  </div>

<!-- MAP -->
<div class="mapcontainer" >
  <img src="./img/mapvector.svg" alt="">
</div>


y

@include('layouts.footer')

@endsection