<template>

<footer class="footer-section">
        <div class="container">

            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <a href="index.html"><img src="/assets/Salada.png" class="img-fluid" alt="logo"></a>
                            </div>
                            <!-- <div class="footer-text">
                                <p>Lorem ipsum dolor sit amet, consec tetur adipisicing elit, sed do eiusmod tempor incididuntut consec tetur adipisicing
                                elit,Lorem ipsum dolor sit amet.</p>
                            </div> -->
                            <div class="footer-social-icon">
                                <span>Follow us</span>
                                <a href="#"><i class="fa fa-facebook-f facebook-bg"></i></a>
                                <a href="#"><i class="fa fa-twitter twitter-bg"></i></a>
                                <a href="#"><i class="fa fa-google google-bg"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Useful Links</h3>
                            </div>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">services</a></li>
                                <li><a href="#">portfolio</a></li>
                                <li><a href="#">Contact</a></li>
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Our Services</a></li>
                                <li><a href="#">Expert Team</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Latest News</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                        <div class="footer-widget">
                           <div class="footer-widget-heading">
                                <h3>Contact Us</h3>
                            </div>
                           <div class="single-cta">
                              <i class="fa fa-map-marker"></i>
                              <div class="cta-text">
                                  <span>1010 Avenue, sw 54321, Pakistan </span>
                              </div>
                           </div>
                            <div class="single-cta">
                            <i class="fa fa-phone"></i>
                            <div class="cta-text">
                                <span>9876543210 </span>
                                </div>
                            </div>
                             <div class="single-cta">
                            <i class="fa fa-envelope-open"></i>
                            <div class="cta-text">
                                <span>mail@salada.com</span>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p class="text-white">Copyright &copy; 2018, All Right Reserved <a href="https://codepen.io/anupkumar92/"> Salada </a></p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#" class="text-white">Home</a></li>
                                <li><a href="#" class="text-white" >Terms</a></li>
                                <li><a href="#" class="text-white" >Privacy</a></li>
                                <li><a href="#" class="text-white" >Policy</a></li>
                                <li><a href="#" class="text-white">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</footer>

</template>

<script>
export default {
    
}
</script>

<style scoped>

.single-cta {
    float: left;
    width: 100%;
    text-align: left;
    line-height: 45px;
}
ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: white;
  position: relative;
      border-top: 1px solid #efefef;
      margin-top: 20px;
}
.footer-cta {
  border-bottom: 1px solid #378475;
}
.single-cta i {
  color: #378475;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #378475;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
.footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
}
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.google-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #378475;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
  text-align: left;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #378475;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
  text-align: left;
}
.footer-widget ul li a:hover{
  color: #378475;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
  text-align: left;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #378475;
    padding: 14px 20px;
    border: 1px solid #378475;
    top: 0;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #1F4F46;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #378475;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: #378475;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}


.foot_txt
{

color: ;
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

