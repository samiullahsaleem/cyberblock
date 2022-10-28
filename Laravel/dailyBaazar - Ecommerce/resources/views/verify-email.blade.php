@extends('layouts.app')
@section('title', 'Verify Email')
@section('content')

<style>
    .b{
        border: 1px solid #ccc;
    display: inline-block;
    font-size: 16px;
    font-weight: bold;
    letter-spacing: 0.5px;
    margin-top: 30px;
    padding: 10px 15px;
    text-transform: uppercase;
    background-color: transparent;
    }
</style>
<!-- 404 error section -->
<div id="aa-error">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-error-area">
            <h2>Verify!</h2>
            <span>A verification link has been sent to your email please click on it to proceed!</span>
        <form action="/email/verification-notification" method="post">
                @csrf
                <button class="b" type="submit">Re-Send Link</button>
        </form>
        <br>
@if (session('status') == 'verification-link-sent')
    <div class="mb-4 font-medium text-sm text-success">
        <strong>A new email verification link has been emailed to you!</strong>
    </div>
@endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / 404 error section -->
@endsection