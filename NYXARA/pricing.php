<?php
$pageTitle = "Pricing | Nyxara Africa";
$pageDescription = "Affordable, transparent pricing for Nyxara Africa's technology services. Custom packages for web development, mobile apps, and business solutions.";
?>
<?php include 'includes/header.php'; ?>

<section class="pricing-hero">
    <div class="container">
        <h1>Transparent, Flexible Pricing</h1>
        <p>Choose the perfect plan for your business needs. All packages include high-quality solutions and dedicated support.</p>
    </div>
</section>

<section class="pricing-intro">
    <div class="container">
        <h2>Investment That Scales With You</h2>
        <p>At Nyxara Africa, we believe in transparent pricing with no hidden costs. Our packages are designed to provide exceptional value while fitting within your budget. We also offer custom solutions tailored to your specific requirements.</p>
    </div>
</section>

<section class="pricing-plans">
    <div class="container">
        <h2>Service Packages</h2>
        <div class="plans-container">
            
            <div class="plan-card">
                <div class="plan-header">
                    <h3>Startup Package</h3>
                    <div class="plan-price">
                        <span class="price">From $200</span>
                        <span class="period">One-time project</span>
                    </div>
                </div>
                <div class="plan-features">
                    <ul>
                        <li><span class="feature-check">✓</span> Responsive Website (up to 5 pages)</li>
                        <li><span class="feature-check">✓</span> Basic SEO Setup</li>
                        <li><span class="feature-check">✓</span> Contact Form Integration</li>
                        <li><span class="feature-check">✓</span> Mobile-Friendly Design</li>
                        <li><span class="feature-check">✓</span> 3 Months Technical Support</li>
                        <li><span class="feature-uncheck">✗</span> E-commerce Functionality</li>
                        <li><span class="feature-uncheck">✗</span> Custom Web Applications</li>
                    </ul>
                </div>
                <div class="plan-footer">
                    <a href="contact.php?plan=startup" class="btn">Get Started</a>
                </div>
            </div>

            <div class="plan-card featured">
                <div class="plan-badge">Most Popular</div>
                <div class="plan-header">
                    <h3>Business Package</h3>
                    <div class="plan-price">
                        <span class="price">From $500</span>
                        <span class="period">One-time project</span>
                    </div>
                </div>
                <div class="plan-features">
                    <ul>
                        <li><span class="feature-check">✓</span> Everything in Startup Package</li>
                        <li><span class="feature-check">✓</span> Custom Web Application</li>
                        <li><span class="feature-check">✓</span> E-commerce Platform</li>
                        <li><span class="feature-check">✓</span> Mobile App (Basic)</li>
                        <li><span class="feature-check">✓</span> Content Management System</li>
                        <li><span class="feature-check">✓</span> 6 Months Technical Support</li>
                        <li><span class="feature-check">✓</span> Basic Analytics Dashboard</li>
                    </ul>
                </div>
                <div class="plan-footer">
                    <a href="contact.php?plan=business" class="btn">Get Started</a>
                </div>
            </div>

            <div class="plan-card">
                <div class="plan-header">
                    <h3>Enterprise Package</h3>
                    <div class="plan-price">
                        <span class="price">Custom Pricing</span>
                        <span class="period">Tailored solutions</span>
                    </div>
                </div>
                <div class="plan-features">
                    <ul>
                        <li><span class="feature-check">✓</span> Everything in Business Package</li>
                        <li><span class="feature-check">✓</span> Multi-platform Mobile Apps</li>
                        <li><span class="feature-check">✓</span> Advanced Agro-Tech Systems</li>
                        <li><span class="feature-check">✓</span> Enterprise Resource Planning</li>
                        <li><span class="feature-check">✓</span> Custom API Development</li>
                        <li><span class="feature-check">✓</span> 12 Months Priority Support</li>
                        <li><span class="feature-check">✓</span> Dedicated Project Manager</li>
                    </ul>
                </div>
                <div class="plan-footer">
                    <a href="contact.php?plan=enterprise" class="btn">Contact for Quote</a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pricing-addons">
    <div class="container">
        <h2>Additional Services</h2>
        <div class="addons-container">
            <div class="addon-card">
                <h3>Maintenance Plans</h3>
                <p class="addon-price">From $15/month</p>
                <p>Regular updates, security monitoring, and technical support to keep your systems running smoothly.</p>
            </div>
            <div class="addon-card">
                <h3>SEO Optimization</h3>
                <p class="addon-price">From $50/month</p>
                <p>Improve your search engine rankings and drive more organic traffic to your website.</p>
            </div>
            <div class="addon-card">
                <h3>Custom Features</h3>
                <p class="addon-price">Custom Quote</p>
                <p>Need something specific? We'll work with you to build custom features that meet your exact requirements.</p>
            </div>
        </div>
    </div>
</section>

<section class="pricing-faq">
    <div class="container">
        <h2>Frequently Asked Questions</h2>
        <div class="faq-container">
            <?php
            $faqs = [
                [
                    'question' => 'Do you offer payment plans?',
                    'answer' => 'Yes, we offer flexible payment plans for projects over $2,000. Typically, we require 50% upfront and 50% upon completion.'
                ],
                [
                    'question' => 'Can I upgrade my package later?',
                    'answer' => 'Absolutely! You can upgrade to a higher package at any time. We\'ll credit your previous investment toward the new package.'
                ],
                [
                    'question' => 'How long does a typical project take?',
                    'answer' => 'Timelines vary by project complexity. Startup packages typically take 2-4 weeks, Business packages 4-8 weeks, and Enterprise solutions 8+ weeks.'
                ],
                [
                    'question' => 'Do you provide hosting?',
                    'answer' => 'We can recommend reliable hosting providers or manage hosting for you as part of our maintenance plans.'
                ],
                [
                    'question' => 'What happens after project completion?',
                    'answer' => 'We provide comprehensive documentation, training, and ongoing support as per your chosen package.'
                ],
                [
                    'question' => 'Do you work with international clients?',
                    'answer' => 'Yes, we serve clients across Africa and internationally, with remote collaboration tools and flexible communication.'
                ]
            ];
            
            foreach ($faqs as $faq) {
                echo '
                <div class="faq-item">
                    <h3>' . $faq['question'] . '</h3>
                    <p>' . $faq['answer'] . '</p>
                </div>';
            }
            ?>
        </div>
    </div>
</section>

<section class="pricing-cta">
    <div class="container">
        <h2>Ready to Transform Your Business?</h2>
        <p>Contact us for a free consultation and customized quote based on your specific needs.</p>
        <a href="contact.php" class="btn">Get Free Consultation</a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>