@extends('layouts.app')
@section('title', 'Home')
@section('content')
      <!-- Start slider -->
  <section id="aa-slider">
    <div class="aa-slider-area">
      <div id="sequence" class="seq">
        <div class="seq-screen">
          <ul class="seq-canvas">
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/slider/men.jpg')}}" alt="Men slide img" />
              </div>
              <div class="seq-title">
               <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Men Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/slider/watch.jpg')}}" alt="Wristwatch slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 40% Off</span>                
                <h2 data-seq>Wristwatch Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/slider/jean.jpg')}}" alt="Women Jeans slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Jeans Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->           
            <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/slider/shoes.jpg')}}" alt="Shoes slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 75% Off</span>                
                <h2 data-seq>Exclusive Shoes</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>
            <!-- single slide item -->  
             <li>
              <div class="seq-model">
                <img data-seq src="{{asset('img/slider/collection.png')}}" alt="Male Female slide img" />
              </div>
              <div class="seq-title">
                <span data-seq>Save Up to 50% Off</span>                
                <h2 data-seq>Best Collection</h2>                
                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
              </div>
            </li>                   
          </ul>
        </div>
        <!-- slider navigation btn -->
        <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
          <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
          <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
        </fieldset>
      </div>
    </div>
  </section>
  <!-- / slider -->
  <!-- Start Promo section -->
  <section id="aa-promo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-promo-area">
            <div class="row">
              <!-- promo left -->
              <div class="col-md-5 no-padding">                
                <div class="aa-promo-left">
                  <div class="aa-promo-banner">                    
                    <img src="{{asset('img/men.jpg')}}" alt="img">                    
                    <div class="aa-prom-content">
                      <span>75% Off</span>
                      <h4><a href="/category/men">For Men</a></h4>                      
                    </div>
                  </div>
                </div>
              </div>
              <!-- promo right -->
              <div class="col-md-7 no-padding">
                <div class="aa-promo-right">
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/women.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Exclusive Item</span>
                        <h4><a href="/category/women">For Women</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/shoes.png')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>Sale Off</span>
                        <h4><a href="/category/shoes">On Shoes</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/kids.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>New Arrivals</span>
                        <h4><a href="/category/kids">For Kids</a></h4>                        
                      </div>
                    </div>
                  </div>
                  <div class="aa-single-promo-right">
                    <div class="aa-promo-banner">                      
                      <img src="{{asset('img/bags.jpg')}}" alt="img">                      
                      <div class="aa-prom-content">
                        <span>25% Off</span>
                        <h4><a href="/category/bags">For Bags</a></h4>                        
                      </div>
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
  <!-- / Promo section -->
  <!-- Products section -->
  <section id="aa-product">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-product-area">
              <div class="aa-product-inner">
                <!-- start prduct navigation -->
                 <ul class="nav nav-tabs aa-products-tab">
                    <li class="active"><a href="#men" data-toggle="tab">Men</a></li>
                    <li><a href="#women" data-toggle="tab">Women</a></li>
                    <li><a href="#sports" data-toggle="tab">Sports</a></li>
                    <li><a href="#electronics" data-toggle="tab">Digital</a></li>
                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content">

                    <!-- Start men product category -->
                    <div class="tab-pane fade in active" id="men">
                      <ul class="aa-product-catg">
                        @foreach ($mens as $men)
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
                      <a class="aa-browse-btn" href="/category/men">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / men product category -->

                    <!-- start women product category -->
                    <div class="tab-pane fade" id="women">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach ($womens as $women)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="/product/{{$women->id}}"><img src="{{asset('img/product-img/main/'.$women->photo.'')}}" width="250" height="300" alt="{{$women->name}} image"></a>
                  <a class="aa-add-card-btn" href="/add-to-cart/{{$women->id}}"><span class="fa fa-shopping-cart add-to-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{ $women->name }}</a></h4>
                              <span class="aa-product-price">${{ $women->price }}</span>@if ($women->in_sale == 'Yes')<span class="aa-product-price"><del>${{$women->discounted_price}}</del></span>@endif
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="/add-to-wishlist/{{$women->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                            
                          </div>
                          <!-- product badge -->
            @if ($women->stock > 0)    
                @if ($women->in_sale == 'Yes')
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
                      <a class="aa-browse-btn" href="/category/women">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / women product category -->

                    <!-- start sports product category -->
                    <div class="tab-pane fade" id="sports">
                      <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach ($sports as $sport)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="/product/{{$sport->id}}"><img src="{{asset('img/product-img/main/'.$sport->photo.'')}}" width="250" height="300" alt="{{$sport->name}} image"></a>
                  <a class="aa-add-card-btn" href="/add-to-cart/{{$sport->id}}"><span class="fa fa-shopping-cart add-to-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{ $sport->name }}</a></h4>
                              <span class="aa-product-price">${{ $sport->price }}</span>@if ($sport->in_sale == 'Yes')<span class="aa-product-price"><del>${{$sport->discounted_price}}</del></span>@endif
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="/add-to-wishlist/{{$sport->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                            
                          </div>
                          <!-- product badge -->
            @if ($sport->stock > 0)    
                @if ($sport->in_sale == 'Yes')
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
              <center><a class="aa-browse-btn" href="/category/sports">Browse all Product <span class="fa fa-long-arrow-right"></span></a></center>
                    </div>
                    <!-- / sports product category -->
                    
                    <!-- start electronic product category -->
                    <div class="tab-pane fade" id="electronics">
                       <ul class="aa-product-catg">
                        <!-- start single product item -->
                        @foreach ($digitals as $digital)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="/product/{{$digital->id}}"><img src="{{asset('img/product-img/main/'.$digital->photo.'')}}" width="250" height="300" alt="{{$digital->name}} image"></a>
                  <a class="aa-add-card-btn" href="/add-to-cart/{{$digital->id}}"><span class="fa fa-shopping-cart add-to-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{ $digital->name }}</a></h4>
                              <span class="aa-product-price">${{ $digital->price }}</span>@if ($digital->in_sale == 'Yes')<span class="aa-product-price"><del>${{$digital->discounted_price}}</del></span>@endif
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="/add-to-wishlist/{{$digital->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                            
                          </div>
                          <!-- product badge -->
            @if ($digital->stock > 0)    
                @if ($digital->in_sale == 'Yes')
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
                      <a class="aa-browse-btn" href="/category/digital">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                    </div>
                    <!-- / electronic product category -->
                  </div>          
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Products section -->
  <!-- banner section -->
  <section id="aa-banner">
    <div class="container">
      <div class="row">
        <div class="col-md-12">        
          <div class="row">
            <div class="aa-banner-area">
            <a href="#"><img src="img/fashion-banner.jpg" alt="fashion banner img"></a>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- popular section -->
  <section id="aa-popular-category">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="aa-popular-category-area">
              <!-- start prduct navigation -->
             <ul class="nav nav-tabs aa-products-tab">
                <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                <li><a href="#featured" data-toggle="tab">Featured</a></li>
                <li><a href="#latest" data-toggle="tab">Latest</a></li>                    
              </ul>
              <!-- Tab panes -->
              <div class="tab-content">
                <!-- Start men popular category -->
                <div class="tab-pane fade in active" id="popular">
                  <ul class="aa-product-catg aa-popular-slider">
                    
                    @foreach ($populars as $digital)
                        <li>
                          <figure>
                            <a class="aa-product-img" href="/product/{{$digital->id}}"><img src="{{asset('img/product-img/main/'.$digital->photo.'')}}" width="250" height="300" alt="{{$digital->name}} image"></a>
                  <a class="aa-add-card-btn" href="/add-to-cart/{{$digital->id}}"><span class="fa fa-shopping-cart add-to-cart"></span>Add To Cart</a>
                            <figcaption>
                              <h4 class="aa-product-title"><a href="#">{{ $digital->name }}</a></h4>
                              <span class="aa-product-price">${{ $digital->price }}</span>@if ($digital->in_sale == 'Yes')<span class="aa-product-price"><del>${{$digital->discounted_price}}</del></span>@endif
                            </figcaption>
                          </figure>                         
                          <div class="aa-product-hvr-content">
                            <a href="/add-to-wishlist/{{$digital->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                            
                          </div>
                          <!-- product badge -->
            @if ($digital->stock > 0)    
                @if ($digital->in_sale == 'Yes')
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
                  <a class="aa-browse-btn" href="/browse-products/popular">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / popular product category -->
                
                <!-- start featured product category -->
                <div class="tab-pane fade" id="featured">
                 <ul class="aa-product-catg aa-featured-slider">
                  @foreach ($featureds as $digital)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="/product/{{$digital->id}}"><img src="{{asset('img/product-img/main/'.$digital->photo.'')}}" width="250" height="300" alt="{{$digital->name}} image"></a>
            <a class="aa-add-card-btn" href="/add-to-cart/{{$digital->id}}"><span class="fa fa-shopping-cart add-to-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">{{ $digital->name }}</a></h4>
                        <span class="aa-product-price">${{ $digital->price }}</span>@if ($digital->in_sale == 'Yes')<span class="aa-product-price"><del>${{$digital->discounted_price}}</del></span>@endif
                      </figcaption>
                    </figure>                         
                    <div class="aa-product-hvr-content">
                      <a href="/add-to-wishlist/{{$digital->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                            
                    </div>
                    <!-- product badge -->
      @if ($digital->stock > 0)    
          @if ($digital->in_sale == 'Yes')
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
                  <a class="aa-browse-btn" href="/browse-products/featured">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / featured product category -->

                <!-- start latest product category -->
                <div class="tab-pane fade" id="latest">
                  <ul class="aa-product-catg aa-latest-slider">
                    <!-- start single product item -->
                    @foreach ($latests as $digital)
                  <li>
                    <figure>
                      <a class="aa-product-img" href="/product/{{$digital->id}}"><img src="{{asset('img/product-img/main/'.$digital->photo.'')}}" width="250" height="300" alt="{{$digital->name}} image"></a>
            <a class="aa-add-card-btn" href="/add-to-cart/{{$digital->id}}"><span class="fa fa-shopping-cart add-to-cart"></span>Add To Cart</a>
                      <figcaption>
                        <h4 class="aa-product-title"><a href="#">{{ $digital->name }}</a></h4>
                        <span class="aa-product-price">${{ $digital->price }}</span>@if ($digital->in_sale == 'Yes')<span class="aa-product-price"><del>${{$digital->discounted_price}}</del></span>@endif
                      </figcaption>
                    </figure>                         
                    <div class="aa-product-hvr-content">
                      <a href="/add-to-wishlist/{{$digital->id}}" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>                            
                    </div>
                    <!-- product badge -->
      @if ($digital->stock > 0)    
          @if ($digital->in_sale == 'Yes')
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
                   <a class="aa-browse-btn" href="/browse-products/latest">Browse all Product <span class="fa fa-long-arrow-right"></span></a>
                </div>
                <!-- / latest product category -->              
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </section>
  <!-- / popular section -->
  <!-- Support section -->
  <section id="aa-support">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-support-area">
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-truck"></span>
                <h4>FREE SHIPPING</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-clock-o"></span>
                <h4>30 DAYS MONEY BACK</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
            <!-- single support -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="aa-support-single">
                <span class="fa fa-phone"></span>
                <h4>SUPPORT 24/7</h4>
                <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam, nobis.</P>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Support section -->
  <!-- Testimonial -->
  <section id="aa-testimonial">  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-testimonial-area">
            <ul class="aa-testimonial-slider">
              <!-- single slide -->
              <li>
                <div class="aa-testimonial-single">
                <img class="aa-testimonial-img" src="img/ceo.jpg" alt="testimonial img">
                  <span class="fa fa-quote-left aa-testimonial-quote"></span>
                  <p>Life's too short to wear boring clothes.</p>
                  <div class="aa-testimonial-info">
                    <p>Abdul Hadi Butt</p>
                    <span>Founder</span>
                    {{-- <a href="#">Alphabet</a> --}}
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Testimonial -->
@endsection