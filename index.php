<!DOCTYPE html>
<html lang="en">

<head>
  <meta>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonticons/css/all.css">
  <link rel="stylesheet" href="assets/CSS/style.css">
  <link rel="icon" href="assets/images/AZKA favicon-modified.png">
  <title>AzkasPlace | Eplicitly Fashionable</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kaushan+Script&family=Metal&family=Nobile:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <!-- Navbar -->

  <?php
  include_once "assets/includes/nav.php";
  ?>

  <!-- Hero Skewed -->
  <section class="hero">
    <div>
      <div id="heroarticles">
        <h1>Suffisticated Ladies Wears</h1>
        <h3 style="font-family: 'Kaushan Script', cursive; font-weight: 600;">Modest "N" Stylish</h3>
        <a href="products.php" class="anchor"><button type="button" class="btn herobtn">Shop Now</button></a>
        <a href="affiliate.php" class="anchor"><button type="button" class="btn herobtn">Become an
            Affiliate</button></a>
      </div>

      <img class="mobileheroimg" src="assets/images/azkasplaceheroimg4.png">

      <img class="heroimg" src="assets/images/azkasplaceheroimg1.png" alt="">
    </div>

  </section>

  <!-- categories section -->
  <section class="container catg mt-5">
    <h4 class="catheading">CATEGORIES</h4>
    <div class="row p-0 mt-3">
      <!-- ONE -->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/images/2in1 tunic with trousers.jpeg" alt="">
        <div class="details">
          <h2>High Quality Wears</h2>
          <button class="btn btn-sm catbtn">SHOP NOW</button>
        </div>
      </div>
      <!-- TWO -->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/images/shirt and gown.jpeg" alt="">
        <div class="details">
          <h2>High Quality Wears</h2>
          <button class="btn btn-sm catbtn">SHOP NOW</button>
        </div>
      </div>
      <!-- THREE -->
      <div class="one col-lg-4 col-md-12 col-sm-12 p-0">
        <img class="img-fluid" src="assets/images/quality gown.jpeg" alt="">
        <div class="details">
          <h2>High Quality Wears</h2>
          <button class="btn btn-sm catbtn">SHOP NOW</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Icons section -->
  <section class="mid1">
    <div class="container text-center shadow-lg mid1div">
      <div class="row m-1 p-3">
        <div class="col col-4-lg text-dark firstfgrid">
          <h5>24/7 ONLINE SUPPORT</h5>
          <i class="fa-solid fa-headset"></i>
        </div>
        <div class="col col-4-lg text-dark firstfgrid">
          <h5>QUALITY PRODUCTS</h5>
          <i class="fa-solid fa-sun"></i>
        </div>
        <div class="col col-4-lg text-dark firstfgrid">
          <h5>QUICK DELIVERY</h5>
          <i class="fa-solid fa-truck" style="font-size: 48px;"></i>
        </div>
      </div>
    </div>
  </section>
  <!-- Best Sellings-->

  <section class="container bestselling mt-5">
    <h2>BEST SELLING</h2>
    <div class="">
      <div class="row row-cols-2 frow">
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- New Arrivals -->
  <section class="container newarrival mt-5">
    <h2>NEW ARRIVALS</h2>
    <div class="">
      <div class="row row-cols-2 newarrivalrow">
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="newarrivalptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
        <div class=" col col-md-3 product-column">
          <div class="product-top">
            <a href="#">
              <img src="assets/images/cute lady.jpg" class="ptimg" alt="">
            </a>
            <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop">
                <i class="fa fa-solid fa-eye"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Wishlist">
                <i class="fa fa-regular fa-heart"></i>
              </button>
              <button type="button" class="btn btn-secondary" title="Add to Cart">
                <i class="fa fa-solid fa-cart-plus"></i>
              </button>
            </div>
            <div class="product-bottom text-center">
              <h3>Sport Turkey Gown</h3>
              <h5>N25,000</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Blog -->
  <section class="container">
    <div class="blogheading">
      <h1>BL<span style="color:#FD02FF ;">OG</span></h1>
    </div>
    <div class="row py-5">
      <div class="card col-md-4 mx-3 blogcol" style="width: 21rem;">
        <img src="assets/images/cute lady.jpg" class="card-img-top cardimg" alt="...">
        <div class="card-body">
          <h5 class="card-title cardtitle">Card title</h5>
          <p class="card-text cardtext">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a href="#" class="btn btn-primary cardbutton">Read More >></a>
        </div>
      </div>
      <div class="card col-md-4 mx-3 blogcol" style="width: 21rem;">
        <img src="assets/images/cute lady.jpg" class="card-img-top cardimg" alt="...">
        <div class="card-body">
          <h5 class="card-title cardtitle">Card title</h5>
          <p class="card-text cardtext">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a href="#" class="btn btn-primary cardbutton">Read More >></a>
        </div>
      </div>
      <div class="card col-md-4 mx-3 blogcol" style="width: 21rem;">
        <img src="assets/images/cute lady.jpg" class="card-img-top cardimg" alt="...">
        <div class="card-body">
          <h5 class="card-title cardtitle">Card title</h5>
          <p class="card-text cardtext">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
          <a href="#" class="btn btn-primary cardbutton">Read More >></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <section class="">
    <div class="container footer1 shadow-lg">
      <div class="row row-cols-lg-3 row-cols-md-3 row-cols-sm-3 m-1 p-3">
        <div class="col text-dark firstcolingridf">
          <div class="col secondgridf">
            <h1>QUICK LINKS</h1>
            <ul class="ulfooterlinks">
              <li>
                <a href="affiliate.html" class="footerlinks"> Become an Affiliate</a>
              </li>
              <li>
                <a href="products.html" class="footerlinks">Products of Interest</a>
              </li>
              <li>
                <a href="contact.html" class="footerlinks">Contact Us</a>
              </li>
              <li>
                <a href="about.html" class="footerlinks">About Us</a>
            </ul>
          </div>
        </div>
        <div class="col text-dark firstcolingridf">
          <div class="col secondgridf">
            <h1>PAYMENT METHODS</h1>
            <img src="assets/images/payment methods.png" class="payment" alt="">
          </div>
        </div>
        <div class="col text-dark firstcolingridf">
          <div class="col secondgridf">
            <h1>SERVICES</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto inventore vitae neque nam unde
              accusantium impedit at temporibus odit perferendis!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer bottom -->
  <section my-0>
    <div class="footerbuttom text-center">
      <span style="color: #FD02FF ;">AZKAS</span><span style="color: #ffae00;">PLACE </span>ALL RIGHT RESERVED<sup style="color: rgb(255, 0, 34); font-size: 15px; padding-top: 5px;"> © </sup>2022, DEVELOPED BY <a href="#" style="color: #ff009d;">DIGITAL INTELLECTUAL HUB</a> | <a href="privacy.html">PRIVACY & POLICY</a>
    </div>
  </section>

  <script src="assets/JS/bootstrap.bundle.min.js"></script>
</body>

</html>