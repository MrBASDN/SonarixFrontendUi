<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/productCard.css">
    <link rel="stylesheet" href="./css/singleProductView.css">
</head>

<body>

    <?php include 'navbar.php' ?>

    <main>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="advanceSearch.php">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Yamaha G15</li>
            </ul>
        </nav>
        <div id="product-image-gallery" class="product-gallery-container">
            <div class="product-image-slide">
                <img src="img/piano.png" onclick="productImgLoad(this)" loading="lazy">
                <img src="img/drumset.png" onclick="productImgLoad(this)" loading="lazy">
                <img src="img/piano.png" onclick="productImgLoad(this)" loading="lazy">
                <img src="img/drumset.png" onclick="productImgLoad(this)" loading="lazy">
                <img src="img/piano.png" onclick="productImgLoad(this)" loading="lazy">
            </div>
            <div class="main-product-view">
                <img id="mainProductImage" src="img/piano.png">
            </div>
        </div>

        <div id="product-info-container">
            <h1 class="product-title">Yamaha G1 50 HX Limited Edition - Drum Set</h1>
            <div class="product-info"><strong>Brand:</strong>Yamaha</div>
            <div class="product-info"><strong>Instrument Type:</strong>Percussion</div>
            <div class="product-info"><strong>Rating:</strong>4.9/5 &starf; (105 ratings)</div>
            <div class="product-info"><strong>Availability:</strong>5 In Stock</div>
            <div class="product-info"><strong>Color:</strong>Black</div>
            <div class="product-info"><strong>Warranty:</strong>2 Years Seller Warranty</div>
            <div class="product-info"><strong>Price:</strong>$1,499.99</div>
            <div class="product-actions">
                <button class="add-to-cart">Add to Cart</button>
                <button class="buy-now">Buy Now</button>
            </div>
            <div class="product-info">
                <strong>Product description:</strong>
                <div id="productDescription" data-visible="false">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolor, iure
                    blanditiis quo beatae magni modi praesentium provident molestias accusantium obcaecati maxime unde
                    eum voluptatibus eos es tffklsdf lksdjf ljsd afj lksdaj flkjsdaf jasldjflsdajfjaslka fsadfsadjfklsaf
                    jasdkljfjs dafjsa lkfjs dalj flasjfsjak lfjsalk fjlskadjfljl assumenda quod expedita harum!
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cum officia culpa accusamus explicabo
                    libero neque sint. Repellat libero ratione nulla, quis, culpa ullam enim odit ex veritatis doloribus
                    dolor minus?
                    <ul class="product-highlights">
                        <li>High-quality build materials</li>
                        <li>Premium finish</li>
                        <li>Great sound quality</li>
                    </ul>
                </div>
                <button id="toggleDescription" onclick="toggleDescription()">Show More</button>
            </div>
            <div class="review-container">
                <h2>Reviews</h2>
                <div class="review-section">
                    <textarea id="review-input" placeholder="Write your review here..."></textarea>
                    <p>*please not that you can only leave one rating per product. If you add a new review your old
                        review will be replaced </p>
                    <div class="stars" id="stars">
                        <div>Rate us 😎</div>
                        <span data-value="1">★</span>
                        <span data-value="2">★</span>
                        <span data-value="3">★</span>
                        <span data-value="4">★</span>
                        <span data-value="5">★</span>
                    </div>
                    <div class="actions">
                        <button id="cancel-btn" onclick="cancelReview()" disabled>Cancel</button>
                        <button id="submit-btn" onclick="submitReview()" disabled>Submit</button>
                    </div>
                </div>

                <div class="review">
                    <div class="review-header">
                        <img src="./img/avatars/avt-00.png" alt="User Icon" class="user-icon" />
                        <span class="username">Jane Smith</span>
                        <span class="stars-display">★★★★☆</span>
                    </div>
                    <p>Really solid build, but the price is a bit steep. Overall, a great product!</p>
                </div>


                <div class="review">
                    <div class="review-header">
                        <img src="./img/avatars/avt-05.png" alt="User Icon" class="user-icon" />
                        <span class="username">John Doe</span>
                        <span class="stars-display">★★★★★</span>
                    </div>
                    <p>The best guitar I’ve ever purchased! Highly recommended for professionals.</p>
                </div>

                <div class="review">
                    <div class="review-header">
                        <img src="./img/avatars/avt-00.png" alt="User Icon" class="user-icon" />
                        <span class="username">Jane Smith</span>
                        <span class="stars-display">★★★★☆</span>
                    </div>
                    <p>Really solid build, but the price is a bit steep. Overall, a great product!</p>
                </div>

                <div class="review">
                    <div class="review-header">
                        <img src="./img/avatars/avt-05.png" alt="User Icon" class="user-icon" />
                        <span class="username">John Doe</span>
                        <span class="stars-display">★★★★★</span>
                    </div>
                    <p>The best guitar I’ve ever purchased! Highly recommended for professionals.</p>
                </div>
            </div>
        </div>

        <h2>Similar products you might also like</h2>
        <div class="product-suggestions">
            <?php for ($i = 0; $i < 7; $i++) {
                ?>

                <div class="product-card">
                    <?php include "svg/icons/new-icon.svg" ?>
                    <div class="image-container">
                        <img src="img/guitar.png" alt="Product Image" />
                    </div>
                    <div class="item-info">
                        <span title="perl drudfnlskdafjlk">Perl Roadshow Drum 5 Piece Set fkdsjflksdajfkdsajfsdafjslk</span>
                        <span>String - Guitar</span>
                        <span class="rating">
                            4.9/5 &starf; (101 rating)
                        </span>
                        <div class="price">
                            <span>lkr&MediumSpace;15000 /-</span>
                            <span>lkr&MediumSpace;15000 /-</span>
                        </div>
                        <div class="cart-btn">
                            <?php include "./svg/icons/add-to-cart.svg" ?>
                        </div>
                    </div>
                </div>
                <?php
            } ?>
        </div>
    </main>

    <?php include 'footer.php' ?>

    <script src="./js/navbar.js"></script>
    <script src="./js/singleProductView.js"></script>
</body>

</html>