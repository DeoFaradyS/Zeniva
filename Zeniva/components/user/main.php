<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/components/main.css">
    <title>Main</title>
</head>

<body>
    <!-- Hero -->
    <section class="hero">
        <img src="../asset/image/image-1.png" alt="interior" id="interior">
        <div class="box">
            <div class="text">
                <h1 id="top">High-Quality <span>Furniture</span></h1>
                <h2 id="bottom">at Affordable Prices</h2>
                <p>Upgrade your space with high-quality furniture at Zeniva. Discover a wide variety of styles, from
                    classic to modern, all at affordable prices. Find the perfect piece for your home at Zeniva.</p>
            </div>
            <button id="shopping">Shopping Now <img src="../asset/icon/arrow.png" alt="arrow"></button>
        </div>
    </section>

    <!-- featured -->
    <section class="featured">
        <div class="f-1">
            <img src="../asset/icon/truck.png" alt="truck" id="icon-1">
            <div class="text">
                <h2>Free Shipping</h2>
                <p>Order over $49.99</p>
            </div>
        </div>
        <div class="f-1">
            <img src="../asset/icon/return.png" alt="return" id="icon">
            <div class="text">
                <h2>90 Days Return</h2>
                <p>For good issues</p>
            </div>
        </div>
        <div class="f-1">
            <img src="../asset/icon/safety.png" alt="safety" id="icon">
            <div class="text">
                <h2>Secure Payment</h2>
                <p>100% secure and safe</p>
            </div>
        </div>
        <div class="f-1">
            <img src="../asset/icon/support.png" alt="support" id="icon">
            <div class="text">
                <h2>24/7 Support</h2>
                <p>Dedicated Support</p>
            </div>
        </div>
    </section>

    <!-- collections -->
    <section class="collections">
        <div class="heading">
            <h1>Our Collections</h1>
            <div class="line"></div>
        </div>
        <div class="container">
            <div class="tub-1">
                <div class="box-1 hover-animation">
                    <img src="../asset/image/light.png" alt="Light">
                    <h2>Light</h2>
                </div>
                <div class="box-2 hover-animation">
                    <h2>Decoration</h2>
                    <img src="../asset/image/clock.png" alt="clock">
                </div>
                <div class="box-3 hover-animation">
                    <h2>Outdoor Design</h2>
                    <img src="../asset/image/watering-can.png" alt="watering-can">
                </div>
            </div>
            <div class="tub-2">
                <div class="box-1 hover-animation">
                    <h2>Interior Design</h2>
                    <img src="../asset/image/chair.png" alt="chair">
                </div>
                <div class="box-2 hover-animation">
                    <h2>Office</h2>
                    <img src="../asset/image/office.png" alt="office-chair">
                </div>
                <div class="box-3 hover-animation">
                    <h2>Kitchen</h2>
                    <img src="../asset/image/kitchen.png" alt="Kitchen">
                </div>
            </div>
        </div>
    </section>

    <!-- product -->
    <section class="product">
        <div class="text">
            <div class="heading">
                <h1>Our Product</h1>
                <div class="line"></div>
            </div>
            <div class="category">
                <p>Top Rated</p>
                <p id="active">New Arrival</p>
                <p>Best Seller</p>
                <p>Featured</p>
            </div>
        </div>
        <div class="container">
            <?php
            $product = new Product();
            $products = $product->tampilSemua();

            // Jika jumlah produk lebih dari 4, hanya akan menampilkan 4 produk pertama
            for ($i = 0; $i < min(4, count($products)); $i++) {
                $p = $products[$i];
            ?>
                <div class="box">
                    <div class="img">
                        <img src="../asset/image/product-1.png" alt="lamp">
                    </div>
                    <div class="text">
                        <h2><?php echo $p['name']; ?></h2>
                        <p>$<?php echo $p['price']; ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="next">
                <img src="../asset/icon/arrow-next.png" alt="next">
            </div>
        </div>
    </section>

</body>

</html>