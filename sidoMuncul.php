<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Jamu By AriQ</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">   
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <!--Ajax-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script>
        window.onload = fadeIn;
          
        function fadeIn() {
            var fade = document.getElementById("body");
            var opacity = 0;
            var blur = 1;
            var intervalID = setInterval(function() {
          
                if (opacity < 1) {
                    blur = blur - 0.1
                    opacity = opacity + 0.1
                    fade.style.opacity = opacity;
                } else {
                    clearInterval(intervalID);
                }
            },43);
        }
    </script>
        
    </head>
    <body id="body" style="opacity:0;filter:blur(1.0)">
        <!-- Responsive navbar-->
        <?php include 'navbar.php' ?>
        <!-- Page Content-->
        <?php include 'pageSidoMuncul.php' ?>
        <!-- Footer-->
        <?php include 'footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script href="startbootstrap-small-business-gh-pages/js/scripts.js"></script>
    </body>
</html>
