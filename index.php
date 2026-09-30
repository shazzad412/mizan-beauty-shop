<?php
$shopName = "Mizan Beauty Shop";
$phone = "017XXXXXXXX";
$whatsappNumber = "017XXXXXXXX";
$address = "Dhaka, Bangladesh";

$whatsappLink = "https://wa.me/880" . preg_replace('/\D+/', '', $whatsappNumber) . "?text=" . urlencode("Assalamualaikum, I want to order a beauty product from Mizan Beauty Shop.");

$products = [
    [
        "name" => "Sugondhi Face Cream",
        "price" => "৳ 550",
        "image" => "https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=900&q=80",
        "desc" => "Smooth and brightening face cream for daily care."
    ],
    [
        "name" => "Sugondhi Lotion",
        "price" => "৳ 420",
        "image" => "https://images.unsplash.com/photo-1571781926291-c477ebfd024b?auto=format&fit=crop&w=900&q=80",
        "desc" => "Keeps your skin soft, fresh and hydrated."
    ],
    [
        "name" => "Sugondhi Night Cream",
        "price" => "৳ 620",
        "image" => "https://images.unsplash.com/photo-1556228578-8c89e6adf883?auto=format&fit=crop&w=900&q=80",
        "desc" => "Nourishing night cream for healthy skin repair."
    ],
    [
        "name" => "Sugondhi Sunscreen",
        "price" => "৳ 680",
        "image" => "https://images.unsplash.com/photo-1515377905703-c4788e51af15?auto=format&fit=crop&w=900&q=80",
        "desc" => "Daily sun protection to keep skin safe."
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mizan Beauty Shop - premium beauty and skincare products">
    <title><?php echo $shopName; ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="topbar">
        <div class="container nav">
            <div class="logo"><?php echo $shopName; ?></div>
            <nav>
                <a href="#home">Home</a>
                <a href="#products">Products</a>
                <a href="#about">About</a>
                <a href="#contact">Contact</a>
            </nav>
            <a class="btn" href="<?php echo $whatsappLink; ?>" target="_blank" rel="noreferrer">Order Now</a>
        </div>
    </header>

    <main>
        <section id="home" class="hero">
            <div class="container hero-inner">
                <div class="hero-text">
                    <span class="tag">Beauty & skincare essentials</span>
                    <h1>Premium beauty products for glowing skin</h1>
                    <p>
                        Discover soft, fresh, and nourishing beauty care products from Mizan Beauty Shop.
                    </p>
                    <div class="hero-actions">
                        <a class="btn primary" href="#products">View Products</a>
                        <a class="btn secondary" href="<?php echo $whatsappLink; ?>" target="_blank" rel="noreferrer">WhatsApp Order</a>
                    </div>
                </div>

                <div class="hero-card">
                    <img src="https://images.unsplash.com/photo-1522335789203-aabd1fc54bc9?auto=format&fit=crop&w=900&q=80" alt="Beauty product">
                    <div class="card-box">
                        <strong>Special Offer</strong>
                        <p>Face Cream + Lotion Combo</p>
                        <span>৳ 950</span>
                    </div>
                </div>
            </div>
        </section>

        <section id="products" class="products">
            <div class="container">
                <div class="section-title">
                    <span>Our Products</span>
                    <h2>Best beauty essentials</h2>
                </div>

                <div class="product-grid">
                    <?php foreach ($products as $product): ?>
                        <article class="product-card">
                            <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
                            <div class="content">
                                <h3><?php echo $product['name']; ?></h3>
                                <p><?php echo $product['desc']; ?></p>
                                <div class="meta">
                                    <strong><?php echo $product['price']; ?></strong>
                                    <a href="<?php echo $whatsappLink; ?>" target="_blank" rel="noreferrer">Order</a>
                                </div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container about-box">
                <div>
                    <span>About Us</span>
                    <h2>Trusted care for beauty and health</h2>
                </div>
                <p>
                    Mizan Beauty Shop brings quality beauty and skincare products that help your skin stay soft, healthy and radiant.
                    We believe in simple care that makes beauty feel natural and confident.
                </p>
            </div>
        </section>

        <section id="contact" class="contact">
            <div class="container contact-box">
                <div class="contact-text">
                    <span>Contact</span>
                    <h2>Call or WhatsApp to order now</h2>
                </div>
                <div class="contact-info">
                    <p>Phone: <?php echo $phone; ?></p>
                    <p>WhatsApp: <?php echo $whatsappNumber; ?></p>
                    <p>Address: <?php echo $address; ?></p>
                    <a class="btn primary" href="<?php echo $whatsappLink; ?>" target="_blank" rel="noreferrer">Message on WhatsApp</a>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <p>© <?php echo date('Y'); ?> <?php echo $shopName; ?>. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
