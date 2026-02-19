<?php
$pageTitle = "About Nyxara Africa | African Technology & Digital Solutions Company";
$pageDescription = "Learn about Nyxara Africa, a professional African technology company delivering web development, mobile applications, agro-tech platforms, and business technology solutions across Africa.";
?>
<?php include 'includes/header.php'; ?>

<section class="about-hero">
    <div class="container">
        <h1>About Nyxara Africa</h1>
        <p>
            Nyxara Africa is a professional African technology company delivering high-quality
            digital solutions for startups, SMEs, and organizations across Africa.
        </p>
    </div>
</section>

<section class="about-mission">
    <div class="container">
        <h2>Our Mission</h2>
        <p>
            To empower African businesses and organizations through innovative,
            secure, and scalable digital technology solutions.
        </p>

        <h2>Our Vision</h2>
        <p>
            To become a leading African technology brand shaping the digital future
            of businesses and communities.
        </p>
    </div>
</section>

<section class="about-story">
    <div class="container">
        <h2>Our Story</h2>
        <div class="story-content">
            <p>
                Founded with a vision to bridge the digital divide in Africa, Nyxara Africa emerged from
                the recognition that African businesses need technology solutions that understand their
                unique challenges and opportunities.
            </p>
            <p>
                We combine global technology standards with deep local market understanding to deliver
                solutions that are not only technically excellent but also culturally and contextually
                relevant.
            </p>
        </div>
    </div>
</section>

<section class="about-why">
    <div class="container">
        <h2>Why Choose Nyxara Africa</h2>
        <div class="reasons-grid">
            <?php
            $reasons = [
                [
                    'title' => 'Africa-Focused Solutions',
                    'description' => 'Digital solutions built specifically for African markets with global standards.'
                ],
                [
                    'title' => 'Reliable & Secure',
                    'description' => 'Enterprise-grade security and reliable systems that you can depend on.'
                ],
                [
                    'title' => 'Client-Centric Approach',
                    'description' => 'We work closely with you to ensure measurable business results.'
                ],
                [
                    'title' => 'Affordable Excellence',
                    'description' => 'High-quality solutions at competitive prices with long-term support.'
                ]
            ];
            
            foreach ($reasons as $reason) {
                echo '
                <div class="reason-card">
                    <h3>' . $reason['title'] . '</h3>
                    <p>' . $reason['description'] . '</p>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="about-values">
    <div class="container">
        <h2>Our Core Values</h2>
        <div class="values-grid">
            <?php
            $values = [
                ['name' => 'Innovation', 'desc' => 'Pushing boundaries with creative solutions'],
                ['name' => 'Integrity', 'desc' => 'Honest, transparent, and ethical in all we do'],
                ['name' => 'Excellence', 'desc' => 'Commitment to the highest quality standards'],
                ['name' => 'Security', 'desc' => 'Protecting our clients data and systems'],
                ['name' => 'Sustainability', 'desc' => 'Building solutions that last and grow'],
                ['name' => 'Collaboration', 'desc' => 'Working together for shared success']
            ];
            
            foreach ($values as $value) {
                echo '
                <div class="value-card">
                    <div class="value-icon">' . substr($value['name'], 0, 1) . '</div>
                    <h3>' . $value['name'] . '</h3>
                    <p>' . $value['desc'] . '</p>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="about-team">
    <div class="container">
        <h2>Our Approach</h2>
        <div class="approach-steps">
            <div class="step">
                <div class="step-number">1</div>
                <h3>Discovery</h3>
                <p>Understanding your business needs and challenges</p>
            </div>
            <div class="step">
                <div class="step-number">2</div>
                <h3>Design</h3>
                <p>Creating tailored solutions that address your requirements</p>
            </div>
            <div class="step">
                <div class="step-number">3</div>
                <h3>Development</h3>
                <p>Building robust, scalable solutions with quality code</p>
            </div>
            <div class="step">
                <div class="step-number">4</div>
                <h3>Deployment & Support</h3>
                <p>Launching successfully and providing ongoing support</p>
            </div>
        </div>
    </div>
</section>

<section class="about-cta">
    <div class="container">
        <h2>Let's Build Africa's Digital Future</h2>
        <p>
            Whether you're launching a startup or transforming an existing business,
            Nyxara Africa is ready to partner with you.
        </p>
        <a href="contact.php" class="btn">Contact Us</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>