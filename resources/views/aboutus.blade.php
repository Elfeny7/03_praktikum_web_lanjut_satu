@extends('layouts.nav')
@section('title', 'About Us')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/aboutusStyle.css')}}">
@endsection
@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="{{asset('assets/img/1.jpg')}}" class="d-block w-100" alt="gambar1">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{asset('assets/img/2.png')}}" class="d-block w-100" alt="gambar2">
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="{{asset('assets/img/3.jpg')}}" class="d-block w-100" alt="gambar3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
@endsection
