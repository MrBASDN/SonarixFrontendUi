<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/productCard.css">
    <link rel="stylesheet" href="./css/advanceSearch.css">
</head>

<body>
    <?php include 'navbar.php'; ?>
    <main>
        <div class="mainSearchContainer">
            <div class="searchContainer">
                <input id="searchBar" type="search" placeholder="What are you looking for?" class="search-input" />
                <div class="buttonGroup">
                    <div id="searchButton" class="button">
                        <span>Search</span>
                        <?php include "./svg/icons/search-icon.svg" ?>
                    </div>
                    <div onclick="toggleFilters()" id="filterButton" class="button">
                        <span>Filter</span>
                        <?php include "./svg/icons/arrowhead.svg" ?>
                    </div>
                </div>
            </div>
            <div id="filterContainer" data-menu="closed">
                <div class="filterContainers">
                    <div class="prizeContainer">
                        <h3>Price range</h3>
                        <div class="prize">
                            <span>MINIMUM</span>
                            <div class="currency-input">
                                <input min="0" type="text" name="min-prize" placeholder="0.00" maxlength="10">
                            </div>
                        </div>
                        <div class="prize">
                            <span>MAXIMUM</span>
                            <div class="currency-input">
                                <input min="0" type="text" name="max-prize" placeholder="0.00" maxlength="10">
                            </div>
                        </div>
                    </div>
                </div>


                <div class="filterContainers">
                    <h3>Instrument Color</h3>
                    <div class="colorContainer">
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="red" style="background-color:#E63946;">
                            </div>
                            <span class="closeSelected">Red</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="blue" style="background-color:#4285F4;">
                            </div>
                            <span class="closeSelected">Blue</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="yellow" style="background-color:#F1C232;">
                            </div>
                            <span class="closeSelected">Yellow</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="green" style="background-color:#34A853;">
                            </div>
                            <span class="closeSelected">Green</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="orange" style="background-color:#D65A1F;">
                            </div>
                            <span class="closeSelected">Orange</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="purple" style="background-color:#9C89B8;">
                            </div>
                            <span class="closeSelected">Purple</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="black" style="background-color:#000000;">
                            </div>
                            <span class="closeSelected">Black</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="white" style="background-color:#FAF9F6;">
                            </div>
                            <span class="closeSelected">White</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <div class="color selectable" data-filter-color="other"
                                style="background: conic-gradient(#E63946, #F1C232, #34A853, #4285F4, #E63946);"></div>
                            <span class="closeSelected">Other</span>
                        </div>
                    </div>
                </div>



                <div class="filterContainers">
                    <h3>Brand</h3>
                    <div class="brandContainer">
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemBrand="Yamaha">Yamaha</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemBrand="Fender">Fender</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemBrand="Gibson">Gibson</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemBrand="Sony">Sony</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemBrand="Martin&Co">Martin & Corporation </span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemBrand="Taylor">Taylor</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                    </div>
                </div>
                <div class="filterContainers">
                    <h3>Instrument Categories</h3>
                    <div class="categoryContainer">
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable" data-itemType="percussion">Percussion</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable">String</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable">Woodwind</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable">Keyboard</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable">Electric</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                        <div class="selection-container" onclick="toggleSelection(this)" data-selected="false">
                            <span class="selectable">Other</span>
                            <span class="closeSelected">&#10006;</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainProductContainer">

            <?php for ($i = 0; $i < 10; $i++) { ?>
                <div class="product-card">
                    <?php include "svg/icons/new-icon.svg" ?>
                    <div class="image-container">
                        <img src="img/guitar.png" alt="Product Image" />
                    </div>
                    <div class="item-info">
                        <span title="perl drudfnlskdafjlk">Perl Roadshow Drum 5 Piece Set fkdsjflksdajfkdsajfsdafjslk</span>
                        <span>String - Guitar</span>
                        <span class="rating">
                            4.9/5 &starf; (101 rating)
                        </span>
                        <div class="price">
                            <span>lkr&MediumSpace;15000 /-</span>
                            <span>lkr&MediumSpace;15000 /-</span>
                        </div>
                        <div class="cart-btn">
                            <?php include "./svg/icons/add-to-cart.svg" ?>
                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </main>
    <?php include 'footer.php'; ?>

    <script src="./js/navbar.js"></script>
    <script src="./js/cart.js"></script>
    <script src="./js/advanceSearch.js"></script>
</body>

</html>