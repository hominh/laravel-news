@extends('frontend.master')
@section('title',$cates->description)
@section('description',$cates->description)
@section('keyword',$cates->keyword)
@section('content')
<div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb -->  
      <ul class="breadcrumb">
        <li>
          <a href="#">Home</a>
          <span class="divider">/</span>
        </li>
        <li class="active">Category</li>
      </ul>
      <div class="row">        
        <!-- Sidebar Start-->
        <aside class="span3">
         <!-- Category-->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Categories</span></h2>
            <ul class="nav nav-list categories">
              @foreach($menu_cate as $item)
                <li>
                  <a href="{!! URL('category',[$item->id,$item->alias]) !!}">{!! $item->name !!}</a>
              @endforeach
              
            </ul>
          </div>
         <!--  Best Seller -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Best Seller</span></h2>
            <ul class="bestseller">
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Women Accessories</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
              <li>
                <img width="50" height="50" src="img/prodcut-40x40.jpg" alt="product" title="product">
                <a class="productname" href="product.html"> Product Name</a>
                <span class="procategory">Electronics</span>
                <span class="price">$250</span>
              </li>
            </ul>
          </div>
          <!-- Latest Product -->  
          <div class="sidewidt">
            <h2 class="heading2"><span>Latest Products</span></h2>
            <ul class="bestseller">
              @foreach($lastest_products as $item)
                <li>
                  <img width="50" height="50" src="{!! asset('resources/upload/'.$item->image) !!}" alt="{!! $item->name !!}" title="{!! $item->name !!}">
                  <a class="productname" href="product.html"> {!! $item->nameproduct !!}</a>
                  <span class="procategory">{!! $item->name !!}</span>
                  <span class="price">{!! number_format($item->price,2, ",", ".") !!}</span>
                </li>
              @endforeach
              
              
            </ul>
          </div>
          <!--  Must have -->  
          <div class="sidewidt">
          <h2 class="heading2"><span>Must have</span></h2>
          <div class="flexslider" id="mainslider">
            <ul class="slides">
              <li>
                <img src="img/product1.jpg" alt="" />
              </li>
              <li>
                <img src="img/product2.jpg" alt="" />
              </li>
            </ul>
          </div>
          </div>
        </aside>
        <!-- Sidebar End-->
        <!-- Category-->
        <div class="span9">          
          <!-- Category Products-->
          <section id="category">
            <div class="row">
              <div class="span9">
               <!-- Category-->
                <section id="categorygrid">
                  <ul class="thumbnails grid">
                    @foreach($product_cate as $item)
                    <li class="span3">
                      <a class="prdocutname" href="product.html">{!! $item->name !!}</a>
                      <div class="thumbnail">
                        <span class="sale tooltip-test">Sale</span>
                        <a href="#"><img alt="" src="{!! asset('resources/upload/'.$item->image) !!}"></a>
                        <div class="pricetag">
                          <span class="spiral"></span><a href="#" class="productcart">ADD TO CART</a>
                          <div class="price">
                            <div class="pricenew">{!! number_format($item->price,2, ",", ".") !!}</div>
                            <!--<div class="priceold">$5000.00</div>!-->
                          </div>
                        </div>
                      </div>
                    </li>
                    @endforeach
                  </ul>
                  <div class="pagination pull-right">
                    <ul>
                      <li><a href="#">Prev</a>
                      </li>
                      <li class="active">
                        <a href="#">1</a>
                      </li>
                      <li><a href="#">2</a>
                      </li>
                      <li><a href="#">3</a>
                      </li>
                      <li><a href="#">4</a>
                      </li>
                      <li><a href="#">Next</a>
                      </li>
                    </ul>
                  </div>
                </section>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection