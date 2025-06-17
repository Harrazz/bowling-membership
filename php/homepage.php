<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>

    <!-- favicon -->
    <link rel="icon" href="../bowling.ico" type="image/x-icon" />

    <link rel="stylesheet" href="../style/homepage.css">
    <link rel="stylesheet" href="../style/scrollbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
</head>

<body>
    <?php include 'navbar.php'; ?>

    <div class="video-container">
        <video class="video-background" autoplay muted loop>
            <source src="../media/pba video.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <div class="overlay"></div>
        <div class="content">
            <div class="logo-container">
                <div class="logo">
                    <img src="../images/bowling logo.png" alt="The Lane Logo">
                </div>
            </div>

            <h1 class="welcome-text">
                <span class="welcome-line">WELCOME TO</span>
                <span class="welcome-line">THE LANES</span>
            </h1>

            <div class="quote-container">
                <p class="quote-text">"The pins don't care how hard you throw the ball. They only care about where you
                    hit them."</p>
                <p class="quote-author">— Harraz, PBA Bowler</p>
            </div>

            <a href="about.php">
                <button class="discover-btn">Discover More</button>
            </a>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>