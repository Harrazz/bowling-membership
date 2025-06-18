<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <!-- favicon -->
    <link rel="icon" href="../bowling.ico" type="image/x-icon" />

    <link rel="stylesheet" href="../style/contact.css">
    <link rel="stylesheet" href="../style/scrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="hero-section">
        <div class="container text-center">
            <h1>Contact Us</h1>
            <p>Have questions or want to book a lane? Get in touch with us today!</p>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-7">
                <div class="title-container">
                    <h2 class="section-title">Send Us a Message</h2>
                </div>
                <div class="contact-card">
                    <form id="contactForm" class="contact-form">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Your Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="John Doe" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" placeholder="john@example.com"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phone" placeholder="(123) 456-7890">
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject"
                                placeholder="Lane Reservation, Question, etc.">
                        </div>
                        <div class="mb-4">
                            <label for="message" class="form-label">Your Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="How can we help you?"
                                required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="submit-btn" id="submitBtn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div class="col-lg-5">
                <div class="title-container">
                    <h2 class="section-title">Contact Information</h2>
                </div>
                <div class="contact-card">
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="bi bi-geo-alt-fill"></i>
                        </div>
                        <div class="contact-text">
                            <h5>Our Location</h5>
                            <p>123 Bowling Lane,Kuala Lumpur</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="bi bi-telephone-fill"></i>
                        </div>
                        <div class="contact-text">
                            <h5>Phone Number</h5>
                            <p>010-400 8072</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="bi bi-envelope-fill"></i>
                        </div>
                        <div class="contact-text">
                            <h5>Email Address</h5>
                            <p>thelanes1@gmail.com</p>
                        </div>
                    </div>
                    <div class="contact-info-item">
                        <div class="contact-icon">
                            <i class="bi bi-clock-fill"></i>
                        </div>
                        <div class="contact-text">
                            <h5>Business Hours</h5>
                            <p>Mon-Thu: 10am-11pm | Fri-Sun: 10am-1am</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-link"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>