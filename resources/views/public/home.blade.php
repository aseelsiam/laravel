@extends('public.layout')

@section('content')
@if(count($posts) > 0)
<section class="tm-section tm-section-margin-bottom-0 row">

          <div class="col-lg-12 tm-section-header-container">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="front/img/logo.png" alt="Logo" class="tm-site-logo"> Popular Items</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>
          <div class="col-lg-12 tm-popular-items-container">
          @foreach($posts as $post)
          <div class="tm-popular-item">
              <img src="/storage/cover_images/{{$post->cover_image}}"  alt="Popular" class="tm-popular-item-img" style="width:286px;height:166px;">
              <div class="tm-popular-item-description">
                <h3 class="tm-handwriting-font tm-popular-item-title">{{$post->title}}</h3><hr class="tm-popular-item-hr">
                <p>{{$post->body}}</p>
                <div class="order-now-container">
                  <a href="#" class="order-now-link tm-handwriting-font">Order Now</a>
                </div>
              </div>              
            </div>
          @endforeach
          </div>          
        </section>
@endif
@endsection