<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Product Management</title>
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="../css/adminCommon.css">
</head>

<body>

    <?php include "adminNavbar.php" ?>

    <div id="productMainContainer">

        <div class="toolbar">
            <div class="search-bar">
                <input type="text" id="search" placeholder="Search products..." />
                <button onclick="searchProduct()">Search</button>
            </div>

            <div class="action-buttons">
                <button onclick="openAddModal()">Add Product</button>
                <button onclick="updateProduct()" id="updateBtn" disabled>Update Product</button>
                <button onclick="deleteProduct()" id="deleteBtn" disabled>Delete Product</button>
            </div>
        </div>

        <div class="product-table">
            <div class="product-header">
                <div>ID</div>
                <div>Name</div>
                <div>Brand</div>
                <div>Price</div>
                <div>Stock</div>
                <div>Type</div>
                <div>Color</div>
            </div>

            <div class="product-row">
                <div>#101</div>
                <div>YX-70 Electric Guitar</div>
                <div>Yamaha</div>
                <div>$250.00</div>
                <div>14</div>
                <div>Electric</div>
                <div>red</div>
            </div>
            <div class="product-row">
                <div>#101</div>
                <div>YX-70 Electric Guitar</div>
                <div>Yamaha</div>
                <div>$250.00</div>
                <div>14</div>
                <div>Electric</div>
                <div>red</div>
            </div>
            <div class="product-row">
                <div>#101</div>
                <div>YX-70 Electric Guitar</div>
                <div>Yamaha</div>
                <div>$250.00</div>
                <div>14</div>
                <div>Electric</div>
                <div>red</div>
            </div>
            <div class="product-row">
                <div>#101</div>
                <div>YX-70 Electric Guitar</div>
                <div>Yamaha</div>
                <div>$250.00</div>
                <div>14</div>
                <div>Electric</div>
                <div>red</div>
            </div>
            <div class="product-row">
                <div>#101</div>
                <div>YX-70 Electric Guitar</div>
                <div>Yamaha</div>
                <div>$250.00</div>
                <div>14</div>
                <div>Electric</div>
                <div>red</div>
            </div>

        </div>
        <div class="popup-overlay" id="productPopup" style="display: none;">
            <div class="popup">
                <div class="popup-header">
                    <h3>Edit Product</h3>
                    <button onclick="toggleProductPopup(false)">✕</button>
                </div>

                <div class="popup-body">
                    <label>Product Name: <input type="text" /></label>
                    <label>Brand:
                        <select>
                            <option>Red</option>
                            <option>Black</option>
                            <option>White</option>
                            <option>Blue</option>
                            <option>Natural Wood</option>
                        </select>
                    </label>
                    <label>Price (LKR): <input type="text" /></label>
                    <label>Warranty (Months): <input type="text" /></label>
                    <label>Color:
                        <select>
                            <option>Red</option>
                            <option>Black</option>
                            <option>White</option>
                            <option>Blue</option>
                            <option>Natural Wood</option>
                        </select>
                    </label>
                    <label>Stock: <input type="text" /></label>
                    <label>Instrument Type:
                        <select>
                            <option>String</option>
                            <option>Electric</option>
                            <option>Percussion</option>
                            <option>Wind</option>
                            <option>Keyboard</option>
                        </select>
                    </label>
                    <label>Description:
                        <textarea rows="3"></textarea>
                    </label>

                    <div class="qualities">
                        <label>Quality 1: <input type="text" /></label>
                        <label>Quality 2: <input type="text" /></label>
                        <label>Quality 3: <input type="text" /></label>
                    </div>
                    <div class="image-upload">
                        <label for="productImages">Upload Images (max 5):</label>
                        <input type="file" id="productImages" accept="image/*" multiple />
                        <div class="preview-container" id="imagePreview"></div>
                    </div>
                </div>

                <div class="popup-actions">
                    <button class="save">Save</button>
                    <button class="cancel" onclick="toggleProductPopup(false)">Cancel</button>
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
        const input = document.getElementById('productImages');
        const preview = document.getElementById('imagePreview');

        input.addEventListener('change', () => {
            preview.innerHTML = ''; // clear previous
            const files = Array.from(input.files).slice(0, 5); // limit to 5

            files.forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    preview.appendChild(img);
                };
                reader.readAsDataURL(file);
            });
        });

    </script>
    <script src="../js/admin.js"></script>
</body>

</html>