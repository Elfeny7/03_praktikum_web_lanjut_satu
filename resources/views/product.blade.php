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
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pocophone F1</h5>
          <p class="card-text">Hp yang paling gw benci. Ngebut sih tapi ghosttouch parah</p>
          <a href="{{Route('pocof1')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Mi 10T</h5>
          <p class="card-text">Hp yang punya performa paling ngebut yg pernah gw pake</p>
          <a href="{{Route('mi10t')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Redmi Note 5</h5>
          <p class="card-text">Hp Fullscreen pertama gw dan pertama kali beli bekas</p>
          <a href="{{Route('note5')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Xiaomi Redmi Note 4X</h5>
          <p class="card-text">Hp batre paling awet pada masanya</p>
          <a href="{{Route('note4x')}}" class="btn btn-primary">Buy</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
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