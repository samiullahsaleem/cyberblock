@extends('layouts.app')
@section('title', $title)
@section('content')
 
  <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
   <img src="{{asset('img/fashion/account.jpg')}}" alt="fashion img">
   <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Products</h2>
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>         
          <li class="active">Products</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

  <!-- product category -->
  <section id="aa-product-category">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-8 col-md-push-3">
          <div class="aa-product-catg-content">
            <div class="aa-product-catg-head">
              <div class="aa-product-catg-head-left">
            <form action="/filter-products/{{$f}}" method="GET">
                <div class="aa-sort-form">
                  <label for="">Sort by</label>
                  <select name="sort" required>
                    <option value="default" @if ($sf == "default") selected="default" @endif>Default</option>
                    <option value="name" @if ($sf == "name") selected="name" @endif>Name</option>
                    <option value="price" @if ($sf == "price") selected="price" @endif>Price</option>
                    <option value="date" @if ($sf == "date") selected="date" @endif>Date</option>
                  </select>
                </div>
                
                <div class="aa-show-form">
                  <label for="">Show</label>
                  <select name="show" required>
                    <option value="8" @if ($pg == 8) selected="8" @endif>8</option>
                    <option value="16" @if ($pg == 16) selected="16" @endif>16</option>
                    <option value="24" @if ($pg == 24) selected="24" @endif>24</option>
                  </select>
                </div>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="aa-filter-btn" type="submit">Filter</button>
            </form>
              </div>
              <div class="aa-product-catg-head-right">
                <a id="grid-catg" href="#"><span class="fa fa-th"></span></a>
                <a id="list-catg" href="#"><span class="fa fa-list"></span></a>
              </div>
            </div>
            <div class="aa-product-catg-body">
              <ul class="aa-product-catg">
                <!-- start single product item -->
            @foreach ($products as $men)
            <!-- start single product item -->
            <li>
              <figure>
                <a class="aa-product-img" href="/product/{{$men->id}}"><img src="{{asset('img/product-img/main/'.$men->photo.'')}}" alt="{{$men->name}} image"></a>
                <a class="aa-add-card-btn"href="/add-to-cart/{{$men->id}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                  <figcaption>
                  <h4 class="aa-product-title"><a href="/product/{{$men->id}}">{{$men->name}}</a></h4>
                  <span class="aa-product-price">${{$men->price}}</span>
                  @if ($men->in_sale == 'Yes')<span class="aa-product-price"><del>${{$men->discounted_price}}</del></span>@endif
                </figcaption>
              </figure>                        
              <div class="aa-product-hvr-content">
                <a href="/add-to-wishlist/{{$men->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                          
              </div>
              <!-- product badge -->
@if ($men->stock > 0)    
    @if ($men->in_sale == 'Yes')
        <span class="aa-badge aa-sale" href="#">SALE!</span>
    @else
        <span class="aa-badge aa-hot" href="#">HOT!</span>
    @endif
@else
        <span class="aa-badge aa-sold-out" href="#">Sold Out!</span>
@endif
            </li>
            @endforeach
              </ul>
                 
            </div>
            <div class="aa-product-catg-pagination">
              <nav>
                {!! $products->links() !!}
              </nav>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-4 col-md-pull-9">
            <aside class="aa-sidebar">
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Category</h3>
                <ul class="aa-catg-nav">
                  @foreach ($categories as $category)
                    <li><a href="/category/{{$category->slug}}">{{$category->name}}</a></li>
                  @endforeach
                </ul>
              </div>
              <!-- single sidebar -->
              <div class="aa-sidebar-widget">
                <h3>Tags</h3>
                <div class="tag-cloud">
                  <a href="#">Fashion</a>
                  <a href="#">Ecommerce</a>
                  <a href="#">Shop</a>
                  <a href="#">Hand Bag</a>
                  <a href="#">Laptop</a>
                  <a href="#">Head Phone</a>
                  <a href="#">Pen Drive</a>
                </div>
              </div>
            </aside>
          </div>
         
        </div>
      </div>
    </section>
    <!-- / product category -->
@endsection
