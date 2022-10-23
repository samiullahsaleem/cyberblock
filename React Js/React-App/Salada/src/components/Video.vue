<template>
        <div :style="{'background-image':'url(assets/Background.png)'}" class="container-fluid image">
        <div class="row">
        <div class="video_style">
        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <h1>
        Check Our <span class="txt_style"> Videos </span> <br> Feature Below
        </h1>
        </div>

        <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12 col-sm-12">
        <div class="video_box">

        <div class="iframe_style">
        <iframe class="responsive-iframe" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>

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
   name: "Videos"
};

</script>


<style>

.video_style
{
  padding-top: 50px;
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
    height: 390px;
    /* width: 800px; */
    margin-left: 400px;
    margin-top: 100px;
    max-width: 100%;
}
.video_box[data-v-a19c0664] {
    border: 10px Solid #1F4F46;
    border-radius: 35px;
    height: 390px;
    width: 900px;
    margin-left: 400px;
    margin-top: 100px;
    max-width: 100%
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

.iframe_style[data-v-a19c0664] 
{
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


@media (min-width:1200px) and (max-width: 2000px) 
{


}

@media (min-width:992px) and (max-width: 1199px) 
{


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