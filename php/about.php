<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <!-- favicon -->
    <link rel="icon" href="../bowling.ico" type="image/x-icon" />

    <link rel="stylesheet" href="../style/about.css">
    <link rel="stylesheet" href="../style/scrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <img src="../images/alley.png" alt="Bowling Hero" class="img-fluid hero-img">
                </div>
                <div class="col-md-6 text-md-start text-center">
                    <h1>About The Lanes</h1>
                    <p>Your premier destination for bowling fun and entertainment since 2025. We're passionate about
                        creating
                        memorable experiences for families, friends, and bowling enthusiasts.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Story Section -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="story-title-container">
                    <h2 class="section-title">Our Story</h2>
                </div>
                <div class="about-card">
                    <p>The Lanes began with a simple vision: to create a modern bowling center where people of all ages
                        could enjoy quality time together. What started as a small 8-lane alley has grown into multiple
                        locations across the country.</p>
                    <p>Our founder, Muhammad Harraz, was a professional bowler who wanted to share his passion for the
                        sport with the community. He believed bowling should be accessible to everyone - from
                        competitive players to families looking for weekend fun.</p>
                    <p>Today, we continue to uphold Michael's vision by providing state-of-the-art facilities,
                        exceptional service, and a welcoming atmosphere for all our guests.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="mission-title-container">
                    <h2 class="section-title">Our Mission</h2>
                </div>
                <div class="about-card">
                    <p>At The Lanes, our mission is to:</p>
                    <ul>
                        <li>Provide an exceptional bowling experience in a clean, modern, and friendly environment</li>
                        <li>Make bowling accessible and enjoyable for people of all ages and skill levels</li>
                        <li>Support our local communities through events, fundraisers, and youth programs</li>
                        <li>Continuously innovate and improve our facilities and services</li>
                        <li>Create lasting memories for our guests that keep them coming back</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Values Section -->
    <div style="background-color: #8fffff; padding: 60px 0;">
        <div class="container">
            <div class="title-container">
                <h2 class="section-title">Our Values</h2>
            </div>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="about-card text-center h-100">
                        <div class="values-icon">🎯</div>
                        <h4>Excellence</h4>
                        <p>We strive for excellence in everything we do, from maintaining our lanes to serving our
                            customers.</p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="about-card text-center h-100">
                        <div class="values-icon">👪</div>
                        <h4>Family</h4>
                        <p>We believe in creating a family-friendly environment where everyone feels welcome and valued.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="about-card text-center h-100">
                        <div class="values-icon">🎉</div>
                        <h4>Fun</h4>
                        <p>We're in the business of fun! We aim to create joyful experiences and lasting memories.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Team Section -->
    <div style="padding: 60px 0;">
        <div class="container">
            <div class="title-container">
                <h2 class="section-title">Meet Our Team</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-member">
                        <div class="avatar">
                            <img src="../images/harraz.png" alt="Harraz">
                        </div>
                        <h3>Muhammad Harraz</h3>
                        <div class="position">CEO & Founder</div>
                        <button class="team-info-btn" data-bs-toggle="modal" data-bs-target="#harrazModal">Learn
                            More</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-member">
                        <div class="avatar">
                            <img src="../images/ned.png" alt="Harraz">
                        </div>
                        <h3>Amirul Iman</h3>
                        <div class="position">Operations Director</div>
                        <button class="team-info-btn" data-bs-toggle="modal" data-bs-target="#amirulModal">Learn
                            More</button>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="team-member">
                        <div class="avatar">
                            <img src="../images/izat.png" alt="Harraz">
                        </div>
                        <h3>Izat Syafiq</h3>
                        <div class="position">Head Coach</div>
                        <button class="team-info-btn" data-bs-toggle="modal" data-bs-target="#izatModal">Learn
                            More</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="team-member">
                        <div class="avatar">
                            <img src="../images/athirah.png" alt="Harraz">
                        </div>
                        <h3>Siti Nurathirah</h3>
                        <div class="position">Marketing Manager</div>
                        <button class="team-info-btn" data-bs-toggle="modal" data-bs-target="#athirahModal">Learn
                            More</button>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 mb-4">
                    <div class="team-member">
                        <div class="avatar">
                            <img src="../images/zahra.png" alt="Harraz">
                        </div>
                        <h3>Siti Fatimahtulzahra</h3>
                        <div class="position">Technical Director</div>
                        <button class="team-info-btn" data-bs-toggle="modal" data-bs-target="#zahraModal">Learn
                            More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Harraz Modal -->
    <div class="modal fade" id="harrazModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="harrazModalLabel">Muhammad Harraz</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar">
                            <img src="../images/harraz.png" alt="Muhammad Harraz">
                        </div>
                        <div>
                            <h4 class="mb-1">Muhammad Harraz</h4>
                            <div class="position mb-0">CEO & Founder</div>
                        </div>
                    </div>
                    <p>Former professional bowler with over 20 years of experience in the industry. Muhammad's passion
                        for bowling led him to create The Lanes in 2025.</p>
                    <p>After winning multiple national championships, Muhammad decided to share his love for the sport
                        by creating a modern bowling center that would appeal to both serious bowlers and families
                        looking for entertainment.</p>
                    <p>Under his leadership, The Lanes has expanded to five locations while maintaining the highest
                        standards of quality and service.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Ned Modal -->
    <div class="modal fade" id="amirulModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="amirulModalLabel">Amirul Iman</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar">
                            <img src="../images/ned.png" alt="Muhammad Harraz">
                        </div>
                        <div>
                            <h4 class="mb-1">Amirul Iman</h4>
                            <div class="position mb-0">Operations Director</div>
                        </div>
                    </div>
                    <p>With a background in hospitality management, Amirul ensures all our locations run smoothly and
                        maintain our high standards of service.</p>
                    <p>Amirul joined The Lanes in 2025 after managing several high-end hotels. His expertise in customer
                        service and operational efficiency has been instrumental in our growth and success.</p>
                    <p>He oversees all day-to-day operations, staff training, and quality control across all our
                        locations.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Ijat Modal -->
    <div class="modal fade" id="izatModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="izatModalLabel">Izat Syafiq</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar">
                            <img src="../images/izat.png" alt="Muhammad Harraz">
                        </div>
                        <div>
                            <h4 class="mb-1">Izat Syafiq</h4>
                            <div class="position mb-0">Head Coach</div>
                        </div>
                    </div>
                    <p>A certified bowling instructor with multiple tournament wins, Izat leads our coaching programs
                        and youth leagues.</p>
                    <p>Izat has been bowling since he was 5 years old and turned professional at 19. After a successful
                        career, he joined The Lanes to share his knowledge and help develop the next generation of
                        bowlers.</p>
                    <p>His coaching programs cater to all skill levels, from beginners to competitive players, and his
                        youth leagues have produced several state champions.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Athirah Modal -->
    <div class="modal fade" id="athirahModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="athirahModalLabel">Siti Nurathirah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar">
                            <img src="../images/athirah.png" alt="Muhammad Harraz">
                        </div>
                        <div>
                            <h4 class="mb-1">Siti Nurathirah</h4>
                            <div class="position mb-0">Marketing Manager</div>
                        </div>
                    </div>
                    <p>Creative and strategic marketing professional who develops our brand presence and community
                        engagement initiatives across all locations.</p>
                    <p>Siti joined The Lanes in 2025 with a background in digital marketing and event planning. She has
                        transformed our marketing approach, creating engaging campaigns that have significantly
                        increased our customer base.</p>
                    <p>She's also the mastermind behind our popular themed bowling nights and community fundraising
                        events that have become a staple at all our locations.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Zahra Modal -->
    <div class="modal fade" id="zahraModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="zahraModalLabel1">Siti Fatimahtulzahra</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="d-flex align-items-center mb-4">
                        <div class="avatar">
                            <img src="../images/zahra.png" alt="Muhammad Harraz">
                        </div>
                        <div>
                            <h4 class="mb-1">Siti Fatimahtulzahra</h4>
                            <div class="position mb-0">Technical Director</div>
                        </div>
                    </div>
                    <p>Expert in bowling alley technology and equipment maintenance, ensuring our lanes and scoring
                        systems are always in perfect condition.</p>
                    <p>Siti has been with The Lanes since 2025 and has over 15 years of experience in bowling alley
                        technology. She led the implementation of our state-of-the-art scoring system and lane
                        maintenance protocols.</p>
                    <p>Her technical expertise ensures that our equipment is always operating at peak performance,
                        providing our customers with the best possible bowling experience.</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="modal-close-btn" data-bs-dismiss="modal">Close</button>
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