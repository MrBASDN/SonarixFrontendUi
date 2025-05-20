<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/userLogin.css">
    <style></style>
</head>

<body>
    <?php include "navbar.php" ?>
    <main>
        <h1>Log In</h1>
        <div class="main-container">
            <div class="sign-container">
                <div class="slider-container">
                    <div id="login" class="input-group">
                        <input type="email" class="input-field" name="" id="email" placeholder="Enter your email"
                            required>
                        <input type="password" class="input-field" name="" id="password"
                            placeholder="Enter your password" required>
                        <div class="submit-btn" onclick="signIn();">Sign In</div>
                        <p>Don't have an account? <span onclick="toggleBoxes('signUp')">Sign Up</span></p>
                    </div>
                    <div id="sign_up" class="input-group">
                        <input type="text" class="input-field" name="" id="user_name" placeholder="enter your username"
                            required>
                        <input type="email" class="input-field" name="" id="email" placeholder="enter your email"
                            required>
                        <input type="password" class="input-field" name="" id="password"
                            placeholder="enter your password" required>
                        <input type="password" class="input-field" name="" id="re_password"
                            placeholder="re-enter your password" required>
                        <div id="agreeToConditions">
                            <input type="checkbox" class="check-box" name="" id="">
                            <span>I agree to the <a href="aboutUs.php#websiteTermsAndConditions">terms and
                                    conditions</a></span>
                        </div>

                        <div class="submit-btn" onclick="signUp();">Sign Up</div>
                        <p>Already have an account? <span onclick="toggleBoxes('signIn')">Login</span></p>
                    </div>
                </div>
            </div>
            <div class="middle-line">
                <div class="v-line"></div>
                <p>or</p>
                <div class="v-line"></div>
            </div>
            <div class="sign-options">
                <div class="option-box">
                    <svg xmlns="http://www.w3.org/2000/svg" class="signIn-icons" viewBox="0 0 488 512">
                        <path
                            d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                    </svg>
                    <p>Continue with Google</p>
                </div>
                <div class="option-box">
                    <svg xmlns="http://www.w3.org/2000/svg" class="signIn-icons" viewBox="0 0 448 512">
                        <path
                            d="M0 93.7l183.6-25.3v177.4H0V93.7zm0 324.6l183.6 25.3V268.4H0v149.9zm203.8 28L448 480V268.4H203.8v177.9zm0-380.6v180.1H448V32L203.8 65.7z" />
                    </svg>
                    <p>Continue with Windows</p>
                </div>
                <div class="option-box">
                    <svg xmlns="http://www.w3.org/2000/svg" class="signIn-icons" viewBox="0 0 384 512">
                        <path
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z" />
                    </svg>
                    <p>Continue with Apple</p>
                </div>
                <span><a href="index.php">Return to Home Screen</a></span>
            </div>
        </div>
        <div class="policy-text">This site is a property of Sonarix Music.
            <a href="aboutUs.php#websitePrivacyPolicy">Privacy policy</a> and <a
                href="aboutUs.php#websiteTermsAndConditions">Terms and conditions</a>
            apply
        </div>
    </main>

    <?php include "footer.php" ?>

    <script src="./js/navbar.js"></script>
    <script src="./js/userLogin.js"></script>
</body>

</html>