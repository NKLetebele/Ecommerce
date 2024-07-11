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
.dropdown-nav-title {
    color: black;

}
@media screen and (max-width: 991px){
.dropdown-nav-title{
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
.flex {
    justify-content: space-between;
    display: flex;
    align-items: center;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}
.link-5 {
    color: white;
}
}

</style>
</head>
<body class="body">

<?php include('includes/navbar2.php'); ?>

  <div class="section _9em-margin-top">
    <div class="container hero-heading-wrap">
      <h1 letters-slide-up="" text-split="" class="heading-jumbo-small">Get in touch</h1>
      <div class="paragraph-light">Have a question? we&#x27;re here to help. <br>Send us an email at <a href="mailto:info@shoplucapets.com?subject=inquiry" class="faq-email">Femblack001@femblack.org </a>&amp; we&#x27;ll get back to you by our next business day. </div>
    </div>
    <div class="container">
      <div class="get-in-touch-form-wrap w-form">
        <form action="send_message.php" id="wf-form-Get-In-Touch-Form" name="wf-form-Get-In-Touch-Form" method="POST" class="get-in-touch-form">
          <div class="credentials-inputs-wrap">
            <div class="contact-name-field-wrap">
              <label for="name" class="field-label">Name</label>
              <input type="text" class="text-field cc-contact-field w-input" maxlength="256" name="name" data-name="Name" placeholder="Enter your name" id="Name"></div>
            <div class="email-name-field-wrap">
              <label for="Email-2" class="field-label-2">Email Address</label>
              <input type="email" class="text-field cc-contact-field w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter your email" id="Email-2" required=""></div>
          </div>
          <label class="field-label-3">Message</label>
          <textarea id="field" name="field" placeholder="Enter your message" maxlength="5000" data-name="Field" class="text-field cc-textarea cc-contact-field w-input"></textarea>
          <input type="submit" value="Submit" class="button w-button">
        </form>
      </div>
    </div>
  </div>
  <?php include('includes/subscribe.php'); ?>
  <?php include('includes/footer.php'); ?>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=6444e1de321aed947531f251" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <?php include('includes/updateCart.php'); ?>
  <script src="js/scriptu.js" type="text/javascript"></script>
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
</script>
</body>
</html>

























