@extends('layouts.layout')


@section('content')
<div class="home-content">
    <!-- Image Slider -->
    <div id="image-slider" class="splide">
        <div class="splide__track">
              <ul class="splide__list">
                  <li class="splide__slide">
                      <img src={{asset('storage/tshirt.jpg')}}>
                  </li>
                  <li class="splide__slide">
                      <img src={{asset('storage/img.jpg')}}>
                  </li>
                  <li class="splide__slide">
                      <img src={{asset('storage/tshirt.jpg')}}>
                  </li>
              </ul>
        </div>
        <div class="splide__progress">
            <div class="splide__progress__bar">
            </div>
      </div>
    </div>

    <!-- Flash Sale Content -->
    <div class="sale-content">
        <span class="flash-sale">Flash Sale </span>
        <div class="sale-text">
            <div class="clock-container">
                <div class="clock-col">
                <p class="clock-hours clock-timer">
                </p>
                </div>
                <div class="clock-col">
                <p class="clock-minutes clock-timer">
                </p>
                </div>
                <div class="clock-col">
                <p class="clock-seconds clock-timer">
                </p>
                </div>
            </div>
        </div>
        <a href="#">See All</a>

        <!-- Flash Sale Items -->
        <div class="sale-items">
            <div class="sale-product">
                <img src={{asset('storage/tshirt.jpg')}} alt="">
                <div class="price">
                    <span class="new-price">$1200</span>
                    <span class="old-price">$1500 <span class="discount">20%</span></span>
                    <div class="w3-border">
                        <div class="w3-red" style="height:10px;width:60%"></div>
                      </div>
                </div>
            </div>
            <div class="sale-product">
                <img src={{asset('storage/tshirt.jpg')}} alt="">
                <div class="price">
                    <span class="new-price">$1200</span>
                    <span class="old-price">$1500 <span class="discount">20%</span></span>
                    <div class="w3-border">
                        <div class="w3-red" style="height:10px;width:60%"></div>
                      </div>
                </div>
            </div>
            <div class="sale-product">
                <img src={{asset('storage/tshirt.jpg')}} alt="">
                <div class="price">
                    <span class="new-price">$1200</span>
                    <span class="old-price">$1500 <span class="discount">20%</span></span>
                    <div class="w3-border">
                        <div class="w3-red" style="height:10px;width:60%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
