<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/adminCommon.css">
</head>

<?php include "adminNavbar.php" ?>

<div id="orderMainContainer">

    <form action="" method="post" id="searchContainer">
        <input type="search" placeholder="search by Id" name="orderSearch" id="searchField">
        <select name="orderStatus" id="orderStatus">
            <option value="select">select</option>
            <option value="new">New</option>
            <option value="pending">Pending</option>
            <option value="shipped">Shipped</option>
            <option value="delivered">Delivered</option>
            <option value="refunded">Refunded</option>
        </select>
        <input type="date" name="from" id="fromDate">
        <input type="date" name="to" id="toDate">
        <select name="sortFilter" id="sortFilter">
            <option value="select">Sort By</option>
            <option value="newDate">newer orders first</option>
            <option value="oldDate">newer orders last</option>
            <option value="highPrice">expensive orders first</option>
            <option value="lowPrice">expensive orders last</option>
        </select>
        <input type="submit" value="searchData">
    </form>

    <div id="orderTable">
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
            </div>
            <div class="dataRow">
                <div class="orderInfo">
                    <span>12045_61</span>
                    <span>2024/10/02</span>
                    <span>Delivered</span>
                    <span>Lkr.25000.00</span>
                </div>
            </div>
            <div class="dataRow">
                <div class="orderInfo">
                    <span>12045_61</span>
                    <span>2024/10/02</span>
                    <span>Delivered</span>
                    <span>Lkr.25000.00</span>
                </div>
            </div>
            <div class="dataRow">
                <div class="orderInfo">
                    <span>12045_61</span>
                    <span>2024/10/02</span>
                    <span>Delivered</span>
                    <span>Lkr.25000.00</span>
                </div>
            </div>
            <div class="dataRow">
                <div class="orderInfo">
                    <span>12045_61</span>
                    <span>2024/10/02</span>
                    <span>Delivered</span>
                    <span>Lkr.25000.00</span>
                </div>
            </div>
            <div class="dataRow">
                <div class="orderInfo">
                    <span>12045_61</span>
                    <span>2024/10/02</span>
                    <span>Delivered</span>
                    <span>Lkr.25000.00</span>
                </div>
            </div>
        </div>
    </div>

    <div class="order-popup-overlay" id="orderPopup" style="display: none;">
        <div class="order-popup">
            <div class="order-header">
                <h3>View Order</h3>
                <button onclick="toggleOrderPopup(false)">✕</button>
            </div>

            <div class="order-details">
                <label>Order ID <span>12045_61</span></label>
                <label>Date <span>2025/10/15</span></label>
                <label>Name <span>Sudheera D. Navaratne</span></label>
                <label>Mobile <span>0713541625</span></label>
                <label>Status
                    <select>
                        <option>Pending</option>
                        <option>Shipped</option>
                        <option selected>Delivered</option>
                        <option>Refunded</option>
                    </select>
                </label>
                <label>Total <span>Lkr.25000.00</span></label>
            </div>

            <div class="product-list">
                <div class="product">
                    <label>Product Name <span>YX-70 Electric Guitar</span></label>
                    <label>Product ID <span>P001</span></label>
                    <label>Price <span>Lkr.15000</span></label>
                    <label class="checkbox-label">
                        preparation status <input type="checkbox" checked />
                    </label>
                </div>

                <div class="product">
                    <label>Product Name <span>Another Product</span></label>
                    <label>Product ID <span>P002</span></label>
                    <label>Price <span>Lkr.10000</span></label>
                    <label class="checkbox-label">
                        preparation status <input type="checkbox" />
                    </label>
                </div>
            </div>

            <div class="actions">
                <button class="save">Save</button>
                <button class="cancel" onclick="toggleOrderPopup(false)">Cancel</button>
            </div>
        </div>
    </div>

    <nav id="pagination">
        <button class="page-btn">&laquo;</button>
        <button class="page-btn active">1</button>
        <button class="page-btn">2</button>
        <button class="page-btn">3</button>
        <button class="page-btn">&raquo;</button>
    </nav>
</div>



<script>

    function clearSelection() {
        document.querySelectorAll('.orderInfo.selected').forEach(selected => {
            selected.classList.remove('selected');
        });
    }

    document.querySelectorAll('.dataRow').forEach(row => {
        row.addEventListener('dblclick', function () {
            const infoContainer = this.querySelector('.orderInfo');
            const isSelected = infoContainer.classList.contains('selected');

            clearSelection();

            if (!isSelected) {
                infoContainer.classList.add('selected');
                toggleOrderPopup(true);
            }
        });
    });

    document.addEventListener('click', function (event) {
        if (!document.getElementById('orderTable').contains(event.target)) {
            clearSelection();
        }
    });

    function toggleOrderPopup(show) {
        const popup = document.getElementById('orderPopup');
        popup.style.display = show ? 'flex' : 'none';
    }
</script>
<script src="../js/admin.js"></script>
</body>

</html>