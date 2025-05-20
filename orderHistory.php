<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order History</title>
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/accountNavbar.css">
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/orderHistory.css">
</head>

<body>

    <?php include "navbar.php" ?>
    <main>

        <h1>Orders History</h1>
        <?php include "accountNavbar.php" ?>
        <div class="orderContainer">
            <div class="orderTable">
                <div class="tableHeader">
                    <span>Order Id</span>
                    <span>Date</span>
                    <span>Status</span>
                    <span>price</span>
                </div>
                <div class="tableData">
                    <div class="dataRow">
                        <div class="orderInfo">
                            <span>12045_61</span>
                            <span>2024/10/02</span>
                            <span>Delivered</span>
                            <span>Lkr.25000.00</span>
                        </div>
                        <div class="infoContainer ">
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                        </div>
                    </div>
                    <div class="dataRow">
                        <div class="orderInfo">
                            <span>12045_61</span>
                            <span>2024/10/02</span>
                            <span>Delivered</span>
                            <span>Lkr.25000.00</span>
                        </div>
                        <div class="infoContainer ">
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                        </div>
                    </div>
                    <div class="dataRow">
                        <div class="orderInfo">
                            <span>12045_61</span>
                            <span>2024/10/02</span>
                            <span>Delivered</span>
                            <span>Lkr.25000.00</span>
                        </div>
                        <div class="infoContainer ">
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                        </div>
                    </div>
                    <div class="dataRow">
                        <div class="orderInfo">
                            <span>12045_61</span>
                            <span>2024/10/02</span>
                            <span>Delivered</span>
                            <span>Lkr.25000.00</span>
                        </div>
                        <div class="infoContainer ">
                            <div class="product">
                                <span>Product Name : This is my product that I bought with money</span>
                                <span>Product Id : 15241AB</span>
                                <span>Price : Lkr.15000</span>
                                <span>Status : Refunded</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



    </main>
    <?php include "footer.php" ?>

    <script src="./js/navbar.js"></script>
    <script src="./js/cart.js"></script>
    <script>
        document.querySelectorAll('.dataRow').forEach(row => {
            row.addEventListener('click', function () {
                const infoContainer = this.querySelector('.infoContainer');
                infoContainer.classList.toggle('visible');
            });
        });
    </script>

</body>

</html>