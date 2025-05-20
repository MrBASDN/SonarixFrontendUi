<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/adminCommon.css">
</head>

<body>

    <?php include "adminNavbar.php" ?>

    <div id="dashboardMainContainer">
        <div class="dashboard-container">
            <div class="filter-options">
                <label for="timeFilter">Filter by:</label>
                <select id="timeFilter" onchange="updateChart()">
                    <option value="all">All Time</option>
                    <option value="year">This Year</option>
                    <option value="month">This Month</option>
                    <option value="week">This Week</option>
                    <option value="day">Today</option>
                </select>
            </div>
            <div class="cards">
                <div class="card">
                    <?php include "../svg/moneyIcon.svg" ?>
                    <h3>Total Sales</h3>
                    <p id="totalSales">$10,000</p>
                </div>
                <div class="card">
                    <?php include "../svg/reviewMessages.svg" ?>
                    <h3>Total Reviews</h3>
                    <p id="totalReviews">500</p>
                </div>
                <div class="card">
                    <?php include "../svg/packagesSent.svg" ?>
                    <h3>Total Purchases</h3>
                    <p id="totalPurchases">1,200</p>
                </div>
            </div>

            <div class="chart-container">
                <canvas id="salesChart" width="800px" height="400px"></canvas>
            </div>
        </div>

        <div class="promotionContainer">
            <div class="title">
                Ongoing Promotions
            </div>
            <div id="addPromo">&plus; add</div>

            <div id="promotionList">
                <div class="listHeader">
                    <div class="column">Product ID</div>
                    <div class="column">Product Name</div>
                    <div class="column">From</div>
                    <div class="column">To</div>
                    <div class="column">Discount</div>
                </div>
                <div class="listItem">
                    <div class="column">P001</div>
                    <div class="column">Acoustic Guitar
                    </div>
                    <div class="column">2025-03-01</div>
                    <div class="column">2025-03-31</div>
                    <div class="column">$50 Off</div>
                </div>
                <div class="listItem">
                    <div class="column">P002</div>
                    <div class="column">Electric Guitar</div>
                    <div class="column">2025-03-05</div>
                    <div class="column">2025-04-05</div>
                    <div class="column">$50 Off</div>
                </div>
                <div class="listItem">
                    <div class="column">P003</div>
                    <div class="column">Guitar Pedal</div>
                    <div class="column">2025-03-10</div>
                    <div class="column">2025-03-20</div>
                    <div class="column">15% Off</div>
                </div>
                <div class="listItem">
                    <div class="column">P003</div>
                    <div class="column">Guitar Pedal</div>
                    <div class="column">2025-03-10</div>
                    <div class="column">2025-03-20</div>
                    <div class="column">15% Off</div>
                </div>
                <div class="listItem">
                    <div class="column">P003</div>
                    <div class="column">Guitar Pedal</div>
                    <div class="column">2025-03-10</div>
                    <div class="column">2025-03-20</div>
                    <div class="column">15% Off</div>
                </div>
                <div class="listItem">
                    <div class="column">P003</div>
                    <div class="column">Guitar Pedal</div>
                    <div class="column">2025-03-10</div>
                    <div class="column">2025-03-20</div>
                    <div class="column">15% Off</div>
                </div>
            </div>

            <div id="productModal" class="modal hidden">
                <div class="modal-content">
                    <h2 id="modalTitle">Edit Product</h2>
                    <form id="productForm">
                        <label>
                            Product Code
                            <input type="text" name="code" required />
                        </label>

                        <label>
                            Name
                            <input type="text" name="name" disabled required />
                        </label>

                        <label>
                            Start Date
                            <input type="date" name="startDate" required />
                        </label>

                        <label>
                            End Date
                            <input type="date" name="endDate" required />
                        </label>

                        <label>
                            Offer
                            <div class="offer-group">
                                <select name="offerType">
                                    <option value="$">$</option>
                                    <option value="%">%</option>
                                </select>
                                <input type="text" name="offerValue" placeholder="Amount" />
                            </div>
                        </label>

                        <div class="modal-actions">
                            <button type="submit">Save</button>
                            <button type="button" onclick="closeModal()">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="../js/admin.js"></script>
    <script>

        function clearSelection() {
            document.querySelectorAll('.listItem.selected').forEach(selected => {
                selected.classList.remove('selected');
            });
        }

        document.querySelectorAll('.listItem').forEach(row => {
            row.addEventListener('dblclick', function () {
                const isSelected = row.classList.contains('selected');

                clearSelection();

                if (!isSelected) {
                    row.classList.add('selected');
                }
            });
        });

        document.addEventListener('click', function (event) {
            if (!document.getElementById('promotionList').contains(event.target)) {
                clearSelection();
            }
        });

    </script>
</body>

</html>