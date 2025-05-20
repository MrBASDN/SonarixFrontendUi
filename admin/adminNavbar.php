<div id="sideNavigationContainer">
    <div class="navbar-logo">
        <img src="../img/logo.png" alt="" />
        <div class="navbar-logoName" id="theme-toggle">
            <h3>Sonarix</h3>
            <a>Where music meets passion</a>
        </div>
    </div>
    <div class="navigationItems">
        <div class="navItem">
            <div class="icon">
                <?php include "../svg/dashboard.svg" ?>
            </div>
            <a href="admin.php">Dashboard</a>
        </div>
        <div class="navItem">
            <div class="icon">
                <?php include "../svg/productSettings.svg" ?>

            </div>
            <a href="product.php">Edit Product</a>
        </div>
        <div class="navItem">
            <div class="icon">
                <?php include "../svg/orderRequest.svg" ?>
            </div>
            <a href="orders.php">Orders</a>
        </div>
        <div class="navItem">
            <div class="icon" id="logout">
                <?php include "../svg/icons/logout-icon.svg" ?>
            </div>
            <a onclick="toggleLogoutModal(true)">Logout</a>
        </div>
    </div>
    <div class="policy-text">This site is a property of Sonarix Music.
        <a href="aboutUs.php#websitePrivacyPolicy">Privacy policy</a> and <a
            href="aboutUs.php#websiteTermsAndConditions">Terms and conditions</a>
        apply
    </div>
</div>

<div class="logout-overlay" id="logoutModal" style="display: none;">
    <div class="logout-modal">
        <p>Are you sure you want to logout?</p>
        <div class="logout-actions">
            <button onclick="confirmLogout()">Yes</button>
            <button onclick="toggleLogoutModal(false)">No</button>
        </div>
    </div>
</div>