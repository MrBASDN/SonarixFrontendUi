<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Soanrix Home page</title>
  <link rel="icon" type="image/png" href="img/logo.png">
  <link rel="stylesheet" href="./css/common.css" />
  <link rel="stylesheet" href="./css/navbar.css" />
  <link rel="stylesheet" href="./css/footer.css" />
  <link rel="stylesheet" href="./css/productCard.css" />
  <link rel="stylesheet" href="./css/home.css" />
</head>

<body>

  <?php include 'navbar.php'; ?>


  <main>
    <div class="carouselContainer">
      <div class="carouselSlideContainer">
        <div class="carouselSlider">
          <div class="carouselSlide">
            <div class="info-box">
              <div>Welcome to Sonarix</div>
              <div>Elevate Your Sounds</div>
              <div>
                Discover top-quality instruments and accessories that enhance
                your musical journey. Find what you need at Sonarix.
              </div>
            </div>
            <img src="img/caro-1.png" alt="Guitar Guy !!!" />
          </div>
          <div class="carouselSlide">
            <div class="info-box">
              <div>Expertly Curated</div>
              <div>Handpicked Excellence</div>
              <div>
                Our selection is carefully chosen for unmatched quality and
                performance. Experience the best with Sonarix.
              </div>
            </div>
            <img src="img/caro-2.png" alt="Guitar Guy !!!" />
          </div>
          <div class="carouselSlide">
            <div class="info-box">
              <div>Quality You Can Trust</div>
              <div>Built to Last</div>
              <div>
                Enjoy reliable gear that performs consistently, whether on stage
                or in the studio. Trust Sonarix for durability.
              </div>
            </div>
            <img src="img/caro-3.png" alt="Guitar Guy !!!" />
          </div>
          <div class="carouselSlide">
            <div class="info-box">
              <div>Personalized Support</div>
              <div>Tailored for You</div>
              <div>
                Get expert recommendations and support. We help you find the
                perfect gear to match your musical style.
              </div>
            </div>
            <img src="img/caro-4.png" alt="Guitar Guy !!!" />
          </div>
          <div class="carouselSlide">
            <div class="info-box">
              <div>Innovative Gear</div>
              <div>Cutting-Edge Technology</div>
              <div>
                Explore our latest innovations designed to push your music
                forward. Stay ahead with Sonarix’s tech-forward products.
              </div>
            </div>
            <img src="img/caro-5.png" alt="Guitar Guy !!!" />
          </div>
        </div>
      </div>

      <div id="carouselPrevious" onclick="toggleSlides('previous')">&#10094;</div>
      <div id="carouselNext" onclick="toggleSlides('next')">&#10095;</div>

      <div class="dots">
        <div class="dot active" onclick="currentSlide(0)"></div>
        <div class="dot" onclick="currentSlide(1)"></div>
        <div class="dot" onclick="currentSlide(2)"></div>
        <div class="dot" onclick="currentSlide(3)"></div>
        <div class="dot" onclick="currentSlide(4)"></div>
      </div>
    </div>
    <div id="brandContainer">
      <div class="brand">
        <?php include "./svg/main/companies/fender.svg" ?>
      </div>
      <div class="brand">
        <?php include "./svg/main/companies/gibson.svg" ?>
      </div>
      <div class="brand">
        <?php include "./svg/main/companies/yamaha.svg" ?>
      </div>
      <div class="brand">
        <?php include "./svg/main/companies/taylor.svg" ?>
      </div>
      <div class="brand">
        <?php include "./svg/main/companies/sony.svg" ?>
      </div>
      <div class="brand">
        <?php include "./svg/main/companies/martin.svg" ?>

      </div>
    </div>
    <div class="arrival-container">
      <div class="info-box">
        <span class="sub-title">Best Quality</span>
        <span class="title">New Arrival</span>
        <div>
          <?php include "./svg/icons/arrow-icon.svg" ?>
          <span>Best Brands</span>
        </div>
        <div>
          <?php include "./svg/icons/arrow-icon.svg" ?>
          <span>100% Secure Checkout</span>
        </div>
        <div>
          <?php include "./svg/icons/arrow-icon.svg" ?>
          <span>Quality Ensured</span>
        </div>
        <div class="container-buttons">
          <div id="containerPrev">&#10094;</div>
          <div id="containerNext">&#10095;</div>
        </div>
      </div>
      <div class="product-container" id="arrivalContainer">
        <?php for ($i = 0; $i < 5; $i++) { ?>
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
        <?php } ?>
      </div>
    </div>
    <div class="category-container">
      <h2 class="title-text">Select from different categories</h2>
      <div class="category">
        <div class="icon">
          <?php include "./svg/main/keyboard.svg" ?>
        </div>
        <span>Keyboard</span>
      </div>
      <div class="category">
        <div class="icon">
          <?php include "./svg/main/guitar.svg" ?>
        </div>
        <span>String</span>
      </div>
      <div class="category">
        <div class="icon">
          <?php include "./svg/main/drum.svg" ?>

        </div>
        <span>Percussion</span>
      </div>
      <div class="category">
        <div class="icon">

          <?php include "./svg/main/trumpet.svg" ?>
        </div>
        <span>Wood Wind</span>
      </div>
      <div class="category">
        <div class="icon">
          <?php include "./svg/main/electric-guitar.svg" ?>

        </div>
        <span>Electric</span>
      </div>
      <div class="category">
        <div class="icon">
          <?php include "./svg/main/accessories.svg" ?>

        </div>
        <span>Other</span>
      </div>
    </div>
    <div class="explore-section">
      <div class="title-container">
        <span> Explore Products </span>
        <a href="#">Show more +</a>
      </div>
      <div class="product-explore-container">
        <?php for ($i = 0; $i < 7; $i++) { ?>
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
        <?php } ?>
      </div>
    </div>
  </main>

  <?php include 'footer.php'; ?>


  <script src="./js/navbar.js"></script>
  <script src="./js/cart.js"></script>
  <script src="./js/home.js"></script>
</body>

</html>