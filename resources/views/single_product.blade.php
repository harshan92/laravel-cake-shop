@extends('layouts.main')

@section('content')

<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our products
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have
        </p>
      </div>

      <div class="product_container">
        <div class="box_container">
          <div class="img-box">
            <img src="{{ asset('images/p1.png') }}" class="img1" alt="">
          </div>
          <div class="box">
            <div class="detail-box">
              <h5>
                Classic Treat
              </h5>
              <p>
                There are many variations of passages of Lorem Ipsum available, butdon't look even slightly believable.
              </p>
              <a href="">
                <img src="{{ asset('images/right-arrow.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="box_container">
          <div class="img-box">
            <img src="{{ asset('images/p2.png') }}" class="img1" alt="">
          </div>
          <div class="box active">
            <div class="detail-box">
              <h5>
                Party Special
              </h5>
              <p>
                There are many variations of passages of Lorem Ipsum available, butdon't look even slightly believable.
              </p>
              <a href="">
                <img src="{{ asset('images/right-arrow.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
        <div class="box_container">
          <div class="img-box">
            <img src="{{ asset('images/p3.png') }}" class="img1" alt="">
          </div>
          <div class="box">
            <div class="detail-box">
              <h5>
                Sweet Treat
              </h5>
              <p>
                There are many variations of passages of Lorem Ipsum available, butdon't look even slightly believable.
              </p>
              <a href="">
                <img src="{{ asset('images/right-arrow.png') }}" alt="">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end product section -->
@endsection