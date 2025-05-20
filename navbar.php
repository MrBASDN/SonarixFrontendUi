<header>
  <div class="navbar-logo">
    <img src="img/logo.png" alt="" />
    <div class="navbar-logoName" id="theme-toggle">
      <h3>Sonarix</h3>
      <span>Where music meets passion</span>
    </div>
  </div>
  <div id="navbarItems" data-menu="closed">
    <div><a href="index.php">Home</a></div>
    <div><a href="advanceSearch.php">Shop</a></div>
    <div><a href="aboutUs.php">About Us</a></div>
    <div>
      <select>
        <option disabled selected>Categories</option>
        <option><a href="">String</a></option>
        <option><a href="">Percussion</a></option>
        <option><a href="">Wood Wind</a></option>
        <option><a href="">Electric</a></option>
        <option><a href="">Keyboard</a></option>
        <option><a href="">Other</a></option>
      </select>
    </div>

  </div>
  <div class="navbar-icons">
    <?php include "./svg/icons/search-icon.svg" ?>
    <a id="profile-icon" href="profileSetting.php">
      <?php include "./svg/icons/profile-icon.svg" ?>
    </a>
    <?php include "./svg/icons/menu-icon.svg" ?>
    <div class="navbar-wrapper">
      <?php include "./svg/icons/cart-icon.svg" ?>
    </div>
  </div>
</header>
<div id="cartSection" data-menu="closed">
  <div class="cart-top">
    <h1>Cart</h1>
    <?php include "./svg/icons/closed-cart.svg" ?>
  </div>
  <div class="cart-main" id="cart-items-container">
    <?php for ($i = 0; $i < 10; $i++) { ?>
      <div class="cart-item" data-product-id="1">
        <img src="img/drumset.png" alt="Drum Set Image" />
        <span class="itemName">5 Piece Drum Set - Yamaha Original Limited Edition. Perl Black</span>
        <div class="itemContainer">
          <span>Color: Black</span>
          <div class="itemController">
            <button class="decrement">
              <?php include "./svg/icons/decrement.svg" ?>
            </button>
            <span class="quantity">1</span>
            <button class="increment">
              <?php include "./svg/icons/increment.svg" ?>
            </button>
          </div>
        </div>
        <div class="itemContainer">
          <div class="itemPrize">Rs.200000</div>
          <?php include "./svg/icons/bin-icon.svg" ?>
        </div>
      </div>
    <?php } ?>
  </div>
  <div class="cart-bottom">
    <div class="total-container">
      <span>Total price:</span><span id="total-price">None</span>
    </div>
    <div class="checkout-btn" onclick="checkOut()">
      <a href="cartPage.php">Checkout</a>
    </div>
  </div>
</div>
<div data-menu="closed" id="searchContainer">
  <div id="searchBar">
    <?php include "./svg/icons/search-icon.svg" ?>
    <input type="search" placeholder="What are you looking for?" class="search-input" />
  </div>
  <?php include "./svg/icons/cross-icon.svg" ?>
</div>