<!doctype html>
<html>
    <head>
        <title>Contact form</title>
        <link rel="stylesheet" href="design.css">
        <script src="https://kit.fontawesome.com/fef33079ef.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class = "center">
            <h1>Contact Us</h1>
            <form action="db.php" method="POST">
                <div class = "field">
                    <label>Name</label>
                    <span></span>
                    <input type = "text" name = "name" placeholder = "Enter your Full Name" style = "font-family: 'Poppins', Arial, Helvetica, sans-serif; font-weight: 700;" required>
                </div>
                <div class = "field">
                    <label>Email</label>
                    <span></span>
                    <input type = "email" name = "email" placeholder = "Enter your email" style = "font-family: 'Poppins', Arial, Helvetica, sans-serif; font-weight: 700;" required>
                </div>
                <div class = "field">
                    <label>DETAILS</label>
                    <span></span>
                    <input type = "text" name = "details" placeholder = "Enter your Project Details" style = "font-family: 'Poppins', Arial, Helvetica, sans-serif; font-weight: 700;" required>
                </div>
                <button type = "submit" name = "submit" style="font-weight: 700; color: black;">SEND MESSAGE</button>
                <div class = "icons">
                    <i class="fa-brands fa-instagram"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-youtube"></i>
                </div>
            </form>
        </div>
    </body>
</html>