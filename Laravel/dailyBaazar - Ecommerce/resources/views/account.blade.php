@extends('layouts.app')
@section('title', 'Account')
@section('content')
      <!-- catg header banner section -->
      <section id="aa-catg-head-banner">
        <img src="{{asset('img/fashion/account.jpg')}}" alt="fashion img">
        <div class="aa-catg-head-banner-area">
         <div class="container">
          <div class="aa-catg-head-banner-content">
            <h2>Account</h2>
            <ol class="breadcrumb">
              <li><a href="/">Home</a></li>                   
              <li class="active">Account</li>
            </ol>
          </div>
         </div>
       </div>
      </section>
      <!-- / catg header banner section -->
    
     <!-- Cart view section -->
     <section id="aa-myaccount">
       <div class="container">
         <div class="row">
           <div class="col-md-12">
            <div class="aa-myaccount-area">         
                <div class="row">
                  <div class="col-md-6">
                    <div class="aa-myaccount-login">
@if (session('status'))
<div class="alert alert-dismissable alert-success">    
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
  </button>
      {{ session('status') }}
</div>
@endif
                      
                      @if (Session::has('danger'))
                      <div class="alert alert-dismissable alert-danger">    
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                              {{ Session::get('danger') }}
                      </div>
                    @endif
                    <h4>Login</h4>
                     <form action="/login" method="POST" class="aa-login-form">
                        @csrf
                        <label for="">Email address<span>*</span></label>
                        <input type="text" name="email" required placeholder="Email address">
    @error('email')
                <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	@enderror
                       <label for="">Password<span>*</span></label>
                       <input type="password" name="password" placeholder="Password" required>
                        <button type="submit" class="aa-browse-btn">Login</button>
                        <label class="rememberme" for="rememberme"><input name="remember" type="checkbox" id="rememberme"> Remember me </label>
                        <p class="aa-lost-password"><a href="/forgot-password">Lost your password?</a></p>
                      </form>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="aa-myaccount-register">                 
                     <h4>Register</h4>
                     <form action="/register" method="POST" class="aa-login-form">
                         @csrf
                        <label for="">Name<span>*</span></label>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;
                        <label for="">Email Address<span>*</span></label>
                        <br>
    <input type="text" name="name" placeholder="Name" required style="width:48%">
    @error('name')
				<div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	@enderror                        
    <input type="text" name="email" placeholder="Email address" required style="width:48%;float:right">
    @error('email')
                <div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	@enderror                    
                        <label for="">Password<span>*</span></label>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        &emsp;&emsp;&emsp;&emsp;&emsp;
                        <label for="">Confirm Password<span>*</span></label>
                        <br>
    <input type="password" name="password" placeholder="Password" required style="width:48%">                        
    <input type="password"name="password_confirmation" placeholder="Confirm password" required style="width:48%;float:right">
    @error('password')
				<div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	@enderror                    
                        <button type="submit" class="aa-browse-btn">Register</button>                    
                      </form>
                    </div>
                  </div>
                </div>          
             </div>
           </div>
         </div>
       </div>
     </section>
     <!-- / Cart view section -->

@endsection