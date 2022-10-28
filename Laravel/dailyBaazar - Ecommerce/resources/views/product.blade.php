@extends('layouts.app')
@section('title', 'Product')
@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="{{asset('img/fashion/account.jpg')}}" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>{{$product->name}}</h2>
         <ol class="breadcrumb">
           <li><a href="index.html">Home</a></li>         
           <li><a href="#">Product</a></li>
           <li class="active">{{$product->name}}</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
   <!-- product category -->
   <section id="aa-product-details">
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <div class="aa-product-details-area">
             <div class="aa-product-details-content">
               <div class="row">
                 <!-- Modal view slider -->
                 <div class="col-md-5 col-sm-5 col-xs-12">                              
                   <div class="aa-product-view-slider">                                
                     <div id="demo-1" class="simpleLens-gallery-container">
                       <div class="simpleLens-container">
                         <div class="simpleLens-big-image-container"><a data-lens-image="{{asset('img/product-img/main/'.$product->photo.'')}}" class="simpleLens-lens-image"><img src="{{asset('img/product-img/main/'.$product->photo.'')}}" class="simpleLens-big-image"></a></div>
                       </div>
                       <div class="simpleLens-thumbnails-container">
                           <a data-big-image="{{asset('img/product-img/image1/'.$productImages->image_1.'')}}" data-lens-image="{{asset('img/product-img/image1/'.$productImages->image_1.'')}}" class="simpleLens-thumbnail-wrapper" href="#">
                             <img width="44px" height="55px" src="{{asset('img/product-img/image1/'.$productImages->image_1.'')}}">
                           </a>                                    
                           <a data-big-image="{{asset('img/product-img/image2/'.$productImages->image_2.'')}}" data-lens-image="{{asset('img/product-img/image2/'.$productImages->image_2.'')}}" class="simpleLens-thumbnail-wrapper" href="#">
                             <img width="44px" height="55px" src="{{asset('img/product-img/image2/'.$productImages->image_2.'')}}">
                           </a>
                           <a data-big-image="{{asset('img/product-img/image3/'.$productImages->image_3.'')}}" data-lens-image="{{asset('img/product-img/image3/'.$productImages->image_3.'')}}" class="simpleLens-thumbnail-wrapper" href="#">
                             <img width="44px" height="55px" src="{{asset('img/product-img/image3/'.$productImages->image_3.'')}}">
                           </a>
                       </div>
                     </div>
                   </div>
                 </div>
                 <!-- Modal view content -->
                <form action="/add-to-cart/{{$product->id}}" method="get">
                    @csrf 
                 <div class="col-md-7 col-sm-7 col-xs-12">
                   <div class="aa-product-view-content">
                     <h3>{{$product->name}}</h3>
                     <div class="aa-price-block">
                       <span class="aa-product-view-price">${{$product->price}}</span>
                       <p class="aa-product-avilability">Avilability: @if ($product->stock > 0 )
                        <span>In stock</span>
                       @else
                        <span>Out of stock</span></p>
                       @endif
                     </div>
                     <p>{!!$product->description!!}</p>
    @if ($product_category->name == 'Men' || $product_category->name == 'Kids' || $product_category->name == 'Women')
                     <h4>Size</h4>
                     <div >
                         <select required="" name="size" id="">
                             <option>None</option>
                             <option value="Small">S</option>
                             <option value="Medium">M</option>
                             <option value="Large">L</option>
                             <option value="Extra Large">XL</option>
                         </select>
                     </div>
                     <h4>Color</h4>
                     <div>
                        <select required="" name="color" id="">
                            <option>None</option>
                            <option value="Green">Green</option>
                            <option value="Yellow">Yellow</option>
                            <option value="Pink">Pink</option>
                            <option value="White">White</option>
                        </select>                      
                     </div>
    @endif
                     <div class="aa-prod-quantity">
                         <select required="" id="" name="quantity">
                           <option value="1">1</option>
                           <option value="2">2</option>
                           <option value="3">3</option>
                           <option value="4">4</option>
                           <option value="5">5</option>
                         </select>
                       <p class="aa-prod-category">
                         Category: <a href="/category/{{$product_category->slug}}">{{$product_category->name}}</a>
                       </p>
                     </div>
                <div class="aa-prod-view-bottom">
        <button style="background-color:white;" class="aa-add-to-cart-btn" type="submit">Add To Cart</button>
                       {{-- <a  href="#">Add To Cart</a> --}}
                    </form>
                       <a class="aa-add-to-cart-btn" href="/add-to-wishlist/{{$product->id}}">Wishlist</a>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
             <div class="aa-product-details-bottom">
               <ul class="nav nav-tabs" id="myTab2">
                 <li><a href="#description" data-toggle="tab">Description</a></li>
                 <li><a href="#review" data-toggle="tab">Reviews</a></li>                
               </ul>
 
               <!-- Tab panes -->
               <div class="tab-content">
                 <div class="tab-pane fade in active" id="description">
                   <p>{!!$product->description!!}</p>
                 </div>
                 <div class="tab-pane fade " id="review">
                  <div class="aa-product-review-area">
                    <h4>2 Reviews for T-Shirt</h4> 
                    <ul class="aa-review-nav">
                      <li>
                         <div class="media">
                           <div class="media-left">
                             <a href="#">
                               <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                             </a>
                           </div>
                           <div class="media-body">
                             <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                             <div class="aa-product-rating">
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star-o"></span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                           </div>
                         </div>
                       </li>
                       <li>
                         <div class="media">
                           <div class="media-left">
                             <a href="#">
                               <img class="media-object" src="img/testimonial-img-3.jpg" alt="girl image">
                             </a>
                           </div>
                           <div class="media-body">
                             <h4 class="media-heading"><strong>Marla Jobs</strong> - <span>March 26, 2016</span></h4>
                             <div class="aa-product-rating">
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star"></span>
                               <span class="fa fa-star-o"></span>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                           </div>
                         </div>
                       </li>
                    </ul>
                    <h4>Add a review</h4>
                    <div class="aa-your-rating">
                      <p>Your Rating</p>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                      <a href="#"><span class="fa fa-star-o"></span></a>
                    </div>
                    <!-- review form -->
                    <form action="" class="aa-review-form">
                       <div class="form-group">
                         <label for="message">Your Review</label>
                         <textarea class="form-control" rows="3" id="message"></textarea>
                       </div>
                       <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" placeholder="Name">
                       </div>  
                       <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" placeholder="example@gmail.com">
                       </div>
 
                       <button type="submit" class="btn btn-default aa-review-submit">Submit</button>
                    </form>
                  </div>
                 </div>            
               </div>
             </div>
             @if ($count > 0)
             <!-- Related product -->
             <div class="aa-product-related-item">
               <h3>Related Products</h3>
               <ul class="aa-product-catg aa-related-item-slider">
                 <!-- start single product item -->
                 @foreach ($relatedproducts as $rproduct)
                 <li>
                   <figure>
                     <a class="aa-product-img" href="/product/{{$rproduct->id}}"><img src="{{asset('img/product-img/main/'.$rproduct->photo.'')}}" width="250" height="300" alt="{{$rproduct->name}}"></a>
                     <a class="aa-add-card-btn" href="/add-to-cart/{{$rproduct->id}}"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                      <figcaption>
                       <h4 class="aa-product-title"><a href="#">{{$rproduct->name}}</a></h4>
                       <span class="aa-product-price">${{$rproduct->price}}</span><span class="aa-product-price"><del>${{$rproduct->discounted_price}}</del></span>
                     </figcaption>
                   </figure>                     
                   <div class="aa-product-hvr-content">
                     <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                   </div>
                   <!-- product badge -->
              @if ($rproduct->stock > 0)    
                   @if ($rproduct->in_sale == 'Yes')
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
          @endif  
           </div>
         </div>
       </div>
     </div>
   </section>
   <!-- / product category -->
@endsection