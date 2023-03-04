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

<style>

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

    <!-- Related Products -->

    <section class="container related-products py-5">
        <h3 class="text-center text-secondary">Newly Featured</h3>
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
