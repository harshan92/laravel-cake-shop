@extends('layouts.main')

@section('content')

<!-- product section -->
<section class="product_section layout_padding">
    <div class="container">
      {{-- <div class="heading_container">
        <h2>
          Our products
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have
        </p>
      </div> --}}
<div class="row">
      {{-- <div class="product_container col-md-12"> --}}
        @foreach ($product_array as $product)
          
        <div class="box_container col-md-12">
          <div class="img-box">
            <img src="{{ asset('images/'.$product->image) }}" class="img1" alt="" width="200" height="200">
          </div>
          <div class="box mt-5">
            <div class="detail-box">
              <h5>
                {{ $product->name }}
              </h5>
              <p>
                {{ $product->description }}
              </p>
              <p>
                {{ $product->price }}
              </p>
              <form action="">
                <input class="btn btn-outline-light add-to-cart-btn" type="submit" value="Add To Cart">
               </form>
            </div>
          {{-- </div> --}}
        </div>
        
        @endforeach
       
      </div>
    </div>
    </div>
  </section>
  <!-- end product section -->
@endsection