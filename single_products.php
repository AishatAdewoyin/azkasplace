<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/CSS/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonticons/css/all.css">
    <link rel="stylesheet" href="assets/CSS/style.css">
    <link rel="icon" href="assets/images/AZKA favicon-modified.png">
    <title>Products</title>
    <link rel="stylesheet" href="">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500&family=Kaushan+Script&family=Metal&family=Nobile:wght@500&family=Roboto:wght@500&display=swap" rel="stylesheet">
</head>

<!-- CSS -->

<style>
    .small-img-group {
        display: flex;
        justify-content: space-between;
    }

    .small-img-col {
        flex-basis: 24%;
        cursor: pointer;

    }

    .single-products input {
        width: 50px;
        height: 35px;
        padding-left: 10px;
        font-size: 16px;
        margin-right: 10px;
    }

    .single-products input:focus {
        outline: none;

    }

    .single-products .buy-btn {
        background-color: #FD02FF;
        opacity: 1;
        transition: .4s all;
        color: #ffff;
        font-size: 18px;
    }

    .single-products .buy-btn:hover {
        background-color: #ffae00 !important;
    }

    .related-products {
        margin-top: 10%;
        width: 100%;
        letter-spacing: 1px;
        background-color: #ff02ff11;
    }

    .product-column .r-buy-btn {
        background-color: #ffae00;
        transform: translateY(50px);
        opacity: 0;
        transition: -4 all;
        border: none;
        color: #ffff;
        padding: 5px 20px;
        border-radius: 5px;
    }

    .product-column:hover .r-buy-btn {
        transform: translateY(0px);
        opacity: 1;
    }
</style>

<body>
    <!-- Navbar -->

    <?php
    include_once "assets/includes/nav.php";
    ?>
    <!-- Single Products -->

    <section class="container single-products pt-5">
        <div class="row mt-5">
            <div class="col-lg-5 col-md-6 col-sm-4">
                <img src="assets/images/beautiful black gown.jpeg" id="mainImg" class="img-fluid w-100 pb-1" alt="">
                <div class="small-img-group">
                    <div class="small-img-col">
                        <img src="assets/images/shirt and gown.jpeg" width="100%" class="small-img" data-img="assets/images/beautiful black gown.jpeg" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/images/beautiful plitted gown.jpeg" width="100%" class="small-img" data-img="assets/images/beautiful plitted gown.jpeg" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/images/2in1 tunic with trousers.jpeg" width="100%" class="small-img" data-img="assets/images/2in1 tunic with trousers.jpeg" alt="">
                    </div>
                    <div class="small-img-col">
                        <img src="assets/images/2in1 tunic with trousers.jpeg" width="100%" class="small-img" data-img="assets/images/2in1 tunic with trousers.jpeg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-8">
                <h3>Tunic Dresses</h3>
                <h6 class="py-3">Modest Wears</h6>
                <h2>N10,000</h2>
                <input type="number" value="1">
                <button class="btn btn-light buy-btn px-5">Add to cart</button>
                <h4 class="mt-5 mb-2">Product Details</h4>
                <span>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Optio culpa asperiores dolores, impedit odio nobis accusantium labore reiciendis praesentium repudiandae consequatur, quae in neque. Veritatis illum quos saepe asperiores similique aut corrupti voluptatem modi, quibusdam, eaque dolorum, pariatur mollitia rerum cumque? Ipsam odio at mollitia autem cum temporibus nam, officia, culpa illo, earum architecto facilis minima. Sint nemo, officiis culpa asperiores minima fuga deserunt facere incidunt illum aspernatur magnam? Similique, cupiditate esse ad error placeat fuga expedita molestias nobis iusto. Rerum architecto quos fugiat ad suscipit quas itaque veritatis, iste deserunt magnam autem, tempore </span>
            </div>
        </div>
    </section>

    <!-- Related Products -->

    <section class="container related-products py-5">
        <h3 class="text-center text-secondary">Related Products</h3>
        <hr>
        <p class="text-center text-secondary">Find products related to your chosen product(s)</p>
        <div class="">
            <div class="row row-cols-2 frow">
                <div class="col col-md-3 product-column">
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
                            <h3 class="pname">Sport Turkey Gown</h3>
                            <h5 class="p-price">N25,000</h5>
                            <a href="#"><button class="r-buy-btn">Buy Now</button></a>
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
                            <h3 class="pname">Sport Turkey Gown</h3>
                            <h5 class="p-price">N25,000</h5>
                            <a href="#"><button class="r-buy-btn">Buy Now</button></a>
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
                            <h3 class="pname">Sport Turkey Gown</h3>
                            <h5 class="p-price">N25,000</h5>
                            <a href="#"><button class="r-buy-btn">Buy Now</button></a>
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
                            <h3 class="pname">Sport Turkey Gown</h3>
                            <h5 class="p-price">N25,000</h5>
                            <a href="#"><button class="r-buy-btn">Buy Now</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- footer -->
    <?php
    include_once "assets/includes/footer.php"
    ?>
    <!-- footer bottom -->
    <?php
    include_once "assets/includes/footerbottom.php"
    ?>
    <script src="assets/JS/bootstrap.bundle.min.js"></script>
    <script src="assets/JS/azkasplace.js"></script>
</body>

</html>