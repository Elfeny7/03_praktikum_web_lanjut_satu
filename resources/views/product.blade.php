@extends('layouts.nav')
@section('title', 'Product')
@section('css')
<link rel="stylesheet" href="{{asset('assets/css/productStyle.css')}}">
@endsection
@section('content')
<div class="container-xxl" id="card">
  <div class="row row-cols-1 row-cols-md-5 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//89/MTA-2567222/xiaomi_xiaomi-pocophone-f1-smartphone--6gb--128gb-_full13.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pocophone F1</h5>
          <p class="card-text">Hp yang paling gw benci. Ngebut sih tapi ghosttouch parah</p>
          <a href="{{Route('pocof1')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://s4.bukalapak.com/bukalapak-kontenz-production/content_attachments/65184/w-740/Xiaomi_Mi_10T_Pro.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Mi 10T</h5>
          <p class="card-text">Hp yang punya performa paling ngebut yg pernah gw pake</p>
          <a href="{{Route('mi10t')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://pindahlubang.com/wp-content/uploads/2019/10/Kelebihan-dan-Kekurangan-Xiaomi-Redmi-Note-5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Redmi Note 5</h5>
          <p class="card-text">Hp Fullscreen pertama gw dan pertama kali beli bekas</p>
          <a href="{{Route('note5')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//93/MTA-1517835/xiaomi_xiaomi-redmi-note-4x-prime-smartphone---black--64-gb-4-gb-_full04.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Redmi Note 4X</h5>
          <p class="card-text">Hp batre paling awet pada masanya</p>
          <a href="{{Route('note4x')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="https://cf.shopee.co.id/file/f4fba07eda12f7fc3945006cf1854f48" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Redmi 2 Prime</h5>
          <p class="card-text">Hp pertama buat ngoprek</p>
          <a href="{{Route('r2prime')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection