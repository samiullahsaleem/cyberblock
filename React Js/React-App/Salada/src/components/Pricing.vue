<template>
<div :style="{'background-image':'url(assets/Pricing.png)'}" class="price_style">
<div class="container">
    <div class="row">
        <div class="pricing_style">
        <h1> Choose <span class="txt_style"> Pricing Plans </span> which <br> Suits you Needs </h1>
    </div>
    </div>

   <div class="card_style">
   <div class="row">

   <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
       <div class="card style">
         <div class="p-5 enroll2">
         <div class="row text-center">
            <div class="col-lg-12 ">
            <div class="icon_box">
                    <img src="assets/Salad6.png">
            </div>
            </div>
        
            </div>
                <div class="row text-center">
                <div class="col-lg-12">
                    <h1> $ 12.57  </h1>
                    <h5> Lorem Ipsum Lorem </h5>
                    <p>
                        Description is like something we need for.
                    </p>
                     <div class="pricing-unit">
                        <p>  10 ML  <i class="fa fa-check i_style" aria-hidden="true"> </i> </p> 
                        <p>  5 KG <i class="fa fa-check i_style" aria-hidden="true"> </i> </p> 
                        <p>  5 Gram <i class="fa fa-check i_style" aria-hidden="true"> </i></p>     
                        <button type="submit" class="btn_style mt-4" aria-label="Submit Button">  Choose a Plan <span class="icon_style"> <i class="fa fa-angle-right"></i> </span></button>    
                      </div>
                </div>
                </div>
         </div>
       </div>  
   </div>
                   
   <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
       <div class="card style">
         <div class="p-5 enroll2">
         <div class="row text-center">
            <div class="col-lg-12 ">
                  <div class="icon_box">
            <div>
                     <img src="assets/Salad5.png">
            </div>
            </div>
            </div>
        
            </div>
                <div class="row text-center">
                <div class="col-lg-12">
                    <h1> $ 12.95  </h1>
                    <h5> Lorem Ipsum Lorem </h5>
                    <p>
                        Description is like something we need for.
                    </p>
                               <div class="pricing-unit">
                        <p>  10 ML  <i class="fa fa-check i_style" aria-hidden="true"> </i> </p> 
                        <p>  5 KG <i class="fa fa-check i_style" aria-hidden="true"> </i> </p> 
                        <p>  5 Gram <i class="fa fa-check i_style" aria-hidden="true"> </i></p>     
                        <button type="submit" class="btn_style mt-4" aria-label="Submit Button">  Choose a Plan <span class="icon_style"> <i class="fa fa-angle-right"></i> </span></button>    
                      </div>
                </div>
                </div>
         </div>
       </div>  
   </div>

   <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-12 col-sm-12">
       <div class="card style">
         <div class="p-5 enroll2">
         <div class="row text-center">
            <div class="col-lg-12 ">
                <div class="icon_box">
            <div>
              
                    <img src="assets/Salad6.png">
            </div>
            </div>
            </div>
        
            </div>
                <div class="row text-center">
                <div class="col-lg-12">
                    <h1> $ 12.95  </h1>
                    <h5> Lorem Ipsum Lorem </h5>
                    <p>
                        Description is like something we need for.
                    </p>
                    <div class="pricing-unit">
                        <p>  10 ML  <i class="fa fa-check i_style" aria-hidden="true"> </i> </p> 
                        <p>  5 KG <i class="fa fa-check i_style" aria-hidden="true"> </i> </p> 
                        <p>  5 Gram <i class="fa fa-check i_style" aria-hidden="true"> </i></p>     
                        <button type="submit" class="btn_style mt-4" aria-label="Submit Button">  Choose a Plan <span class="icon_style"> <i class="fa fa-angle-right"></i> </span></button>    
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
</template>
<script>
export default 
{
    name: 'Pricing',
};
</script>



<style scoped>




img, svg {
    vertical-align: middle;
    max-width: 100%;
}





.pricing_style
{
margin-top: 100px;
}

.price_style
{


}

.txt_style
{

  font-weight: bolder;

}

.icon
{

text-align: right;

}

.i_style
{
    color: red;
    text-align: right;
}
.btn_style
  {
    background-color: white;
    border-radius: 5px;
    padding: 5px;
    display: inline-block;
    padding-left: 20px;
    color: black;
  }

  .icon_style
{
   padding-left: 15px;
}

button:hover
{
  background-color: #1F4F46;
  box-shadow: 4px 2px 3px rgb(161, 161, 161);
  color: white;
}

.card_style
{
    padding: 100px;
}

.pricing-unit p {
    text-align: left;
}
.pricing-unit p i {
    float: right;
}
.card:hover
{
box-shadow: 0px 4px 15px -1px rgb(182, 182, 182);
border: 0;    
}
.card{
    border:0;
    box-shadow: 0px 0px 15px -8px rgb(182 182 182);
}



@media (min-width:1200px) and (max-width: 2000px) 
{


}

@media (min-width:992px) and (max-width: 1199px) 
{

.btn_style
{
    white-space: nowrap;
    margin-left: -50px;
    /* display: inline-flex; */
}

}

@media (min-width:768px) and (max-width: 991px) 
{



}


@media (min-width:576px) and (max-width: 767px) 
{

}


@media (min-width:320px) and (max-width: 575px) 
{



  
}

</style>