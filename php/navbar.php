<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <!-- favicon -->
    <link rel="icon" href="../bowling.ico" type="image/x-icon" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/navbar.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="../images/bowling logo.png" alt="Logo" height="45" class="d-inline-block align-text-center">
                THE LANES
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav center-nav">
                    <a class="nav-link" href="homepage.php">Home</a>
                    <a class="nav-link" href="about.php">About Us</a>
                    <a class="nav-link" href="policy.php">Policies</a>
                    <a class="nav-link" href="#">Outlets</a>
                    <a class="nav-link" href="#">Packages</a>
                    <a class="nav-link" href="contact.php">Contact</a>
                </div>

                <div class="navbar-nav right-nav">
                    <button class="register-btn" onclick="location.href='#'">Register</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- bootstrap javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
        crossorigin="anonymous"></script>
</body>

</html>