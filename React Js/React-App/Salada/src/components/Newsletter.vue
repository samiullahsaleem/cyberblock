<template>
<div class="news_bg">
<div class="container">
	<div class="newsletter js-rollover" data-radius="50">
      <svg viewBox="0 0 694 549" width="694" height="549">
        <path d="M74.7,439.6c58.9,76.3,152.2,113.1,224.6,109C585.8,532.3,734.2,295,684.7,94.2C658.7-11.3,508.1-8.6,433.6,9.8C384.1,22,329.1,47.8,277.8,60.4c-42.5,10.5-90,7.2-130.4,17.1C60.4,99-21.1,201.9,4.9,307.6C16.7,355.3,45.2,401.4,74.7,439.6z"></path>
      </svg>

      <h1 class="newsletter-title">Get the latest<br> info about Salada App </h1>
      <p class="newsletter-text">Register to our newsletter and don’t miss anything anymore. We promise we will not spam you!</p>

      <form method="GET" action="https://kikk.us6.list-manage.com/subscribe" class="newsletter-form" target="_blank">
        <input type="hidden" name="u" value="d08fe605a9149dc54a3c13f44">
        <input type="hidden" name="id" value="96f67efdeb">
        <input type="email" name="EMAIL" id="email" placeholder="Enter your email">
        <button type="submit" class="button">Subscribe</button>
      </form>
    </div>
</div>
</div>

   
</template>

<script>
export default {
    name: 'Newsletter',
};
</script>


<style scoped>

.newsletter {
    position: relative;
    padding-top: 30px;
    padding-bottom: 180px;
    padding-left: 220px;
    flex-grow: 1;
    
}

.news_bg
{
background-color: white;
}

.newsletter svg {
    position: absolute;
    z-index: 0;
    /* top: -90px; */
    left: 200px;
    fill: #E6FFFC;
}

.newsletter .newsletter-title {
    margin-bottom: 40px;
    margin-top: 55px;
    /* font-family: IMFell DW,Times,Georgia,serif; */
    font-weight: 500;
    /* font-style: italic; */
    color:#1F4F46;
    /* font-size: 4.0625rem; */
    letter-spacing: -.02em;
    line-height: .9230769231;
    position: relative;
    padding-right: 240px;
    z-index: 999;
}

.newsletter .newsletter-text {
    color: #1F4F46(17,7,255,.8);
    padding-left: 180px;
    position: relative;
    margin-top: 70px;
    z-index: 999;
    max-width: 650px;
}

.newsletter .newsletter-form {
    position: relative;
    max-width: 390px;
    margin-top: 70px;
    margin-left: 220px;
    z-index: 999;
}

.newsletter .newsletter-form input {
    height: 55px;
    width: 100%;
    padding: 18px 135px 17px 30px;
    font-family: IM Fell English,Times,Georgia,serif;
    font-weight: 400;
    font-style: italic;
    border: 0 none;
    border-radius: 20px;
    outline: none;
    background-color: #fff;
    color: #378475;
    font-size: 1.125rem;
    line-height: 1;
}

.newsletter .newsletter-form button {
    /* font-family: Sofia Pro,Helvetica,Arial,sans-serif; */
    font-weight: 700;
    font-style: normal;
    width: 116px;
    height: 36px;
    transition: background-color .3s cubic-bezier(.165,.84,.44,1);
    border-radius: 15px;
    background-color: #378475;
    color: #fff;
    font-size: .875rem;
    line-height: 1;
    position: absolute;
    right: 9px;
    bottom: 9px;
    display: inline-block;
    margin: 0;
    padding: 0;
    border: 0px;
    outline: none;
    text-decoration: none;
    cursor: pointer;
}

@media (min-width: 320px) and (max-width: 575px) 
{


}

@media (min-width:576px) and (max-width: 767px) 
{

.newsletter[data-v-c4cfcb2e] 
{
    position: relative;
    padding-top: 30px;
    padding-bottom: 180px;
    padding-left: 0px;
    flex-grow: 1;
}


}


@media (min-width:768px) and (max-width: 991px) 
{



}

@media (min-width:992px) and (max-width: 1199px) 
{


}

@media (min-width:1200px) and (max-width: 2000px) 
{


}


@media screen and (min-width: 576px) and (max-width: 768px)
{


}

</style>