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
        @foreach ($products as $product)
        <div class="box_container">
          <div class="img-box">
            <img src="{{ asset('images/'.$product->image) }}" class="img1" alt="" width="100px" height="200px">
          </div>
          <div class="box">
            <div class="detail-box">
              <h5>
                <a href="{{ route('single_product',['id'=>$product->id]) }}">{{ $product->name }}</a>
              </h5>
              <p>
                {{ $product->description }}
              </p>
              <p>
                {{ $product->price }}
              </p>
              {{-- <button>Add to cart</button> --}}
               <form action="">
                <input class="btn btn-outline-light add-to-cart-btn" type="submit" value="Add To Cart">
               </form>
              
            </div>
          </div>
        </div>
        @endforeach
        
        
      </div>
    </div>
  </section>
  <!-- end product section -->


@endsection