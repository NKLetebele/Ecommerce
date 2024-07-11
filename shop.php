<?php 
include('includes/header.php');?>
<style>
.product-grid {
    grid-column-gap: 0px;
    grid-row-gap: 0px;
    /* border: 1px solid #000; */
    /* border-right-color: rgba(0, 0, 0, 0); */
    grid-template-rows: auto;
    grid-template-columns: 1fr 1fr 1fr;
    margin-top: 32px;
}
.single-product-wrapper {
    background-color: #fcfaf6;
    border: 1px solid #000;
    /* border-right: 1px solid #000; */
    /* border-bottom: 1px solid #000; */
    padding-bottom: 60px;
    position: relative;
    margin-left: 10px;
}
[text-split] {opacity: 0;}
html.w-editor [text-split] {opacity: 1;}
.word {
	overflow: hidden;
  padding-bottom: 0.1em;
  margin-bottom: -0.1em;
  transform-origin: bottom;
}
@media screen and (max-width: 500px){
.product-grid {
    display: flex;
    overflow: hidden; 
    flex-direction: column;
    align-content: center;
    flex-wrap: wrap;
     border: none;
}
.single-product-wrapper {
    background-color: #fcfaf6;
     border: none;
    /* margin-bottom: 10px; */
    /* margin-right: 10px; */
    border-right: 1px solid;
    border-left: 1px solid;
    border-top: 1px solid;
    padding-bottom: 60px;
    position: relative;
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
}}
.flex {
    justify-content: space-between;
    display: flex;
    align-items: center;
}
@media screen and (max-width: 767px){
.logo-link {
     width: 200px; 
}} 
</style>
</head>
<body class="body">
  <header id="hero" class="hero wf-section">

  <!-- Video element -->
  <video src=".\images\pexels-vlada-karpovich-6830910 (2160p).mp4" muted="" loop="" autoplay=""></video>

<div class="hero_background">
  
  <div class="hero_header">
    <h1 letters-slide-up="" text-split="" class="heading-jumbo" style="opacity: 1;">
      <span class="word" style="display: inline-block;">
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">O</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">n</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">l</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">i</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">n</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">e</span>
      </span> 
      <span class="word" style="display: inline-block;">
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">S</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">t</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">o</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">r</span>
        <span class="char" style="display: inline-block; translate: none; rotate: none; scale: none; transform: translate(0px, 0px);">e</span>
      </span> <br>
      
      
    </h1>
    <p class="" style="color:white;">Welcome to Eshop, where hope takes flight and compassion knows no bounds. With unwavering commitment, we uplift the vulnerable, champion social justice, and foster sustainable development. 
      </p>
  </div>
</div>

</header>
<?php include('includes/navbar1.php'); ?>
<div style="background:#f9f6f2;"class="section loop wf-section">
    <div  data-w-id="aa5448d3-e997-3f1b-1bd5-2aa92dbad635" class="quote-loop-container">
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
          <div class="subheading">Giving women the power to take a stand<</div>
          <div class="subheading">•</div>
          <div class="subheading">Giving women the power to take a stand<</div>
          <div class="subheading">•</div>
          <div class="subheading">Giving women the power to take a stand<</div>
          <div class="subheading">•</div>
        </div>
        
      </div>
    </div>
  </div>
  <section id="products" class="section">
    <div class="container hero-heading-wrap">
      <div class="products_categories-wrap"></div>
    </div>
    <div class="section-4">
      <div class="container-6">
        <div class="full_title_wrapper">
          <div class="section_title left_align products">
            <h3 class="heading2">Featured products</h3>
            <div class="divider-2 _24px"></div>
          </div>
        </div>
      </div>
      
      <div class="container-6 products">

        <div id="clean" class="products-wrapper first">
          <div class="product_category_container">
            

            <div  id="data-container"class="w-layout-grid product-grid">

             
            <script>
            let cartItems = [];
            const apiUrl = 'fetchData.php';

            document.addEventListener('DOMContentLoaded', function() {
                fetchData();
            });

            async function fetchData() {
                try {
                    const response = await fetch(apiUrl);
                    const data = await response.json();
                    displayData(data);
                } catch (error) {
                    console.error('Error fetching data:', error);
                }
            }

            function displayData(data) {
                const container = document.getElementById('data-container');
                if (data.length === 0) {
                    container.innerHTML = '<p>No data available.</p>';
                } else {
                    data.forEach(item => {
                        const card = document.createElement('div');
                        card.className = 'single-product-wrapper';

                        const cardContent = document.createElement('div');
                        cardContent.className = 'product-content';

                        cardContent.innerHTML = `<a href="detail_product.php?product_id=${item.product_id}">
                            <div class="product-image-wrapper">
                                <img src="https://streamlineedit.com/Workspace%20Admin/uploads/${item.image}" alt="" class="product-image-2">
                            </div>
                            <div class="product-content-wrapper">
                                <div class="small-heading">${item.category}</div>
                                <h3 class="heading4">${item.product_name}</h3>
                            </div>
                        </a>`;

                        card.appendChild(cardContent);
                        container.appendChild(card);
                    });
                }
            }
</script>


           

          </div>
        </div>

      </div>
    </div>
  </section>
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
</script>
<!-- Add this script at the end of your HTML body -->






<script>



function copyrightYear() {
 const yearElem = document.getElementById("year")
 yearElem.innerText = new Date().getFullYear()
}
copyrightYear()


  document.addEventListener('DOMContentLoaded', function() {
       loadCartFromLocalStorage();
       
        fetchProductDetails(product_id)
    });

 // Load cart from localStorage













// this is the display from the api code -->


const customer = <?php echo json_encode($user_id); ?>;
const cart = <?php echo json_encode($cart_id); ?>;

function updateCartDisplay() {
    const cartContainer = document.getElementById('cart-container');
    const checkoutButton = document.querySelector('.w-commerce-commercecartcheckoutbutton');

    // Fetch cart items from PHP script
    fetch('fetch_cart.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({
            customer_id: customer,
            cart_id: cart
        })
    })
    .then(response => response.json())
    .then(cartItems => {
        if (cartItems.length === 0) {
            cartContainer.innerHTML = '<p>No items in the cart.</p>';
            checkoutButton.style.display = 'none';
            return;
        }

        const cartItemsHTML = cartItems.map(item => {
          const totalValue = item.quantity * item.price; // Calculate the total value
            return `
                <div role="listitem" class="w-commerce-commercecheckoutorderitem">
                  
                    <img src="https://streamlineedit.com/Workspace%20Admin/uploads/${item.image}" alt="" class="w-commerce-commercecartitemimage"/>
                    <div class="w-commerce-commercecheckoutorderitemdescriptionwrapper checkout_item_info">
                        <div class="w-commerce-commerceboldtextblock">${item.product_name}</div>
                        <div class="w-commerce-commercecheckoutorderitemquantitywrapper">
                            <div>Qty: </div>
                            <div>${item.quantity}</div>
                        </div>
                        <div class="w-commerce-commercecheckoutorderitemquantitywrapper">
                            <div>Price: </div>
                            <div>R ${item.price}</div>
                        </div>
                        <ul class="w-commerce-commercecheckoutorderitemoptionlist">
                            <li>
                              
                                <span>Size: ${item.size}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="checkout_item_price" style="padding-right: 10px;">R${totalValue}</div>
                    <button style="height: 40px; border-radius: 20px; padding-left: 10px; padding-right: 10px;" onclick="deleteProductFromCart(${item.id}, event)">Delete</button>
                </div>
            `;
        }).join('');

        cartContainer.innerHTML = cartItemsHTML;
       // updateSubtotal(cartItems);
       // updateCartIcon(cartItems); // Update cart icon with total quantity
        checkoutButton.style.display = 'block';
    })
    .catch(error => {
        console.error('Error fetching cart items:', error);
        cartContainer.innerHTML = '<p>Error fetching cart items.</p>';
        checkoutButton.style.display = 'none';
    });
}

// Call the function to update cart display
updateCartDisplay();




</script>
</body>
</html>