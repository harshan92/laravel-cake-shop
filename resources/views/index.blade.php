@extends('layouts.main')

@section('content')
 <!-- slider section -->
 <section class=" slider_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6 ">
          <div class="detail_box">
            <h1>
              Welcome to <br>
              Our Cake Shop
            </h1>
            <p>
              There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, </p>
            <a href="" class="">
              Shop Now
          </div>
        </div>
        <div class="col-lg-5 col-md-6 offset-lg-1">
          <div class="img_container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <div class="img-box">
                    <img src="{{ asset('images/slider-img1.png') }}" alt="">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="{{ asset('images/slider-img2.png') }}" alt="">
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="img-box">
                    <img src="{{ asset('images/slider-img3.png') }}" alt="">
                  </div>
                </div>
              </div>
              <div class="carousel_btn-box">
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="sr-only">Next</span>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end slider section -->
</div>


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
              {{ $product->name }}
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

<!-- about section -->
<section class="about_section layout_padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box pr-md-4 pr-lg-5">
          <img src="{{ asset('images/about-img.png') }}" alt="" />
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About Us
            </h2>
          </div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
          </p>
          <a href="">
            Read More
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end about section -->


<!-- client section -->
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        What Customer Says
      </h2>
    </div>
  </div>
  <div id="carouselExample2Indicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExample2Indicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExample2Indicators" data-slide-to="1"></li>
      <li data-target="#carouselExample2Indicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="client_container">
            <div class="row">
              <div class="col-md-6">
                <div class="client_box">
                  <div class="img_box">
                    <img src="{{ asset('images/client-1.png') }}" />
                  </div>
                  <div class="detail_box">
                    <h5>
                      John Doe
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box">
                  <div class="img_box">
                    <img src="{{ asset('images/client-2.png') }}" />
                  </div>
                  <div class="detail_box">
                    <h5>
                      Alice Kent
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container">
          <div class="client_container">
            <div class="row">
              <div class="col-md-6">
                <div class="client_box">
                  <div class="img_box">
                    <img src="{{ asset('images/client-1.png') }}" />
                  </div>
                  <div class="detail_box">
                    <h5>
                      John Doe
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box">
                  <div class="img_box">
                    <img src="{{ asset('images/client-2.png') }}" />
                  </div>
                  <div class="detail_box">
                    <h5>
                      Alice Kent
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <div class="container">
          <div class="client_container">
            <div class="row">
              <div class="col-md-6">
                <div class="client_box">
                  <div class="img_box">
                    <img src="{{ asset('images/client-1.png') }}" />
                  </div>
                  <div class="detail_box">
                    <h5>
                      John Doe
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="client_box">
                  <div class="img_box">
                    <img src="{{ asset('images/client-2.png') }}" />
                  </div>
                  <div class="detail_box">
                    <h5>
                      Alice Kent
                    </h5>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniaLorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end client section -->

<!-- contact section -->

<section class="contact_section layout_padding">
  <div class="container ">
    <div class="heading_container">
      <h2>
        Contact Us
      </h2>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-6 mx-auto">
        <form action="">
          <div>
            <input type="text" placeholder="Name" />
          </div>
          <div>
            <input type="email" placeholder="Email" />
          </div>
          <div>
            <input type="text" placeholder="Phone Number" />
          </div>
          <div>
            <input type="text" class="message-box" placeholder="Message" />
          </div>
          <div class="d-flex justify-content-center">
            <button>
              SEND
            </button>
          </div>
        </form>
      </div>

    </div>
  </div>
  <div class="container">
    <div class="contact_items">

      <a href="">
        <div class="item ">
          <div class="img-box ">
            <img src="{{ asset('images/call.png') }}" alt="">
          </div>
          <div class="detail-box">
            <p>
              +02 1234567890
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div class="img-box ">
            <img src="{{ asset('images/mail.png') }}" alt="">
          </div>
          <div class="detail-box">
            <p>
              demo@gmail.com
            </p>
          </div>
        </div>
      </a>
      <a href="">
        <div class="item ">
          <div class="img-box ">
            <img src="{{ asset('images/location.png') }}" alt="">
          </div>
          <div class="detail-box">
            <p>
              Location
            </p>
          </div>
        </div>
      </a>
    </div>
  </div>
</section>

<!-- end contact section -->
@endsection