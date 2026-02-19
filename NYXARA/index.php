<?php
$pageTitle = "Nyxara Africa | African Technology & Digital Solutions";
$pageDescription = "Professional African technology company specializing in web development, mobile applications, agro-tech platforms, and business technology solutions.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
    <meta name="description" content="<?php echo $pageDescription; ?>">
    <meta name="keywords" content="Nyxara Africa, African tech company, web development Africa, mobile app development Africa, agro-tech solutions">
    <meta name="author" content="Nyxara Africa">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/x-icon" href="assets/image/NYXARA.png">
</head>
<body>
<a id="top"></a>

<?php include 'includes/header.php'; ?>

<section class="hero">
    <div class="container">
        <h1 class="hero-title">NYXARA AFRICA</h1>
        <p class="hero-description">Empowering Africa's Future through Innovation and Technology</p>
        <p class="hero-text">
            Nyxara Africa is a professional technology company specializing in web development,
            mobile application development, agro-tech systems, and business technology solutions.
            We help startups, SMEs, and organizations across Africa leverage technology to grow,
            operate efficiently, and compete globally.
        </p>
        <a href="contact.php" class="btn hero-btn">Get Started</a>
    </div>
</section>

<section class="Services">
    <div class="container">
        <h2>Our Core Services</h2>
        <p>We deliver innovative and scalable technology solutions tailored to the unique needs of African businesses, startups and agricultural businesses.</p>
        <div class="services-grid">
            <?php
            $services = [
                [
                    'title' => 'Web Development Services',
                    'description' => 'Professional, responsive, and SEO-optimized websites built to enhance brand credibility and drive conversions.',
                    'icon' => '🌐'
                ],
                [
                    'title' => 'Mobile App Development',
                    'description' => 'Secure and scalable Android and cross-platform mobile applications tailored to business needs.',
                    'icon' => '📱'
                ],
                [
                    'title' => 'Agro-Tech Solutions',
                    'description' => 'Digital platforms connecting farmers, agribusinesses, exporters, and markets to improve productivity.',
                    'icon' => '🌱'
                ],
                [
                    'title' => 'Business Technology Solutions',
                    'description' => 'Process automation, system integration, and IT consultancy to improve operational efficiency.',
                    'icon' => '💼'
                ]
            ];
            
            foreach ($services as $service) {
                echo '
                <div class="service-card">
                    <div class="service-icon">' . $service['icon'] . '</div>
                    <h3>' . $service['title'] . '</h3>
                    <p>' . $service['description'] . '</p>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="why-choose">
    <div class="container">
        <h2>Why Choose Nyxara Africa?</h2>
        <p>We are committed to empowering African businesses through technology. Our team of experts delivers innovative solutions that drive growth, efficiency, and competitiveness.</p>
        <div class="features-grid">
            <div class="feature-item">
                <h3>Africa-Focused Solutions</h3>
                <p>Digital solutions built specifically for African markets with global standards.</p>
            </div>
            <div class="feature-item">
                <h3>Experienced Professionals</h3>
                <p>Dedicated technology professionals with years of industry experience.</p>
            </div>
            <div class="feature-item">
                <h3>Client-Centric Approach</h3>
                <p>We focus on delivering measurable results and business value.</p>
            </div>
            <div class="feature-item">
                <h3>Affordable & Reliable</h3>
                <p>Competitive pricing with long-term technical support included.</p>
            </div>
        </div>
    </div>
</section>

<section class="mission-vision">
    <div class="container">
        <div class="mv-grid">
            <div class="mv-item">
                <h2>Our Mission</h2>
                <p>To empower African businesses and organizations through innovative, secure and scalable digital technology solutions.</p>
            </div>
            <div class="mv-item">
                <h2>Our Vision</h2>
                <p>To be a trusted African technology partner driving digital transformation across industries.</p>
            </div>
        </div>
        <div class="text-center" style="margin-top: 2rem;">
            <a href="contact.php" class="btn">Contact Us</a>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<button id="backToTop" title="Go to top">
    <a href="#top" class="back-to-top">↑</a>
</button>

</body>
</html>