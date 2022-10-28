@extends('layouts.app')
@section('title', 'Checkout')
@section('content')

    <!-- catg header banner section -->
  <section id="aa-catg-head-banner">
    <img src="img/fashion/account.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
     <div class="container">
      <div class="aa-catg-head-banner-content">
        <h2>Checkout</h2>
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>                   
          <li class="active">Checkout</li>
        </ol>
      </div>
     </div>
   </div>
  </section>
  <!-- / catg header banner section -->

 <!-- Cart view section -->
 <section id="checkout">
   <div class="container">
     <div class="row">
       <div class="col-md-12">
        <div class="checkout-area">
          <form action="/checkout/success" method="POST">
              @csrf
            <div class="row">
              <div class="col-md-8">
                <div class="checkout-left">
                  <div class="panel-group" id="accordion">
                    
                    <!-- Shipping Address -->
                    <div class="panel panel-default aa-checkout-billaddress">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
                            Shippping Address
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse in">
                        <div class="panel-body">
                         <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input name="name" @if ($check == 1) value="{{$address->name}}" @endif required="" type="text" placeholder="Full Name*">
                    @error('name')
                    <span class="text-danger">
                        {{ $message }}
                    </span>	
                    @enderror
                              </div>                             
                            </div>
                          </div> 
                            
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="email" @if ($check == 1) value="{{$address->email}}" @endif required="" type="email" placeholder="Email Address*">
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                            <input @if ($check == 1) value="{{$address->phone}}" @endif name="phone" required="" type="tel" placeholder="Phone*">
                            @error('phone')
                            <span class="text-danger">
                                {{ $message }}
                            </span>	
                            @enderror
                              </div>
                            </div>
                          </div> 
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="address" required="" cols="8" rows="3">@if ($check == 1) {{$address->address}} @else Address* @endif</textarea>
                    @error('address')
                    <span class="text-danger">
                        {{ $message }}
                    </span>	
                    @enderror
                              </div>                             
                            </div>                            
                          </div>   
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <select name="country" required="">
                                  <option @if ($check == 1) value="{{$address->country}}" @endif>@if ($check == 1) {{$address->country}} @else Select Your Country @endif</option>
                                  <option value="1">Australia</option>
                                  <option value="2">Afganistan</option>
                                  <option value="3">Bangladesh</option>
                                  <option value="4">Belgium</option>
                                  <option value="5">Brazil</option>
                                  <option value="6">Canada</option>
                                  <option value="7">China</option>
                                  <option value="8">Denmark</option>
                                  <option value="9">Egypt</option>
                                  <option value="10">India</option>
                                  <option value="11">Iran</option>
                                  <option value="12">Israel</option>
                                  <option value="13">Mexico</option>
                                  <option value="14">UAE</option>
                                  <option value="15">UK</option>
                                  <option value="16">USA</option>
                                  <option value="Pakistan">Pakistan</option>
                                </select>
                              </div>                             
                            </div>                            
                          </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <input @if ($check == 1) value="{{$address->city}}" @endif name="city" required="" type="text" placeholder="City / Town*">
                                @error('city')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>	
                                @enderror
                              </div>
                            </div>
                          </div>   
                          <div class="row">
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="district" @if ($check == 1) value="{{$address->district}}" @endif required="" type="text" placeholder="District*">
                    @error('district')
                    <span class="text-danger">
                        {{ $message }}
                    </span>	
                    @enderror
                              </div>                             
                            </div>
                            <div class="col-md-6">
                              <div class="aa-checkout-single-bill">
                                <input name="zip" @if ($check == 1) value="{{$address->zip}}" @endif required="" type="text" placeholder="Postcode / ZIP*">
                                @error('zip')
                                <span class="text-danger">
                                    {{ $message }}
                                </span>	
                                @enderror
                              </div>
                            </div>
                          </div> 
                           <div class="row">
                            <div class="col-md-12">
                              <div class="aa-checkout-single-bill">
                                <textarea name="notes" cols="8" rows="3">Special Notes</textarea>
                              </div>                             
                            </div>                            
                          </div>              
                        </div>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="checkout-right">
                  <h4>Order Summary</h4>
                  <div class="aa-order-summary-area">
                    <table class="table table-responsive">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $total = 0 ?>
                @foreach(session('cart') as $id => $details)
                            <?php $total += $details['price'] * $details['quantity'] ?>
                        <tr>
                          <td>{{ $details['name'] }} <strong> x  {{ $details['quantity'] }}</strong></td>
                          <td>${{ $details['price'] * $details['quantity'] }}</td>
                        </tr>
                @endforeach
                <?php $tax = $total/10; ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>Subtotal</th>
                          <td>${{$total}}</td>
                        </tr>
                         <tr>
                          <th>Tax</th>
                          <td>${{$tax}}</td>
                        </tr>
                         <tr>
                          <th>Total</th>
                          <td>${{$total + $tax}}</td>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <h4>Payment Method</h4>
                  <div class="aa-payment-method">                    
                    <label for="cashdelivery"><input type="radio" value="COD" name="paymethod" required="" id="cod"> Cash on Delivery </label>
                    <label for="paypal"><input type="radio" value="Paypal" id="paypal" name="paymethod" required=""> Via PayFast </label>
                    <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg" border="0" alt="PayPal Acceptance Mark">    
                    <input type="submit" value="Place Order" class="aa-browse-btn">                
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">                
                  </div>
                </div>
              </div>
            </div>
          </form>
         </div>
       </div>
     </div>
   </div>
 </section>
 <!-- / Cart view section -->

@endsection