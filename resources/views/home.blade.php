@extends('layouts.app')

@section('title', 'My Home Page')

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
@endsection

@section('content')
<center>
    <div class="bg">
        <div class="box">
            <img src="{{asset('assets/img/ikmal.jpg')}}" alt="profile" class="box-img">
            <h1>Ikmal Faris</h1>
            <h5>Bukan siapa-siapa</h5>
            <p>Aku hanya ingin hidup bahagia dan tidak ingin menyesali suatu perbuatan yang telah kulakukan</p>
            <div class="button">
                <a href="{{route('product')}}"><button type="button" class="btn btn-light" id="btn">Product</button></a>
                <a href="{{route('news')}}"><button type="button" class="btn btn-light" id="btn">News</button></a>
                <a href="{{route('program')}}"><button type="button" class="btn btn-light" id="btn">Program</button></a>
                <a href="{{route('about-us')}}"><button type="button" class="btn btn-light" id="btn">About Us</button></a>
                <a href="{{route('contact-us')}}"><button type="button" class="btn btn-light" id="btn">Contact Us</button></a>
            </div>
        </div>
    </div>
</center>
@endsection