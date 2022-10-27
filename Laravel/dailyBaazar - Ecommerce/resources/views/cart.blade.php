@extends('layouts.app')
@section('title', 'Cart')
@section('content')

<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/account.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
      <div class="container">
       <div class="aa-catg-head-banner-content">
         <h2>Cart</h2>
         <ol class="breadcrumb">
           <li><a href="/">Home</a></li>                   
           <li class="active">Cart</li>
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
          @if(session('cart'))
          <?php $count = count(Session::get('cart')); ?>
          <div class="cart-view-area">
            <div class="cart-view-table">
              <form action="/update-cart" method="POST">
@if (Session::has('success'))
                <div class="alert alert-dismissable alert-success">    
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                      {{ Session::get('success') }}
              </div>
@endif
                @method('PATCH')
                @csrf
                <div class="table-responsive">
                   <table class="table">
                     <thead>
                       <tr>
                         <th></th>
                         <th></th>
                         <th>Product</th>
                         <th>Price</th>
                         <th>Quantity</th>
                         <th>Total</th>
                       </tr>
                     </thead>
                     <tbody>
                        <?php $total = 0 ?>
        
                @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                       <tr>
                    <td><a class="remove" href="/remove-from-cart/{{ $id }}"><fa class="fa fa-close"></fa></a></td>
                    <td><a href="#"><img src="{{asset('img/product-img/main/'.$details['photo'].'')}}" width="100" height="100" alt="img"></a></td>
                         <td><a class="aa-cart-title" href="#">{{ $details['name'] }}</a></td>
                         <td>{{ $details['price'] }}</td>
                         <td><input class="aa-cart-quantity" name="quantity" type="number" value="{{ $details['quantity'] }}"></td>
                         <td>${{ $details['price'] * $details['quantity'] }}</td>
                       </tr>
                       <input type="hidden" name="id" value="{{$id}}">
                @endforeach
          
                       <tr>
                         <td colspan="6" class="aa-cart-view-bottom">
                           {{-- <div class="aa-cart-coupon">
                             <input class="aa-coupon-code" type="text" placeholder="Coupon">
                             <input class="aa-cart-view-btn" type="submit" value="Apply Coupon">
                           </div> --}}
                           
                           <input class="aa-cart-view-btn" type="submit" value="Update Cart">
                         </td>
                       </tr>
                       </tbody>
                   </table>
                 </div>
              </form>
              <!-- Cart Total view -->
              <div class="cart-view-total">
                <h4>Cart Totals</h4>
                <table class="aa-totals-table">
                  <tbody>
                    <tr>
                      <th>Subtotal</th>
                      <td>${{$total}}</td>
                    </tr>
                    <tr>
                      <th>Total</th>
                      <td>${{$total}}</td>
                    </tr>
                  </tbody>
                </table>
                <a href="/checkout" class="aa-cart-view-btn">Proced to Checkout</a>
              </div>
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
@if (Session::has('success'))
                <div class="alert alert-dismissable alert-success">    
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                      {{ Session::get('success') }}
              </div>
@endif
  <div class="cart-view-table">
      <div class="table-responsive">
        <h3 style="text-align: center;"><a href="#">Your Cart is Empty!</a></h3>
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