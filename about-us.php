<?php include('includes/header.php');?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">
<style>

[text-split] {opacity: 0;}
html.w-editor [text-split] {opacity: 1;}
.word {
	overflow: hidden;
  padding-bottom: 0.1em;
  margin-bottom: -0.1em;
  transform-origin: bottom;
}
</style>
</head>
<body class="body">
  <div class="page-wrapper">
   
    <div class="global-styles w-embed">
      <style>
/* Make text look crisper and more legible in all browsers */
body {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}
/* Focus state style for keyboard navigation for the focusable elements */
*[tabindex]:focus-visible,
  input[type="file"]:focus-visible {
   outline: 0.125rem solid #4d65ff;
   outline-offset: 0.125rem;
}
/* Get rid of top margin on first element in any rich text element */
.w-richtext > :not(div):first-child, .w-richtext > div:first-child > :first-child {
  margin-top: 0 !important;
}
/* Get rid of bottom margin on last element in any rich text element */
.w-richtext>:last-child, .w-richtext ol li:last-child, .w-richtext ul li:last-child {
	margin-bottom: 0 !important;
}
/* Prevent all click and hover interaction with an element */
.pointer-events-off {
	pointer-events: none;
}
/* Enables all click and hover interaction with an element */
.pointer-events-on {
  pointer-events: auto;
}
/* Create a class of .div-square which maintains a 1:1 dimension of a div */
.div-square::after {
	content: "";
	display: block;
	padding-bottom: 100%;
}
/* Make sure containers never lose their center alignment */
.container-medium,.container-small, .container-large {
	margin-right: auto !important;
  margin-left: auto !important;
}
/* 
Make the following elements inherit typography styles from the parent and not have hardcoded values. 
Important: You will not be able to style for example "All Links" in Designer with this CSS applied.
Uncomment this CSS to use it in the project. Leave this message for future hand-off.
*/
/*
a,
.w-input,
.w-select,
.w-tab-link,
.w-nav-link,
.w-dropdown-btn,
.w-dropdown-toggle,
.w-dropdown-link {
  color: inherit;
  text-decoration: inherit;
  font-size: inherit;
}
*/
/* Apply "..." after 3 lines of text */
.text-style-3lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 3;
	-webkit-box-orient: vertical;
}
/* Apply "..." after 2 lines of text */
.text-style-2lines {
	display: -webkit-box;
	overflow: hidden;
	-webkit-line-clamp: 2;
	-webkit-box-orient: vertical;
}
/* Adds inline flex display */
.display-inlineflex {
  display: inline-flex;
}
/* These classes are never overwritten */
.hide {
  display: none !important;
}
@media screen and (max-width: 991px) {
  .hide,
  .hide-tablet {
    display: none !important;
  }
}

@media screen and (max-width: 767px) {
  .hide,
  .hide-tablet {
    display: none !important;
  }
}

@media screen and (max-width: 479px) {
  .hide,
  .hide-tablet {
    display: none !important;
  }
}


@media screen and (max-width: 767px) {
  .hide-mobile-landscape {
    display: none !important;
  }
}

@media screen and (max-width: 479px) {
  .hide-mobile {
    display: none !important;
  }
}

.margin-0 {
  margin: 0rem !important;
}
.padding-0 {
  padding: 0rem !important;
}
.spacing-clean {
padding: 0rem !important;
margin: 0rem !important;
}
.margin-top {
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-top {
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-right {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
  margin-left: 0rem !important;
}
.padding-right {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
  padding-left: 0rem !important;
}
.margin-bottom {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-bottom {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.margin-left {
  margin-top: 0rem !important;
  margin-right: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-left {
  padding-top: 0rem !important;
  padding-right: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-horizontal {
  margin-top: 0rem !important;
  margin-bottom: 0rem !important;
}
.padding-horizontal {
  padding-top: 0rem !important;
  padding-bottom: 0rem !important;
}
.margin-vertical {
  margin-right: 0rem !important;
  margin-left: 0rem !important;
}
.padding-vertical {
  padding-right: 0rem !important;
  padding-left: 0rem !important;
}
.cart_wrapper_2 {
  display:none;
}
.heading-jumbo{
  font-size: 50px;
}
@media screen and (max-width: 991px){
.cart_wrapper_2 {
    flex-direction: row;
    display: flex;
    font-size: 1.25em;
    line-height: 48px;
    padding-top: 1em;
}
.heading-jumbo{
  font-size: 30px;
}
.hero2 {
    background-position: 50% 0;
}
}
.flex {
    justify-content: space-between;
    display: flex;
    align-items: center;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}}

.card_content {
    padding-top: 2em;
    text-decoration: none;
}





</style>
    </div>
    <main class="main-wrapper">
     
      <div class="section">
        <header id="hero2" class="hero2 wf-section">

          <!-- Video element 
          <video src=".\images\black_woman.mp4" muted loop autoplay></video>-->
      
        <div class="hero_background">
          
          <div class="hero_header">
            <h1 letters-slide-up="" text-split="" class="heading-jumbo" >About the Femblack organization.</h1>
            <p  class=""style="color:white;">We believe in the power of collective action to transform lives and create lasting change. 
              With a deep-rooted passion for philanthropy, we strive to address pressing social issues and uplift communities in need. 
            </p>
          </div>
        </div>
       
      </header>
      <?php include('includes/navbar1.php'); ?>
      </div>
      <!--<div>
        <div class="section loop wf-section">
          <div data-w-id="5d74c17c-c3a4-336a-fac1-d415868773a8" class="quote-loop-container">
            <div style="-webkit-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0px, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="loop-wrapper">
              <div class="content-holder">
                <div class="subheading">Giving women the power to take a stand</div>
                <div class="subheading">•</div>
                <div class="subheading">Giving women the power to take a stand</div>
                <div class="subheading">•</div>
                <div class="subheading">Giving women the power to take a stand</div>
                <div class="subheading">•</div>
                <div class="subheading">Giving women the power to take a stand</div>
                <div class="subheading">•</div>
              </div>
              <div class="content-holder">
                <div class="subheading">Giving women the power to take a stand</div>
                <div class="subheading">•</div>
                <div class="subheading">Healthy</div>
                <div class="subheading">•</div>
                <div class="subheading">Sustainable</div>
                <div class="subheading">•</div>
                <div class="subheading">Ethical</div>
                <div class="subheading">•</div>
              </div>
              <div class="content-holder">
                <div class="subheading">Premium-quality</div>
                <div class="subheading">•</div>
                <div class="subheading">Healthy</div>
                <div class="subheading">•</div>
                <div class="subheading">Sustainable</div>
                <div class="subheading">•</div>
                <div class="subheading">Ethical</div>
                <div class="subheading">•</div>
              </div>
              <div class="content-holder">
                <div class="subheading">Premium-quality</div>
                <div class="subheading">•</div>
                <div class="subheading">Healthy</div>
                <div class="subheading">•</div>
                <div class="subheading">Sustainable</div>
                <div class="subheading">•</div>
                <div class="subheading">Ethical</div>
                <div class="subheading">•</div>
              </div>
            </div>
          </div>
        </div>
      </div>-->
      <div class="section sust-details">
        <div class="container hero-heading-wrap sustainability">
          <div class="sust_info-cont">
            <div class="sust_icon">
              <img src="images/icons8-flowers-64 (1).png" loading="lazy" alt="">
            </div>
            <div class="sus_info-wrapper">
              <h2 letters-slide-up="" text-split="" class="heading-jumbo-small sus">What is Eshop</h2>
              <p class="sus_p margin-top-m">Fem Black is a movement, a motion that aims to create a platform for people to talk about what they are going through. For far too long NPO’s only seem to help when there is someone watching. ‘ like you need credit for helping’. Here at Eshop is saying spread your truth regardless of what people think or if there is anyone watching.</p>
            </div>
          </div>
          <div class="divider sust"></div>
          <div class="sust_info-cont reverse">
            <div class="sust_icon">
              <img src="images/icons8-hummingbird-80.png" loading="lazy" alt="">
            </div>
            
            <div class="sus_info-wrapper">
              <div class="text-block-4">What we have done:</div>
              <h2 letters-slide-up="" text-split="" class="heading-jumbo-small sus">CHOC- Childhood Cancer Foundation:</h2>
              <p class="sus_p margin-top-m">Since then, we’ve had joint events with CHOC- Childhood Cancer Foundation South Africa which provides comprehensive support to families of children with cancer and life-threatening blood disorders. We have raised awareness of cancer and different treatments for kids, whilst raising money and donations.</p>
            </div>
          </div>
          <div class="divider sust"></div>
          <div class="sust_info-cont">
            <div class="sust_icon">
              <img src="images/icons8-trust-100.png" loading="lazy" alt="">
            </div>
            <div class="sus_info-wrapper">
              <div class="text-block-3">What we have done:</div>
              <h2 letters-slide-up="" text-split="" class="heading-jumbo-small sus">DYDT and Frida Hartley Shelter for women and children:</h2>
              <p class="sus_p margin-top-m">Sourcing local allows us to minimize our carbon footprint and support local communities. We only work with vendors that share our core values, never cutting corners and always looking for ways to improve.</p>
            </div>
          </div>
          <div class="divider sust"></div>
          <div class="sust_info-cont reverse">
            <div class="sust_icon left-margin">
              <img src="images/icons8-handshake-heart-100.png" loading="lazy" alt="">
            </div>
            <div class="sus_info-wrapper">
              <h2 letters-slide-up="" text-split="" class="heading-jumbo-small sus">Our Goals</h2>
              <p class="sus_p margin-top-m">Our organization&#x27;s aims is to make those in need and relief them from pain. Things like preventing or relieving poverty, or advancing the arts, culture, heritage, etc.</p>
            </div>
          </div>
          <div>
            <div class="container-5 is-cards">
              <div class="grid">
                <a id="w-node-b8146710-2f51-82c8-c930-65c62b203455-9431f29d" href="#" class="card w-inline-block" style="background-color: #333; border: none;">
                  <img src="https://img.icons8.com/ios-filled/50/FFFFFF/volunteering.png" loading="lazy" alt="" class="image-12" style=" border: 1px solid #f5f5f7;">
                  <div class="card_content">
                    <div class="card_heading" style="color:white">Our Mission</div>
                    <div class="card_text">The organization aims to create safe, inclusive spaces for black women to have critical conversations and address their daily battles. They use various methods such as community events, research, and a database to show they care and let every woman know they are not alone. The organization aims to raise awareness of social injustices and be the voice of young black females across Africa.</div>
                  </div>
                </a>
                <a id="w-node-b8146710-2f51-82c8-c930-65c62b20345f-9431f29d" href="#" class="card is-purple w-inline-block"><img src="images/icons8-flower-crown-64.png" loading="lazy" alt="" class="image-12">
                  <div class="card_content">
                    <div class="card_heading">Our Vision</div>
                    <div class="card_text">The organization is committed to empowering women from diverse backgrounds and identities, including those with different educational, national, religious or non-religious affiliations. They aim to uplift, center and honor each other through a platform that offers a voice to black women. The organization recognizes that many women have been silenced and made to feel that no one cares, and they seek to change that by offering a space for their voices to be heard.</div>
                  </div>
                </a>
                <a id="w-node-b8146710-2f51-82c8-c930-65c62b203469-9431f29d" href="#" class="card is-pink w-inline-block"><img src="images/icons8-donate-80.png" loading="lazy" alt="" class="image-12">
                  <div class="card_content">
                    <div class="card_heading">Our objective</div>
                    <div class="card_text">The organization promotes charity drives and involves local communities to improve the standard of living. They educate and equip people through events and outreach programs, while promoting youth talent programs. The organization also collaborates with similar groups, organizes meetings, training courses and events, and takes lawful actions to achieve their objectives.</div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="loader"></div>


        <!--<div class="wf-section">
          <div class="container w-container">
            <div data-w-id="023e1f90-ab42-6fd5-de88-9b77cda9e252" style="opacity:0" class="ingredients-image-container"><img src="images/pexels-rodnae-productions-6647049.jpg" loading="lazy" width="485" sizes="(max-width: 479px) 100vw, (max-width: 767px) 90vw, (max-width: 991px) 63vw, 30vw" alt="Before and after freeze drying" srcset="images/pexels-rodnae-productions-6647049-p-500.jpg 500w, images/pexels-rodnae-productions-6647049-p-800.jpg 800w, images/pexels-rodnae-productions-6647049-p-1080.jpg 1080w, images/pexels-rodnae-productions-6647049-p-1600.jpg 1600w, images/pexels-rodnae-productions-6647049-p-2000.jpg 2000w, images/pexels-rodnae-productions-6647049-p-2600.jpg 2600w, images/pexels-rodnae-productions-6647049-p-3200.jpg 3200w, images/pexels-rodnae-productions-6647049.jpg 4479w" class="image"></div>
            <div class="w-layout-grid methods-icons-grid">
              <div class="method-icon-cont">
                <div data-w-id="023e1f90-ab42-6fd5-de88-9b77cda9e256" style="opacity:0" class="center-vertical">
                  <div class="method-icon"><img src="images/icons8-flowers-64.png" loading="lazy" alt=""></div>
                  <div data-w-id="023e1f90-ab42-6fd5-de88-9b77cda9e259" class="accordion-trigger home">
                    <div class="expand-accordion">
                      <div class="text-block-2">Break the silence</div>
                    </div>
                    <div class="expand_button"><img src="images/Caret-down.svg" loading="lazy" width="24" height="24" alt="" style="display:block" class="accordion-img_hover"><img src="images/Caret-up.svg" loading="lazy" width="22" height="22" alt="" style="display:none" class="accordion-img_tap home"></div>
                  </div>
                </div>
                <div class="accordion-content home">We aspire to get more people to join the conversation, and not only that, we are determined to get people to start talking about what they are going through. We strive to break the silence and to reduce the alarming rise in suicide from GBV &amp; depression.</div>
              </div>
              <div class="method-icon-cont">
                <div data-w-id="023e1f90-ab42-6fd5-de88-9b77cda9e263" style="opacity:0" class="center-vertical">
                  <div class="method-icon"><img src="images/icons8-spa-flower-80.png" loading="lazy" width="60" alt=""></div>
                  <div class="accordion-trigger home">
                    <div class="expand-accordion">
                      <div class="text-block-2">Our testimony’s are our biggest weapons</div>
                    </div>
                    <div class="expand_button"><img src="images/Caret-down.svg" loading="lazy" width="24" height="24" alt="" class="accordion-img_hover"><img src="images/Caret-up.svg" loading="lazy" width="22" height="22" alt="" class="accordion-img_tap home"></div>
                  </div>
                </div>
                <div class="accordion-content home">We have seen that through out history woman are always forced into silence even when in great pain. But enough is enough, That young girl from an impoverished village, her dreams should not be killed by the voices of a silent generation. Having someone who you can talk to openly reduces suicidal actions by 80%.</div>
              </div>
              <div>
                <div class="method-icon-cont">
                  <div data-w-id="023e1f90-ab42-6fd5-de88-9b77cda9e271" style="opacity:0" class="center-vertical">
                    <div class="method-icon"><img src="images/icons8-hummingbird-80.png" loading="lazy" alt=""></div>
                    <div data-w-id="023e1f90-ab42-6fd5-de88-9b77cda9e274" class="accordion-trigger home">
                      <div class="expand-accordion">
                        <div class="text-block-2">Empower young women</div>
                      </div>
                      <div class="expand_button"><img src="images/Caret-down.svg" loading="lazy" width="24" height="24" alt="" style="display:block" class="accordion-img_hover"><img src="images/Caret-up.svg" loading="lazy" width="22" height="22" alt="" style="display:none" class="accordion-img_tap home"></div>
                    </div>
                  </div>
                  <div class="accordion-content home">For so long, Black women’s political leadership and movement building has been overlooked in academia and society writ-large and we aim to bring change, in the words of Michelle Obama “help educate andempower young women, by sharing the stories and struggles of these young women with young people here at home to inspire them to commit to their own education and change.”</div>
                </div>
              </div>
            </div>
          </div>
        </div>-->
      </div>

<!-- partial:index.partial.html -->
<svg id="icons" xmlns="http://www.w3.org/2000/svg">  
<symbol id="icon-arrow" viewBox="0 0 476.213 476.213" >
<polygon fill="inherit" points="347.5,324.393 253.353,418.541 253.353,0 223.353,0 223.353,419.033 128.713,324.393 107.5,345.607 
	238.107,476.213 368.713,345.606 "/>
</symbol>
</svg>

<div class="slider-content2">
<div class="slider-content">
  

  
  <div class="number-wrapper">
    <div class="number-count">
      <div class="number">01</div>
    </div>
  </div>
  
  <div class="nav-wrapper">
    <div class="nav-arrows">
      <div class="nav-up">
           <svg id="arrow-up">
            <use xlink:href="#icon-arrow"></use>
          </svg>
       </div>
      <div class="nav-line"></div>
      <div class="nav-down">
         <svg id="arrow-down">
            <use xlink:href="#icon-arrow"></use>
          </svg>
      </div>
    </div>
  </div>
  
  <div class="slider-wrapper">
    <div class="slider-container">                       
      <div class="slide active" data-order="1">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              
              <h2>Break the silence</h2>
              
              <p class="excerpt">We aspire to get more people to join the conversation, and not only that, we are determined to get people to start talking about what they are going through. We strive to break the silence and to reduce the alarming rise in suicide from GBV &amp; depression.</p>
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://i.pinimg.com/564x/ae/99/d2/ae99d2112625c4f312b0528f1361750c.jpg" alt="" />
          </div>
        </div>  
      <div class="slide" data-order="2">
          <div class="slide-content txt">
            <div class="txt-wrapper">
            
              <h2>Our testimony’s are our biggest weapons</h2>
               <p class="excerpt">We have seen that through out history woman are always forced into silence even when in great pain. But enough is enough, That young girl from an impoverished village, her dreams should not be killed by the voices of a silent generation. Having someone who you can talk to openly reduces suicidal actions by 80%.</p>
              
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://i.pinimg.com/736x/25/2a/eb/252aeba4490601a83e1e504951fc33b3.jpg" alt="" />
          </div>
      </div>  
      <div class="slide" data-order="3">
          <div class="slide-content txt">
            <div class="txt-wrapper">
              
              <h2>Empower young women</h2>
              
              <p class="excerpt">For so long, Black women’s political leadership and movement building has been overlooked in academia and society writ-large and we aim to bring change, in the words of Michelle Obama “help educate andempower young women, by sharing the stories and struggles of these young women with young people here at home to inspire them to commit to their own education and change.”</p>
            </div>
          </div>
          <div class="slide-content img">
            <img src="https://i.pinimg.com/564x/22/60/94/226094dae215d4a9952b8ab09a60228c.jpg" alt="" />
          </div>
        </div>  
       
      
    </div>
  </div>

</div>
</div>
<!-- partial -->



<?php include('includes/subscribe.php'); ?>
    </main>
  </div>


  <?php include('includes/footer.php'); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6444e1de321aed947531f251" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <script src="js/scriptu.js" type="text/javascript"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js'></script>
<script  src="./script.js"></script>
  <?php include('includes/updateCart.php'); ?>
  <!--  Dynamic Copyright Year  -->
  <script>
    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 100) {
          $(".navigation").addClass('blur');
          $(".heading-5").addClass('text-nav');
          $(".dropdown-nav-title").addClass('text-nav');
          $(".link-5").addClass('text-nav');
          $(".bi-person-circle").addClass('svg-change');
          $(".cart-quantity").addClass('text-nav');
          $(".bi-bag").addClass('svg-change');
          $(".bi-list").addClass('svg-change');

          //
        }
    
        else{
          $(".navigation").removeClass('blur');
          $(".heading-5").removeClass('text-nav'); 
          $(".dropdown-nav-title").removeClass('text-nav');
          $(".link-5").removeClass('text-nav'); 
          $(".cart-quantity").removeClass('text-nav');
          $(".bi-person-circle").removeClass('svg-change');
          $(".bi-bag").removeClass('svg-change');	
          $(".bi-list").removeClass('svg-change');
        }
      })
    })
 function copyrightYear() {
   const yearElem = document.getElementById("year")
   yearElem.innerText = new Date().getFullYear()
 }
copyrightYear()
</script>
  <script src="https://unpkg.com/split-type"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <!-- CYCLE JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.cycle/3.0.3/jquery.cycle.all.min.js"></script>
  <script>
window.addEventListener("DOMContentLoaded", (event) => {
  // Split text into spans
  let typeSplit = new SplitType("[text-split]", {
    types: "words, chars",
    tagName: "span"
  });
  // Link timelines to scroll position
  function createScrollTrigger(triggerElement, timeline) {
    // Reset tl when scroll out of view past bottom of screen
    ScrollTrigger.create({
      trigger: triggerElement,
      start: "top bottom",
      onLeaveBack: () => {
        timeline.progress(0);
        timeline.pause();
      }
    });
    // Play tl when scrolled into view (80% from top of screen)
    ScrollTrigger.create({
      trigger: triggerElement,
      start: "top 80%",
      onEnter: () => timeline.play()
    });
  }
  $("[letters-slide-up]").each(function (index) {
    let tl = gsap.timeline({ paused: true });
    tl.from($(this).find(".char"), { yPercent: 100, duration: 0.2, ease: "power1.out", stagger: { amount: 0.6 } });
    createScrollTrigger($(this), tl);
  });
  // Avoid flash of unstyled content
  gsap.set("[text-split]", { opacity: 1 });
});

  // Function to retrieve the value of a cookie by name
  function getCookie(name) {
      const cookies = document.cookie.split('; ');
      for (let i = 0; i < cookies.length; i++) {
          const cookie = cookies[i].split('=');
          if (cookie[0] === name) {
              return cookie[1];
          }
      }
      return null;
  }


  
</script>

</body>
</html>


