<?php 
include('includes/header.php');?>
<style>
[text-split] {opacity: 0;}
html.w-editor [text-split] {opacity: 1;}
.word {
	overflow: hidden;
  padding-bottom: 0.1em;
  margin-bottom: -0.1em;
  transform-origin: bottom;
}
.w-commerce-commercecartcontainerwrapper {
    z-index: 1001;
    background-color: rgba(0, 0, 0, .8);
    position: fixed;
    height: 1000px;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.flex {
    justify-content: space-between;
    display: flex;
    align-items: center;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 0px; 
}}
.menu{
  color:black;
}
.dropdown-nav-title {
    color: black;

}
@media screen and (max-width: 991px){
.menu{
  color:white;
}
}
.cart_wrapper_2 {
  display:none;
}
@media screen and (max-width: 991px){
  .cart_wrapper_2 {
      flex-direction: row;
      display: flex;
      font-size: 1.25em;
      line-height: 48px;
      padding-top: 1em;
  }
}
.link-5 {
    color: black;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}
.link-5 {
    color: white;
}
}
.dropdown-nav-title {
    color: black;

}
@media screen and (max-width: 991px){
.dropdown-nav-title{
  color:white;
}}
@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}}


.faq-drawer {
  margin-bottom: 0px;
}

.faq-drawer__content-wrapper {
  font-family: Montserrat, sans-serif;
    font-size: 16px;
    font-weight: 400;
  line-height: 1.4em;
  max-height: 0px;
  overflow: hidden;
  transition: 0.50s ease-in-out;
}

.faq-drawer__title {
    border-top: #000 1px solid;
    cursor: pointer;
    display: block;
    font-size: 1em;
    font-weight: 700;
    padding: 20px;
    position: relative;
    margin-bottom: 0;
    transition: all 0.25s ease-out;
}

.faq-drawer__title::after {
  border-style: solid;
  border-width: 1px 1px 0 0;
  content: " ";
  display: inline-block;
  float: right;
  height: 10px;
  left: 2px;
  position: relative;
  right: 20px;
  top: 2px;
  transform: rotate(135deg);
  transition: 0.35s ease-in-out;
  vertical-align: top;
  width: 10px;
}

/* OPTIONAL HOVER STATE */
.faq-drawer__title:hover { 
  color: #4E4B52  ;
}

.faq-drawer__trigger:checked
  + .faq-drawer__title
  + .faq-drawer__content-wrapper {
  max-height: 350px;
}

.faq-drawer__trigger:checked + .faq-drawer__title::after {
  transform: rotate(-45deg);
  transition: 0.25s ease-in-out;
}

input[type="checkbox"] {
  display: none;
}

@media only screen and (max-width: 600px) {
  .container {
    padding: 80px;
  }
}


</style>
</head>
<body class="body">
<?php include('includes/navbar2.php'); ?>
  <div class="section">
    <div class="faq">

   

      <div class="faq-headline">
        <h1 letters-slide-up="" text-split="" class="heading-jumbo-small">Shipping &amp; Returns</h1>
        <p class="paragraph-light">Explore our FAQ, where you might find the answers to all your questions. If you don&#x27;t, please reach out to us at <a href="mailto:Femblack001@femblack.org" class="link-3"><strong class="bold-text">Femblack001@femblack.org</strong></a><br></p>
      </div>
      <div class="shipping-header">
        <h2 class="shipping-h2">Shipping</h2>
      </div>
      
      
      <div class="faq-drawer">
        <input class="faq-drawer__trigger" id="faq-drawer" type="checkbox" />
          <label class="faq-drawer__title" for="faq-drawer">What are your shipping rates for shipping in South Africa?</label>
            <div class="faq-drawer__content-wrapper">
              <div class="faq-drawer__content">
                <p>
                We offer free shipping on orders over $45 with code FREESHIP. A flat rate of $5 shipping fee will be applied for all other orders.
                </p>
              </div>
            </div>
      </div>

     

      <div class="faq-drawer">
      <input class="faq-drawer__trigger" id="faq-drawer-2" type="checkbox" />
      <label class="faq-drawer__title" for="faq-drawer-2">How long does shipping take within the South africa?</label>
      <div class="faq-drawer__content-wrapper">
        <div class="faq-drawer__content">
          <p>
          All orders are shipped via [Courier name] first class ground shipping and will be received within 3-5 business days. You will receive a shipping notification email that will notify you of the tracking numbers.
          </p>
        </div>
      </div>
    </div>

    <div class="faq-drawer">
      <input class="faq-drawer__trigger" id="faq-drawer-3" type="checkbox" />
      <label class="faq-drawer__title" for="faq-drawer-3">Do you ship internationally?</label>
      <div class="faq-drawer__content-wrapper">
        <div class="faq-drawer__content">
          <p>
          At this time, our merchandise are only available in the South africa and we are unable  to ship outside of South Africa.         
          </p>
        </div>
      </div>
    </div>

    <div class="faq-drawer">
      <input class="faq-drawer__trigger" id="faq-drawer-4" type="checkbox" />
      <label class="faq-drawer__title" for="faq-drawer-4">What is your shipping policy?</label>
      <div class="faq-drawer__content-wrapper">
        <div class="faq-drawer__content">
          <p>
          Once a package has been shipped, it is beyond our control. If a package is returned to us because the wrong address is entered you will be responsible for the cost of reshipping the order.         
          </p>
        </div>
      </div>
    </div>

    <div class="faq-drawer">
      <input class="faq-drawer__trigger" id="faq-drawer-5" type="checkbox" />
      <label class="faq-drawer__title" for="faq-drawer-5">What if my product is damaged during shipping?</label>
      <div class="faq-drawer__content-wrapper">
        <div class="faq-drawer__content">
          <p>
          Should your order arrive damaged, please send us a photo and your order number to <a href="mailto:info@shoplucapets.com" class="faq-email">info@shoplucapets.com</a> within 48 hours. These are handled on a case-by-case basis but we will do our best to resolve them. Since we rely on shipping companies to ship our products, we do not have control over minor damage.         
          </p>
        </div>
      </div>
    </div>
<!-- Add more similar accordion items if needed -->

      <div class="shipping-header">
        <h2 class="shipping-h2">Returns</h2>
      </div>
      
      <div class="faq-drawer">
      <input class="faq-drawer__trigger" id="faq-drawer-6" type="checkbox" />
      <label class="faq-drawer__title" for="faq-drawer-6">What is your return policy?</label>
      <div class="faq-drawer__content-wrapper">
        <div class="faq-drawer__content">
          <p>
          We do not accept returns or exchanges on our products. All sales are final. If there is an issue with your order, please contact us within 48 hours of receiving your package. Contact us at <a href="mailto:Femblack001@femblack.org" class="faq-email">Femblack001@femblack.org</a> with information and your order number.         
          </p>
        </div>
      </div>
    </div>

    
    </div>
  </div>
  <?php include('includes/subscribe.php'); ?>
  <?php include('includes/footer.php'); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6444e1de321aed947531f251" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>

  <script src="js/scriptu.js" type="text/javascript"></script>
  <?php include('includes/updateCart.php'); ?>
  <!--  Dynamic Copyright Year  -->
  <script>
 function copyrightYear() {
   const yearElem = document.getElementById("year")
   yearElem.innerText = new Date().getFullYear()
 }
copyrightYear()
</script>
  <script src="https://unpkg.com/split-type"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/ScrollTrigger.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Your custom JavaScript -->
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


//cart
document.addEventListener('DOMContentLoaded', function () {
      const cartWrapper = document.querySelector('.w-commerce-commercecartcontainerwrapper');
      const openCartButton = document.querySelector('.w-commerce-commercecartopenlink');
      const closeCartButton = document.querySelector('.w-commerce-commercecartcloselink');

      // Function to open the cart
      function openCart() {
          cartWrapper.style.display = 'grid';
      }

      // Function to close the cart
      function closeCart() {
          cartWrapper.style.display = 'none';
      }

      // Event listener for opening the cart
      openCartButton.addEventListener('click', openCart);

      // Event listener for closing the cart
      closeCartButton.addEventListener('click', closeCart);
  });

  // jQuery
$(document).ready(function() {
    $('.accordion-trigger').click(function() {
        $(this).next('.dropdown-list').toggleClass('w--open');
        $(this).find('.accordion-img_tap').toggleClass('rotate180'); // Optional: rotate the arrow
    });
});

</script>
</body>
</html>















