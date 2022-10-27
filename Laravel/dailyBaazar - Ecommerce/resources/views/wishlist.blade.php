@extends('layouts.app')
@section('title', 'Wishlist')
@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/account.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Wishlist</h2>
         <ol class="breadcrumb">
           <li><a href="/">Home</a></li>                   
           <li class="active">Wishlist</li>
         </ol>
       </div>
      </div>
    </div>
   </section>
   <!-- / catg header banner section -->
 
  <!-- Cart view section -->
  <section id="cart-view">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            @if ($count > 0)
          <div class="cart-view-area">
            <div class="cart-view-table aa-wishlist-table">
              <form>
@if (Session::has('danger'))
                <div class="alert alert-dismissable alert-danger">    
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                      {{ Session::get('danger') }}
              </div>
@endif

@if (Session::has('success'))
                <div class="alert alert-dismissable alert-success">    
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                      {{ Session::get('success') }}
              </div>
@endif
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th></th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Stock Status</th>
                         <th></th>
                       </tr>
                     </thead>
                     <tbody>
                @foreach ($wishlist as $wproduct)
                       <tr>
                         <td><a class="remove" href="/remove-from-wishlist/{{$wproduct->id}}"><fa class="fa fa-close"></fa></a></td>
                         <td><a href="/product/{{$wproduct->p_id}}"><img src="{{asset('img/product-img/main/'.$wproduct->photo.'')}}" alt="img"></a></td>
                         <td><a class="aa-cart-title" href="/product/{{$wproduct->p_id}}">{{$wproduct->name}}</a></td>
                         <td>${{$wproduct->price}}</td>
                         <td>{{$wproduct->status}}</td>
                         <td><a href="/add-to-cart/{{$wproduct->p_id}}" class="aa-add-to-cart-btn">Add To Cart</a></td>
                       </tr>
                @endforeach
                                           
                       </tbody>
                   </table>
                 </div>
              </form>             
            </div>
          </div>
          @else

            <div class="cart-view-area">
                @if (Session::has('danger'))
                              <div class="alert alert-dismissable alert-danger">    
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                    {{ Session::get('danger') }}
                            </div>
              @endif
                <div class="cart-view-table">
                    <div class="table-responsive">
                      <h3 style="text-align: center;"><a href="#">Your Wishlist is Empty!</a></h3>
                      <br>
                       <center><img width="400" height="400" src="/img/emptycart.png" alt="" srcset=""></center>
                     </div>
                </div>
              </div>
              @endif
        </div>
      </div>
    </div>
  </section>
  <!-- / Cart view section -->
@endsection