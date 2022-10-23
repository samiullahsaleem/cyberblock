<template>
<div>

  <div class="container">
    <div class="row">
      <div class="col-auto">
         <div class="logo-m">
          <a href=""> <img class="logo_style" alt="Vue logo" src="/assets/Salada.png"></a>
         </div>
    </div>
      <div class="col">
        <nav class="navstyle navbar navbar-expand-lg navbar-light shift">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    
      <ul class="navbar-nav nav_styel mb-8 mb-lg-0">

        <li class="nav-item nav-l-s">   
          <a class="navbar-brand" href="#">
          </a>
        </li>
                   
        <li class="nav-item nav-l-s">                       
           <a class="nav-link " aria-current="page" href="#firstsection"> Home </a>
        </li>

        <li class="nav-item nav-l-s">                       
           <a class="nav-link" aria-current="page" href="#featuresection"> How it works</a>
        </li>

        <li class="nav-item nav-l-s">
        <a class="nav-link" aria-current="page"  href="#"> About Us </a>
        </li>

        <li class="nav-item nav-l-s">
        <a class="nav-link" aria-current="page" href="#"> Video </a>
        </li>
     
        <li class="nav-item nav-l-s">
        <a class="nav-link" aria-current="page" href="#"> Pricing  </a>
        </li>
      
        <li class="nav-item nav-l-s">
        <a class="nav-link" aria-current="page" href="#"> News  </a>
        </li>
         
    
        <li class="nav-item icon_style">
        <a href="#"><div class="login-btn btn"><i class="fa fa-user"></i> Login</div></a>
        </li>
      </ul>

    </div>
  </div>
</nav>
      </div>
    </div>
   

  </div>
</div>
</template>

<script>
export default {
 name: "Navbar",
};
</script>

<style scoped>
nav ul li.nav-l-s ,
nav ul li.nav-l-s:after,
nav ul li.nav-l-s:before {
  transition: all .5s;
}
.navstyle
{
    background-color: white;
}
.login-btn.btn {
    background-color: #a8e5dd;
    margin-top: 2px;
}
.login-btn.btn:hover {
    background-color: #1f4f46;
    margin-top: 2px;
    color: white;
}
.navsec_style
{
  padding-left: 480px;
}

.icon_style
{
  margin-top: 8px;
}

.txt_style
{
 text-shadow: black;
 box-shadow: black 3px solid; 
}

.logo_style
{ 
 max-height: 60px;
 max-width: 60px;

}


.nav_styel
{
margin-left: auto;
}
.shift ul li a {
    padding: 18px 26px 12px!important;
}
.shift ul li:last-child a {
    padding: 0 0 0 26px !important;
}
nav.navstyle {
    padding: 0;
}
.shift ul li.nav-l-s {
  position:relative;
  z-index: 1;
}
.shift ul li.nav-l-s a:hover {
  color: #1f4f46 !important;
  
}
.shift ul li.nav-l-s:after {
    content: '';
    height: 3px;
    width: 0;
    border-radius: 25px;
    display: block;
    position: relative;
    left: 0;
    bottom: -3px;
    transition: all .4s ease;
    background-color: #1f4f46;

}
.shift ul li.nav-l-s:hover:after {
    width: 100%;
}






</style>