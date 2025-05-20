<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/accountNavbar.css">
    <link rel="stylesheet" href="./css/reviewPage.css">
    <link rel="stylesheet" href="./css/common.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <main>
        <h1>Your Reviews</h1>

        <?php include "accountNavbar.php" ?>
        
        <div class="reviewContainer">
            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="review">
                    <span>Product Id : 1015AB</span>
                    <span>2024/05/23</span>
                    <p>Really solid build, but the price is a bit steep. Overall, a great product!</p>
                    <div class="review-header">
                        <span class="stars-display">★★★★☆</span>
                        <div class="buttons">
                            <button class="like-btn"><span>👍</span><span class="like-count">10</span></button>
                            <button class="dislike-btn"><span>👎</span><span class="dislike-count">1</span></button>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

    </main>
    <?php include "footer.php" ?>
    <script src="./js/navbar.js"></script>
    <script src="./js/cart.js"></script>
</body>

</html>