<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 1rem 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        nav {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 2rem;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            transition: opacity 0.3s;
        }

        .nav-links a:hover {
            opacity: 0.8;
        }

        .login-btn {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            border: 2px solid white;
            transition: all 0.3s;
        }

        .login-btn:hover {
            background: white;
            color: #10b981;
            opacity: 1;
        }

        main {
            margin-top: 80px;
        }

        section {
            padding: 5rem 2rem;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        h1 {
            font-size: 3.5rem;
            margin-bottom: 1.5rem;
            color: #1f2937;
            line-height: 1.2;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 1.5rem;
            color: #10b981;
            text-align: center;
        }

        h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #1f2937;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 1rem;
            color: #6b7280;
        }

        #home {
            background: linear-gradient(135deg, #f0fdf4 0%, #dcfce7 100%);
            min-height: calc(100vh - 80px);
            display: flex;
            align-items: center;
        }

        .hero-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
        }

        .hero-text {
            padding-right: 2rem;
        }

        .hero-highlight {
            color: #10b981;
            font-weight: 600;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            margin-top: 2rem;
        }

        .btn-primary {
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            padding: 1rem 2rem;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #10b981;
            padding: 1rem 2rem;
            border: 2px solid #10b981;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            transition: all 0.3s;
        }

        .btn-secondary:hover {
            background: #10b981;
            color: white;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .stat-item {
            text-align: center;
            padding: 1.5rem;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .stat-number {
            font-size: 2.5rem;
            font-weight: bold;
            color: #10b981;
        }

        .stat-label {
            color: #6b7280;
            margin-top: 0.5rem;
        }

        #about {
            background: #fff;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .service-card {
            background: white;
            padding: 2.5rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            border: 2px solid #f3f4f6;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(16, 185, 129, 0.15);
            border-color: #10b981;
        }

        .service-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        .features-list {
            list-style: none;
            margin-top: 1rem;
        }

        .features-list li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: #6b7280;
        }

        .features-list li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #10b981;
            font-weight: bold;
        }

        #gallery {
            background: #f9fafb;
        }

        .use-cases-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
            margin-top: 3rem;
        }

        .use-case-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            transition: transform 0.3s;
        }

        .use-case-card:hover {
            transform: translateY(-5px);
        }

        .use-case-image {
            padding: 3rem;
            text-align: center;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            font-size: 3rem;
            min-height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .use-case-content {
            padding: 2rem;
        }

        #contact {
            background: white;
        }

        .contact-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            margin-top: 3rem;
        }

        .contact-info {
            padding: 2rem;
        }

        .contact-item {
            display: flex;
            align-items: start;
            gap: 1rem;
            margin-bottom: 2rem;
            padding: 1.5rem;
            background: #f9fafb;
            border-radius: 10px;
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.5rem;
            flex-shrink: 0;
        }

        .contact-form {
            background: #f9fafb;
            padding: 3rem;
            border-radius: 15px;
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #1f2937;
        }

        input, textarea, select {
            width: 100%;
            padding: 1rem;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
            font-family: inherit;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #10b981;
        }

        textarea {
            resize: vertical;
            min-height: 120px;
        }

        footer {
            background: #1f2937;
            color: white;
            padding: 3rem 2rem 1rem;
            text-align: center;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-bottom: 2rem;
        }

        .footer-links a {
            color: #9ca3af;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #10b981;
        }

        @media (max-width: 968px) {
            .hero-content, .contact-container {
                grid-template-columns: 1fr;
            }

            .services-grid {
                grid-template-columns: 1fr;
            }

            .use-cases-grid {
                grid-template-columns: 1fr;
            }

            .nav-links {
                gap: 1rem;
                font-size: 0.9rem;
            }

            h1 {
                font-size: 2.5rem;
            }

            h2 {
                font-size: 2rem;
            }

            .hero-stats {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="logo">Textora Technologies</div>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">Services</a></li>
                <li><a href="#gallery">Solutions</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="/login" class="login-btn">Log in</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section id="home">
            <div class="container">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1>Reach Your Customers Instantly with <span class="hero-highlight">Bulk Messaging Solutions</span></h1>
                        <p style="font-size: 1.2rem; color: #4b5563;">Enterprise-grade SMS, Voice & WhatsApp Business API for seamless customer engagement. Connect with millions in seconds.</p>
                        <div class="cta-buttons">
                            <a href="#contact" class="btn-primary">Get Started</a>
                            <a href="#about" class="btn-secondary">Our Services</a>
                        </div>
                    </div>
                    <div class="hero-stats">
                        <div class="stat-item">
                            <div class="stat-number">99.9%</div>
                            <div class="stat-label">Delivery Rate</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">500M+</div>
                            <div class="stat-label">Messages/Month</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5000+</div>
                            <div class="stat-label">Happy Clients</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="about">
            <div class="container">
                <h2>Our Communication Services</h2>
                <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem; font-size: 1.15rem;">Empower your business with reliable, scalable, and cost-effective messaging solutions trusted by thousands of enterprises worldwide.</p>
                
                <div class="services-grid">
                    <div class="service-card">
                        <div class="service-icon">💬</div>
                        <h3>Bulk SMS Service</h3>
                        <p>Send promotional and transactional SMS to millions of customers instantly with our robust SMS gateway.</p>
                        <ul class="features-list">
                            <li>Promotional SMS Campaigns</li>
                            <li>Transactional SMS Alerts</li>
                            <li>OTP & Verification SMS</li>
                            <li>Unicode & Regional Language Support</li>
                            <li>Detailed Analytics Dashboard</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">📞</div>
                        <h3>Voice Broadcasting</h3>
                        <p>Deliver personalized voice messages to your audience with our automated voice call service.</p>
                        <ul class="features-list">
                            <li>Pre-recorded Voice Campaigns</li>
                            <li>IVR Solutions</li>
                            <li>Voice OTP Services</li>
                            <li>Multi-language Support</li>
                            <li>Real-time Call Reporting</li>
                        </ul>
                    </div>

                    <div class="service-card">
                        <div class="service-icon">✅</div>
                        <h3>WhatsApp Business API</h3>
                        <p>Connect with customers on their favorite platform with official WhatsApp Business API integration.</p>
                        <ul class="features-list">
                            <li>Rich Media Messages (Images, Videos)</li>
                            <li>Interactive Buttons & Lists</li>
                            <li>Customer Support Automation</li>
                            <li>Order & Payment Updates</li>
                            <li>Verified Business Profile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="gallery">
            <div class="container">
                <h2>Industry Solutions</h2>
                <p style="text-align: center; max-width: 800px; margin: 0 auto 3rem; font-size: 1.15rem;">Our messaging platform serves diverse industries with tailored communication solutions.</p>
                
                <div class="use-cases-grid">
                    <div class="use-case-card">
                        <div class="use-case-image">🏦</div>
                        <div class="use-case-content">
                            <h3>Banking & Finance</h3>
                            <p>Secure transaction alerts, OTP verification, account updates, and fraud prevention notifications to keep customers informed in real-time.</p>
                        </div>
                    </div>

                    <div class="use-case-card">
                        <div class="use-case-image">🛒</div>
                        <div class="use-case-content">
                            <h3>E-Commerce & Retail</h3>
                            <p>Order confirmations, shipping updates, promotional campaigns, abandoned cart reminders, and customer feedback collection.</p>
                        </div>
                    </div>

                    <div class="use-case-card">
                        <div class="use-case-image">🏥</div>
                        <div class="use-case-content">
                            <h3>Healthcare</h3>
                            <p>Appointment reminders, prescription notifications, health tips, emergency alerts, and patient engagement programs.</p>
                        </div>
                    </div>

                    <div class="use-case-card">
                        <div class="use-case-image">📚</div>
                        <div class="use-case-content">
                            <h3>Education</h3>
                            <p>Admission updates, exam schedules, result notifications, fee reminders, and parent-teacher communication.</p>
                        </div>
                    </div>

                    <div class="use-case-card">
                        <div class="use-case-image">🚗</div>
                        <div class="use-case-content">
                            <h3>Travel & Hospitality</h3>
                            <p>Booking confirmations, flight updates, hotel check-in reminders, travel packages, and customer satisfaction surveys.</p>
                        </div>
                    </div>

                    <div class="use-case-card">
                        <div class="use-case-image">🏢</div>
                        <div class="use-case-content">
                            <h3>Real Estate</h3>
                            <p>Property alerts, site visit reminders, documentation updates, payment schedules, and customer relationship management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <h2>Get Started Today</h2>
                <p style="text-align: center; max-width: 800px; margin: 0 auto; font-size: 1.15rem;">Ready to transform your customer communication? Contact us for a free consultation and custom pricing.</p>
                
                <div class="contact-container">
                    <div class="contact-info">
                        <h3 style="margin-bottom: 2rem;">Contact Information</h3>
                        
                        <div class="contact-item">
                            <div class="contact-icon">📧</div>
                            <div>
                                <h4 style="margin-bottom: 0.5rem;">Email Us</h4>
                                <p>support@bulkconnect.com<br>sales@bulkconnect.com</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">📱</div>
                            <div>
                                <h4 style="margin-bottom: 0.5rem;">Call Us</h4>
                                <p>+91 1800-XXX-XXXX<br>Mon-Sat, 9:00 AM - 6:00 PM</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <h4 style="margin-bottom: 0.5rem;">Visit Us</h4>
                                <p>Corporate Office<br>Business District, City Name<br>PIN Code</p>
                            </div>
                        </div>
                    </div>

                    <form class="contact-form">
                        <h3 style="margin-bottom: 1.5rem;">Request a Quote</h3>
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Business Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number *</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="service">Service Interested In *</label>
                            <select id="service" name="service" required>
                                <option value="">Select a service</option>
                                <option value="sms">Bulk SMS Service</option>
                                <option value="voice">Voice Broadcasting</option>
                                <option value="whatsapp">WhatsApp Business API</option>
                                <option value="all">All Services</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Requirements</label>
                            <textarea id="message" name="message" placeholder="Tell us about your messaging needs, expected volume, etc."></textarea>
                        </div>
                        <button type="submit" class="btn-primary" style="width: 100%;">Submit Request</button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#about">Services</a>
                <a href="#gallery">Solutions</a>
                <a href="#contact">Contact</a>
                <a href="/login">Client Portal</a>
            </div>
            <p style="color: #9ca3af; margin-top: 2rem;">&copy; 2024 BulkConnect. All rights reserved. | Trusted Messaging Solutions Provider</p>
        </div>
    </footer>

    <script>
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            });
        });

        document.querySelector('.contact-form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your interest! Our team will contact you within 24 hours to discuss your requirements.');
            this.reset();
        });
    </script>
</body>
</html>