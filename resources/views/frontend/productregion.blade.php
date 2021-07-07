@extends('frontend.master')
@section('titlepage')
<title>Region</title>
@section('title', 'Products by Region')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<div class="background">
    <img src="img/plant1.jpg" alt="">
    <div class="text-center header-text">
        <p>Plant base on region</p>
    </div>
</div>
<section id="product">
    <div class="container-fluid product-body">
        <div class="row">
          <div class="col-md-4">
            <div class="container catergory">
                <p style="font-size: 36px;">Region</p>
            <ul>
              @foreach ($allproductsRegion as $productsRegion)
              <li><a href="{{ route('regionscategory',$productsRegion->id) }}">{{$productsRegion->name}}</a></li>
          @endforeach
            </ul>
            </div>
          </div>

            <div class="col-md-8">
              <div class="container">
                <div class="card-deck">
                  @forelse ($allproducts as $products)
                  <div class="col mb-4">
                    <div class="card mx-auto">
                      <img src="{{asset("images/".$products->img_url)}}" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                      </div>
                    </div>
                  </div>
                  @empty
                  <h1>No products yet</h1>
                  @endforelse
                </div>
              </div>
            </div>

        </div>
      </div>
</section>