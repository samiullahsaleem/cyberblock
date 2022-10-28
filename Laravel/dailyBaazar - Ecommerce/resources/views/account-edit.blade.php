@extends('layouts.app')
@section('title', 'Update Account')
@section('content')
      <!-- catg header banner section -->
      <section id="aa-catg-head-banner">
        <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
        <div class="aa-catg-head-banner-area">
         <div class="container">
          <div class="aa-catg-head-banner-content">
            <h2>Update Account</h2>
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
                    <div class="aa-myaccount-register">
                    @if (Session::has('success'))
                      <div class="alert alert-dismissable alert-success">    
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                          </button>
                              {{ Session::get('success') }}
                      </div>
                    @endif
                    
                     <h4>Update Account</h4>
                     <form action="/account-info/updated" method="POST" class="aa-login-form">
                      @method('PUT')
                         @csrf
                         <label for="">Name<span>*</span></label><br>
                         <input type="text" value="{{Auth::user()->name}}" name="name" required>
    @error('name')
				<div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	  @enderror                         
                        <label for="">New Password<span>*</span></label>
                        &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
                        &emsp;&emsp;&emsp;
                        <label for="">Confirm Password<span>*</span></label>
                        <br>
    <input type="password" name="password" placeholder="Password" required style="width:48%">                        
    <input type="password"name="password_confirmation" placeholder="Confirm password" required style="width:48%;float:right">
    @error('password')
				<div class="error f-16 d-block f-bold text-danger">{{ $message }}</div>
	  @enderror
      @if (Session::has('new-old'))
        <div class="error f-16 d-block f-bold text-danger">{{ Session::get('new-old') }}</div>
      @endif        
  <label for="">Old Password<span>*</span></label><br>
  <input type="password" name="opassword" placeholder="Old Password" required>
      @if (Session::has('fail'))
        <div class="error f-16 d-block f-bold text-danger">{{ Session::get('fail') }}</div>
      @endif
                        <button type="submit" class="aa-browse-btn">Update</button>                    
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