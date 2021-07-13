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
    </div> -->
</div> -->

<section id="productdetail">

  
  <img src="{{asset("images/".$products->img_url)}}" alt="">
    <div class="card-body">
      <h5 class="card-title"><p>{{$products->name}}</p></h5>
      <p class="card-text">{!!$products->description!!}</p>
    </div>
    
    <button type="button" class="btn btn-primary btn-md mr-1 mb-2"> Buy now</button>
    <button type="button" class="btn btn-light btn-md mr-1 mb-2">Add to cart </button>
        </div>  
    
  
    </section>
<
            <br/> 
        
    </div>
</div>
</section>
<!--  -->