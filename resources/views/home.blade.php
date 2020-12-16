@extends('layout.layout')

@section('title')
  Delivery Swensens
@endsection

@section('content')
<div id="carouselheader" class="row carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselheader" data-slide-to="0" class="active"></li>
    <li data-target="#carouselheader" data-slide-to="1"></li>
    <li data-target="#carouselheader" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('/img/carousel/1.jpg')}}">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/img/carousel/2.jpg')}}">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/img/carousel/3.jpg')}}">
    </div>
  </div>
</div>

<div class="menu-order mt-4">
  <h4 class="text-center text-red">ORDER ONLINE</h4>
  <div class="menulist text-center d-none d-md-block">
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/cake.png')}}" alt="cake"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/quart.png')}}" alt="quart"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/mini_quart.png')}}" alt="mini quart"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/sundae.png')}}" alt="sundae"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/scoop.png')}}" alt="scoop"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/topping.png')}}" alt="topping"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/bar.png')}}" alt="bar"></div>
    <div class="d-inline-flex"><img src="{{asset('/img/menu_img/voucher.png')}}" alt="voucher"></div>
  </div>
  
  <div class="row justify-content-center d-md-none">
    <div class="col-8 menulist-slick">
      <div><img src="{{asset('/img/menu_img/cake.png')}}" alt="cake"></div>
      <div><img src="{{asset('/img/menu_img/quart.png')}}" alt="quart"></div>
      <div><img src="{{asset('/img/menu_img/mini_quart.png')}}" alt="mini quart"></div>
      <div><img src="{{asset('/img/menu_img/sundae.png')}}" alt="sundae"></div>
      <div><img src="{{asset('/img/menu_img/scoop.png')}}" alt="scoop"></div>
      <div><img src="{{asset('/img/menu_img/topping.png')}}" alt="topping"></div>
      <div><img src="{{asset('/img/menu_img/bar.png')}}" alt="bar"></div>
      <div><img src="{{asset('/img/menu_img/voucher.png')}}" alt="voucher"></div>
    </div>
  </div>
</div>


<div class="row justify-content-center bg-gradient my-5">
  <div class="col-12 col-md-5 pt-2 text-center text-md-right">
    <img class="card-style" src="{{asset('/img/member_card.png')}}" alt="card">
  </div>
  <div class="col-12 col-md-6 align-self-center my-3 card-detail">
    <div class="text-white large-font">
      <img src="{{asset('/img/icon/icecream.png')}}">
      Get 1 Scoop Free Upon First Time Registration
    </div>
    <div class="text-white large-font">
      <img src="{{asset('/img/icon/free.png')}}">
      Buy 1 get 1 Free Scoop Every Tuesday
    </div>
    <div class="text-white large-font">
      <img src="{{asset('/img/icon/discount.png')}}">
      10% Discount Off Regular Price
    </div>
    <div class="text-center mt-4">
      <button type="button" class="btn common-button-revert">Apply to get benefits</button>
    </div>
  </div>
</div>

@endsection

@section('script')
<script>
  $(function(){
    $('.carousel').carousel({
      interval: 3000
    })

    $('.menulist-slick').slick({
      slidesToShow: 2,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      arrows: true
    })
  })
</script>
@endsection