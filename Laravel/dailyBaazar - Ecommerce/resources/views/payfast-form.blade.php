<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Redirecting</title>
</head>
<body>
<center><h3>Redirecting..</h3></center>
    <script>
            window.onload = function(){
    document.forms['payfast_payment_form'].submit();
    }
    </script>
    
    <form id='payfast_payment_form' name='payfast-payment-form' method='post' action="https://ipguat.apps.net.pk/Ecommerce/api/Transaction/PostTransaction">

     
      <input type="hidden" name="CURRENCY_CODE" value="PKR" /><br/>

      <input type="hidden" name="MERCHANT_ID" value="{{$merchant_id}}" /><br/>
    
      <input type="hidden" name="MERCHANT_NAME" value="UAT Demo Merchant" /><br/>
    
     <input type="hidden" name="TOKEN" value="{{$token}}" /><br/>

      <input type="hidden" name="SUCCESS_URL" value="http://127.0.0.1:8000/success" /><br/>
    
      <input type="hidden" name="FAILURE_URL" value="http://127.0.0.1:8000/payfast-response" /><br/>
    
      <input type="hidden" name="CHECKOUT_URL" value="http://127.0.0.1:8000/" /><br/>
    
      <input type="hidden" name="CUSTOMER_EMAIL_ADDRESS" value="{{$email}}" /><br />
    
      <input type="hidden" name="CUSTOMER_MOBILE_NO" value="{{$phone}}" /><br />
    
      <input type="hidden" name="TXNAMT" value="{{$PKR}}" /><br />
    
      <input type="hidden" name="BASKET_ID" value="ITEM-001" /><br />
    
     <input type="hidden" name="ORDER_DATE" value="<?php echo date('Y-m-d H:i:s', time()); ?>" /><br />

     <input type="hidden" name="SIGNATURE" value="SOMERANDOM-STRING" /><br />

     <input type="hidden" name="VERSION" value="MERCHANT-CART-0.1" /><br />
    
     <input type="hidden" name="TXNDESC"  value="Items Purchased from Cart" /><br />

     <input type="hidden" name="PROCCODE" value="00" /><br />

     <input type="hidden" name="TRAN_TYPE" value='ECOMM_PURCHASE' /><br />
    
    {{-- <input type="SUBMIT" value=""> --}}
</form>

</body>
</html>