<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/accountNavbar.css">
    <link rel="stylesheet" href="./css/profile.css">
</head>

<body>

    <?php include 'navbar.php' ?>

    <main>

        <h1>My Account</h1>

        <?php include 'accountNavbar.php' ?>

        <section class="profileSettings">
            <div class="inputSection">
                <h2>Account Details</h2>
                <div class="avatarSelection">
                    <div class="textContainer">
                        <p>Avatar</p>
                        <span>change your avatar</span>
                    </div>
                    <div class="imageContainer" onclick="alert('fuck you')">
                        <img src="./img/avatars/avt-00.png" alt="">
                        <div class="editImage">
                            <?php include "./svg/icons/edit-icon.svg" ?>
                        </div>
                    </div>
                </div>
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
                    <p>User Name</p>
                    <input type="text">
                    <span style="margin-top:5px;color:var(--secondary-text-color);font-size:14px;">*This will be the
                        name others users
                        will be seeing you as on the website</span>
                </div>
                <div>
                    <p>Email</p>
                    <input type="text">
                </div>
                <div>
                    <p>Home Address</p>
                    <input type="text">
                </div>
                <div class="addressSection">
                    <div>
                        <p>Contact Number</p>
                        <input type="text">
                    </div>
                    <div>
                        <p>Postal Code</p>
                        <input type="text">
                    </div>
                </div>
            </div>
            <div class="inputSection passwordSection">

                <h2>Password</h2>

                <div class="oldPassword">
                    <p>Old Password</p>
                    <input type="password">
                    <span onclick="alert('fuck you')">Forgot Password?</span>
                </div>

                <div>
                    <p>New Password</p>
                    <input type="password">
                </div>

                <div>
                    <p>Repeat New Password</p>
                    <input type="password">
                </div>
            </div>
            <div class="saveChangesBtn"> Save Changes </div>
        </section>

        <div data-menu="closed" id="profilePictureContainer">
            <div class="mainContainer">
                <div id="closeProfilePicture" onload="closePopup()">
                   &Cross;
                </div>
                <div class="pictureContainer">
                    <?php for ($i = 0; $i < 6; $i++) { ?>
                        <div class="imageContainer">
                            <img src="./img/avatars/avt-00.png" alt="Profile Picture">
                        </div>
                        <div class="imageContainer">
                            <img src="./img/avatars/avt-01.png" alt="Profile Picture">
                        </div>
                        <div class="imageContainer">
                            <img src="./img/avatars/avt-02.png" alt="Profile Picture">
                        </div>
                        <div class="imageContainer">
                            <img src="./img/avatars/avt-03.png" alt="Profile Picture">
                        </div>
                        <div class="imageContainer">
                            <img src="./img/avatars/avt-04.png" alt="Profile Picture">
                        </div>
                        <div class="imageContainer">
                            <img src="./img/avatars/avt-05.png" alt="Profile Picture">
                        </div>
                    <?php } ?>
                </div>
                <div id="selectedProfileImage">Done</div>
            </div>
        </div>



    </main>

    <?php include 'footer.php' ?>

    <script src="./js/navbar.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>