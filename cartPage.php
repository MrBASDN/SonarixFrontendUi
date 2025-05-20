<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./css/common.css">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/footer.css">
  <link rel="stylesheet" href="./css/cartPage.css">
</head>

<body>

  <?php include "navbar.php" ?>

  <main>
    <div data-title="cart" class="headingSection">
      <h1>Your Cart 😗🎶</h1>
      <div class="cartSteps">
        <div class="stepContainer active" onclick="toggleSection('cartContainer')">
          <div class="stepNumber">1</div>
          <div class="stepText">Cart Details</div>
        </div>
        <div data-title="delivery" class="stepContainer" onclick="toggleSection('addressContainer')">
          <div class="stepNumber">2</div>
          <div class="stepText">Delivery Details</div>
        </div>
        <div data-title="payment" class="stepContainer" onclick="toggleSection('paymentContainer')">
          <div class="stepNumber">3</div>
          <div class="stepText">Payment Status</div>
        </div>
      </div>
    </div>
    <div class="slider-container">
      <div class="slider">
        <div id="cart-wrapper" class="">
          <div class="button-container">
            <div class="button inactive" onclick="toggleSection('cartContainer')">
              <?php include "./svg/icons/arrowhead.svg" ?>
              Back
            </div>
            <div class="title">Cart</div>
            <div class="button" onclick="toggleSection('addressContainer')">
              Next
              <?php include "./svg/icons/arrowhead.svg" ?>
            </div>
          </div>
          <div id="cartContainer">
            <div class="cart-header">
              <div>Product Details</div>
              <div>Sub-Total</div>
            </div>

            <div class="cart-main" id="cart-items-container">
              <?php for ($i = 0; $i < 5; $i++) { ?>

                <div class="cart-item" data-product-id="<?php echo $i ?>">
                  <div class="product-info">
                    <img src="img/drumset.png" alt="Drum Set" />
                    <div class="item-details">
                      <h3>5 Piece Drum Set yamaha limited edition mother fucker fucking bitch</h3>
                      <p>Color: Black</p>
                      <span class="item-price">Rs.200000</span>
                      <div class="removeBtn">
                        <?php include "./svg/icons/bin-icon.svg" ?>
                        <span>Remove</span>
                      </div>
                    </div>
                  </div>
                  <div class="price-info">
                    <div class="itemController">
                      <button class="decrement">
                        <?php include "./svg/icons/decrement.svg" ?>
                      </button>
                      <span class="quantity">1</span>
                      <button class="increment">
                        <?php include "./svg/icons/increment.svg" ?>
                      </button>
                    </div>
                    <div class="item-total">Rs.200000</div>
                  </div>
                </div>
              <?php } ?>
            </div>
          </div>

          <div class="cart-summary">
            <div class="summary-header">
              <h2>Order Summary</h2>
              <span class="toggle-summary"></span>
            </div>
            <div class="summary-content">
              <div class="summary-details">
                <div class="summary-row itemCount">
                  <span>Number of Products</span>
                  <span id="subtotal-price">7</span>
                </div>
                <div class="summary-row itemCount">
                  <span>Number of Items</span>
                  <span id="subtotal-price">7</span>
                </div>

                <div class="summary-row shipping">
                  <span>Delivery</span>
                  <span>Free</span>
                </div>
                <div class="summary-total">
                  <span>Total</span>
                  <span id="total-price">Rs.200000</span>
                </div>
              </div>
              <button class="checkout-btn" onclick="toggleSection('addressContainer')">
                Proceed to Checkout
              </button>
            </div>
          </div>

        </div>
        <div id="address-wrapper" class="">
          <div class="button-container">
            <div class="button" onclick="toggleSection('cartContainer')">
              <?php include "./svg/icons/arrowhead.svg" ?>
              Back
            </div>
            <div class="title">Address</div>
            <div class="button " onclick="toggleSection('paymentContainer')">
              Next
              <?php include "./svg/icons/arrowhead.svg" ?>
            </div>
          </div>
          <div class="inputSection">
            <div class="nameSection">
              <div>
                <p>First Name</p>
                <input type="text">
              </div>
              <div>
                <p>Last Name</p>
                <input type="text">
              </div>
            </div>
            <div>
              <p>Email</p>
              <input type="text">
            </div>
            <div>
              <p>Contact Number</p>
              <input type="text">
            </div>
            <div>
              <p>Shipping Address</p>
              <input type="text">
            </div>
            <div class="addressSection">
              <div>
                <p>City</p>
                <input type="text">
              </div>
              <div>
                <p>Postal Code</p>
                <input type="text">
              </div>
            </div>
            <div class="checkBoxContainer">
              <input type="checkbox">
              <p> Save my details for future purchases</p>
            </div>
            <div class="checkBoxContainer">
              <input type="checkbox">
              <p> Subscribe for exclusive offers & coupons </p>
            </div>
          </div>
          <div class="cart-summary">
            <div class="summary-header">
              <h2>Order Summary</h2>
              <span class="toggle-summary"></span>
            </div>
            <div class="summary-content">
              <div class="summary-details">
                <div class="summary-row itemCount">
                  <span>Number of Products</span>
                  <span id="subtotal-price">7</span>
                </div>
                <div class="summary-row itemCount">
                  <span>Number of Items</span>
                  <span id="subtotal-price">7</span>
                </div>

                <div class="summary-row shipping">
                  <span>Delivery</span>
                  <span>Free</span>
                </div>
                <div class="summary-total">
                  <span>Total</span>
                  <span id="total-price">Rs.200000</span>
                </div>
              </div>
              <button class="checkout-btn" onclick="toggleSection('paymentContainer')">
                Proceed to Checkout
              </button>
            </div>
          </div>
        </div>
        <div id="payment-wrapper" class="">
          <div class="button-container">
            <div class="button" onclick="toggleSection('addressContainer')">
              <?php include "./svg/icons/arrowhead.svg" ?>
              Back
            </div>
            <div class="title">Payment Invoice</div>
            <div class="button inactive" onclick="toggleSection('paymentContainer')">
              Next
              <?php include "./svg/icons/arrowhead.svg" ?>
            </div>
          </div>
          <div class="invoice-container">
            <div class="titleHeader">
              <h1>Final Invoice</h1>
              <p>Sonarix Music - Where music meets Passion</p>
            </div>

            <section class="userDetails">
              <h2>Delivery Details</h2>
              <div class="detailsContainer">
                <div class="detailsInfo">
                  <p><strong>Name:</strong> John Doe</p>
                  <p><strong>Address:</strong> 123 Music Lane, Melody City, 56789</p>
                  <p><strong>Mobile:</strong> (123) 456-7890</p>
                  <p><strong>Email:</strong> john.doe@example.com</p>
                </div>
                <div class="detailsInfo">
                  <p><strong>Order Date:</strong> January 1, 2025</p>
                  <p><strong>Invoice No:</strong> INV-2024-001</p>
                  <p><strong>Payment Method:</strong> Credit Card</p>
                  <p><strong>Delivery Method:</strong> Standard Shipping</p>
                </div>
              </div>

            </section>

            <section class="invoice-details">
              <h2>Order Summary</h2>
              <div class="invoice-details">
                <div class="mainTableContainer">
                  <div class="tableHead">
                    <div class="tableRow">
                      <div class="tableData">Product ID</div>
                      <div class="tableData">Product Name</div>
                      <div class="tableData">Price</div>
                    </div>
                  </div>
                  <div class="tableBody">
                    <div class="tableRow">
                      <div class="tableData">001</div>
                      <div class="tableData">
                        Very Long Instrument Name for Testing Purposes hfjksdafkjhsdfasf hjkasdhfjksdhafjas
                        jalkfjlsafjsa jklsdajflkasjflja
                      </div>
                      <div class="tableData">Lkr. 25000.00</div>
                    </div>
                    <div class="tableRow">
                      <div class="tableData">002</div>
                      <div class="tableData">Drum Set</div>
                      <div class="tableData">Lkr 650000.00</div>
                    </div>
                  </div>
                </div>
              </div>

            </section>

            <section class="invoice-total">
              <h2>Total: $900.00</h2>
              <p><strong>Delivery Fee:</strong> Free Delivery</p>
              <p><strong>Number of Products:</strong> 2</p>
              <p><strong>Number of Items:</strong> 4</p>
              <p><strong>Note:</strong> Prices include applicable taxes.</p>
            </section>

            <section class="shop-details">
              <h2>Thank you for choosing Sonarix Music!</h2>
              <p><strong>Sonarix Music</strong></p>
              <h2>Shop Information</h2>
              <p>789 Harmony Road, Musical District</p>
              <p>Contact: (555) 123-4567</p>
              <p>Email: support@sonarixmusic.com</p>
              <p>Website: www.sonarixmusic.com</p>
              <p>Business Hours: Mon-Sat 9:00 AM - 6:00 PM</p>
            </section>

            <div class="place-order-btn">Place Order</div>
            <div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>



  <?php include "footer.php" ?>

  <script src="./js/navbar.js"></script>
  <script src="./js/cart.js"></script>
  <script src="./js/cartPage.js"></script>

</body>

</html>