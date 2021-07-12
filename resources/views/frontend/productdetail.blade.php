@extends('frontend.master')
@section('titlepage')
<title>{{$products->name}} Rokkhas</title>
@section('title', 'Products Detail')
<link rel="stylesheet" href="{{asset('css/product-detail.css')}}">

<!-- Background -->
<!-- <div class="background">
    <img src="{{asset("images/".$products->img_url)}}" alt="">
    <div class="text-center">
        <p>{{$products->name}}</p>
    </div>
</div> -->
<!--  -->

<section id="productdetail">
<img src="{{asset("images/".$products->img_url)}}" alt="">
<div class="card-deck">
<div class="col-md-3.5">
  <div class="card">
  
  <img src="{{asset("images/".$products->img_url)}}" alt="">
    <div class="card-body">
      <h5 class="card-title"><p>{{$products->name}}</p></h5>
      <p class="card-text">{!!$products->description!!}</p>
    </div>
    
    <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
        class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
        </div>  
    </div>
    </div>
  
    </section>
<!-- Product Body -->
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8">
        <img src="{{asset("images/".$products->img_url)}}" alt="">
        <p>{{$products->name}}</p>
            <div class="product-desc">
              
                <p class="card-text">{!!$products->description!!}</p>
            </div>
            <button type="button" class="btn btn-primary btn-md mr-1 mb-2">Buy now</button>
    <button type="button" class="btn btn-light btn-md mr-1 mb-2"><i
        class="fas fa-shopping-cart pr-2"></i>Add to cart</button>
        </div> -->

        <!--Section: Block Content-->



<!--Section: Block Content-->
        <!-- <div class="col-md-4">
            <div class="product-side">
                <b>ឧបករណ៍ដាំដុះដែលអ្នកត្រូវការ:</b>
                <div class="row equipment">
                    <div class="col">
                        <div class="card">
                            <img src="img/dirt.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ដីមានជីជាតិ</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                          <br>
                          <div class="card">
                            <img src="img/fertilizer.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ជីសរីរាង្គ</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img src="img/pot.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ផើង</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                          <br>
                          <div class="card">
                            <img src="img/bamboostand.png" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">ឈើទប់ដំណាំ</h5>
                              <a href="#" class="btn btn-info">ទិញឥឡូវនេះ</a>
                            </div>
                          </div>
                    </div> -->
                <!-- </div>
            </div> -->
            <br/> 
        
    </div>
</div>
</section>
<!--  -->