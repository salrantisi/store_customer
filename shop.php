<?php
include 'include/header.php';
include 'include/db.php';
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $products = $result->fetch_all(MYSQLI_ASSOC);
} else {
    $products = [];
}

?>
<main>
        <!-- breadcrumb area start -->
        <div class="breadcrumb-area bg-img" data-bg="assets/img/banner/breadcrumb-banner.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-wrap text-center">
                            <nav aria-label="breadcrumb">
                                <h1 class="breadcrumb-title">shop</h1>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">shop</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb area end -->

        <!-- page main wrapper start -->
        <div class="shop-main-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <!-- sidebar area start -->
                    <div class="col-lg-3 order-2 order-lg-1">
                        <div class="sidebar-wrapper">
                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>Categories</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="color-list">
                                        <li><a href="#">Mens <span>(10)</span></a></li>
                                        <li><a href="#">Womens <span>(05)</span></a></li>
                                        <li><a href="#">Sports <span>(15)</span></a></li>
                                        <li><a href="#">Fabric <span>(12)</span></a></li>
                                        <li><a href="#">Leather <span>(20)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>filter by price</h3>
                                </div>
                                <div class="sidebar-body">
                                    <div class="price-range-wrap">
                                        <div class="price-range" data-min="20" data-max="400"></div>
                                        <div class="range-slider">
                                            <form action="#">
                                                <div class="price-input">
                                                    <label for="amount">Price: </label>
                                                    <input type="text" id="amount">
                                                </div>
                                                <button class="filter-btn">filter</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>color</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="color-list">
                                        <li><a href="#">gold <span>(05)</span></a></li>
                                        <li><a href="#">green <span>(12)</span></a></li>
                                        <li><a href="#">blue <span>(14)</span></a></li>
                                        <li><a href="#">white <span>(20)</span></a></li>
                                        <li><a href="#">red <span>(08)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->

                            <!-- single sidebar start -->
                            <div class="sidebar-single">
                                <div class="sidebar-title">
                                    <h3>size</h3>
                                </div>
                                <div class="sidebar-body">
                                    <ul class="size-list">
                                        <li><a href="#">L <span>(05)</span></a></li>
                                        <li><a href="#">M <span>(06)</span></a></li>
                                        <li><a href="#">S <span>(02)</span></a></li>
                                        <li><a href="#">XL <span>(01)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- single sidebar end -->
                        </div>
                    </div>
                    <!-- sidebar area end -->

                    <!-- shop main wrapper start -->
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="shop-product-wrapper">
                            <!-- shop product top wrap start -->
                            <div class="shop-top-bar">
                                <div class="row">
                                    <div class="col-xl-5 col-lg-4 col-md-3 order-2 order-md-1">
                                        <div class="top-bar-left">
                                            <div class="product-view-mode">
                                                <a class="active" href="#" data-target="grid-view"><i class="fa fa-th"></i></a>
                                                <a href="#" data-target="list-view"><i class="fa fa-list"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-7 col-lg-8 col-md-9 order-1 order-md-2">
                                        <div class="top-bar-right">
                                            <div class="product-short">
                                                <p>Sort By : </p>
                                                <select class="nice-select" name="sortby">
                                                    <option value="trending">Relevance</option>
                                                    <option value="sales">Name (A - Z)</option>
                                                    <option value="sales">Name (Z - A)</option>
                                                    <option value="rating">Price (Low &gt; High)</option>
                                                    <option value="date">Rating (Lowest)</option>
                                                    <option value="price-asc">Model (A - Z)</option>
                                                    <option value="price-asc">Model (Z - A)</option>
                                                </select>
                                            </div>
                                            <div class="product-amount">
                                                <p>Showing 1–16 of 21 results</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- shop product top wrap start -->

                            <!-- product item list start -->
                            <div class="shop-product-wrap grid-view row mbn-50">
                            <?php foreach ($products as $product): ?>
                                <div class="col-lg-4 col-sm-6">
                                    <!-- product grid item start -->
                                    <div class="product-item mb-53">
                                        <div class="product-thumb">
                                        <a href="product-details.php?id=<?php echo $product['id']; ?>">
                                            <img src="<?php echo $path.$product['image']; ?>" alt="<?php echo $product['name']; ?>">
                                        </a>
                                        </div>
                                        <div class="product-content">
                                            <h5 class="product-name">
                                            <a href="product-details.php?id=<?php echo $product['id']; ?>">
                                                <?php echo $product['name']; ?>
                                            </a>
                                            </h5>
                                            <div class="price-box">
                                            <span class="price-regular">$<?php echo $product['price']; ?></span>
                                            </div>
                                            <div class="product-action-link">
                                                <a href="#" data-toggle="tooltip" title="Wishlist"><i class="ion-android-favorite-outline"></i></a>
                                                <a href="#" data-toggle="tooltip" title="Add To Cart"><i class="ion-bag"></i></a>
                                                <a href="#" data-toggle="modal" data-target="#quick_view"> <span data-toggle="tooltip"
                                                    title="Quick View"><i class="ion-ios-eye-outline"></i></span> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- product grid item end -->
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <!-- product item list end -->

                            <!-- start pagination area -->
                            <div class="paginatoin-area text-center mt-45">
                                <ul class="pagination-box">
                                    <li><a class="Previous" href="#"><i class="ion-ios-arrow-left"></i></a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="Next" href="#"><i class="ion-ios-arrow-right"></i></a></li>
                                </ul>
                            </div>
                            <!-- end pagination area -->
                        </div>
                    </div>
                    <!-- shop main wrapper end -->
                </div>
            </div>
        </div>
        <!-- page main wrapper end -->
    </main>
<?php
include 'include/footer.php'; 
?>