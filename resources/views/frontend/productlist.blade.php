@extends('frontend.master')
@section('titlepage')
<title>catagories</title>
@section('title', 'Products List')
<link rel="stylesheet" href="{{asset('css/product-list.css')}}">
<div class="background">
    <img src="img/plant1.jpg" alt="">
    <div class="text-center header-text">
       
    </div>
</div>

<!-- <section id="product">
  <div class="container-fluid product-body">
      <div class="row">
        <div class="col-md-2">
          <div class="container">
            <p style="font-size: 36px;">Type of plant</p>
          <ul>
              @foreach ($allproductstype as $productstype)
                  <li><a href="{{ route('productscategory',$productstype->id) }}">{{$productstype->name}}</a></li>
              @endforeach
          </ul>
          </div>
        </div>
        <div class="col-md-10">
          <div class="container">
            <div class="card-deck">
              @forelse ($allproducts as $products)
              <div class="col mb-4">
                <div class="card mx-auto">
                  <img src="{{asset("images/".$products->img_url)}}"   class="card-img-top" alt="...">
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
    </div>  -->

    <div class="container">
            <p style="font-size: 36px;">Type of plant</p>
          <ul>
              @foreach ($allproductstype as $productstype)
                  <li><a href="{{ route('productscategory',$productstype->id) }}">{{$productstype->name}}</a></li>
              @endforeach
          </ul>
          </div>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<div class="container">
    <div class="row clearfix">
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-4 col-sm-12">
            <div class="card product_item">
                <div class="body">
                    <div class="cp_img">
                        <img src="{{asset("images/".$products->img_url)}}" alt="Product" class="img-fluid" style="height=20px">
                        <div class="card-body">
                          <h5 class="card-title"><a href="{{ route('productdetail',$products->id) }}">{{$products->name}}</a></h5>
                        </div>
                        <div class="hover">
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                        </div>
                    </div>
                    <div class="product_details">
                        <h5><a href="ec-product-detail.html"></a></h5>
                        <ul class="product_price list-unstyled">
                            <li class="old_price">$16.00</li>
                            <li class="new_price">$13.00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
