<template>
  <Navbar />
   <Firstsection />
  <!-- <img class="img_style" alt="First Background" src="./assets/Banner.jpg"> -->
  <Feature />
  <Video />
  <Tools />
  <Customer />
  <Support />
  <Pricing />
  <Testimonials />
  <Article />
  <Newsletter />
  <Footer />
  <!-- <img class="img2_style" alt="Tools Background" src="./assets/42.png"> -->
  <!-- <img alt="Vue logo" src="./assets/Salada.png">  -->
  <!-- <Home data="Salada First Component and we deal with all things together for all things we need for all things together we are able to "/> -->

</template>

<script>
import Firstsection from './components/Firstsection.vue';
import Navbar from './components/Navbar';
import Feature from './components/Feature';
import Video from './components/Video';
import Tools from './components/Tools';
import Customer from './components/Customer';
import Support from './components/Support';
import Pricing from './components/Pricing';
import Testimonials from './components/Testimonials';
import Article from './components/Article';
import Newsletter from './components/Newsletter';
import Footer from './components/Footer';
export default {
  name: 'App',
  components: {
    Navbar,
    Firstsection,
    Feature,
    Video,
    Tools,
    Customer,
    Support,
    Pricing,
    Testimonials,
    Article,
    Newsletter,
    Footer,
  }
}
</script>

<style>
#app 
{
   font-family: 'Poppins', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
   text-align: center;
   color: #1F4F46;
   margin-top: 0px;
}

.img_style
{
max-width: 100%;
max-height: 100%;
}

.img2_style
{
max-width: 100%;
max-height: 100%;
}
/* vid  */
.video_style
{
  margin-top: 70px;
}

/* Then style the iframe to fit in the container div with full height and width */
.responsive-iframe {
    position: absolute;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    width: 100%;
    /* height: 100%; */
    border-radius: 25px;
    height: 400px;
}

.video_box {
    border: 10px Solid #1F4F46;
    border-radius: 35px;
    height: 420px;
    width: 1000px;
    margin: 100px auto;
}

.image
{
height: 100vh;
background-repeat: no-repeat;
background-position: center;
background-size: cover; 
}

.iframe_style {
    position: relative;
    overflow: hidden;
    width: 100.2%;
    padding-top: 56.25%;
    margin-left: -1px;
}

.txt_style
{

font-weight: bolder;

}

.video_box:hover
{
 box-shadow: 10px 2px 50px #E6FFFC;
}

.tool_image {
    height: 100vh;
    width: 100%;
    object-position: left;
    object-fit: cover;
}
  .btn_style
  {
    border-radius: 5px!important;
    padding: 5px!important;
    border: 0!important;
    display: inline-block!important;
    padding: 10px 15px!important;
    box-shadow: 1px 1px 6px -2px rgb(161 161 161)!important;
    background-color: #efefef!important;
  }
 .btn_style:focus
  {
    border: 0 !important;
    outline: none;
  }
  button:hover
{
  background-color: #1F4F46!important;
  box-shadow: 4px 2px 3px rgb(161, 161, 161)!important;
  color: white!important;
}
@media (min-width:1200px) and (max-width: 2000px) 
{
.style 
{
    padding: 0px !important;
}
.tool_image 
{
    height: 100vh;
    width: 100%;
    object-position: left;
    object-fit: cover;
}
.div_style
{

    margin-top: 120px !important;
}
}

@media (min-width:992px) and (max-width: 1199px) 
{
  .feature_style
{
  margin-top: 80px;
  padding-bottom: 80px;
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
