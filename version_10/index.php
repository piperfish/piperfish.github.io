<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Official website for Department of Mathematics">
    <meta name="keywords" content="TGS, Takapuna Grammar, Mathematics">
    <meta name="author" content="Robert Park">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TGS Department of Mathematics</title>

    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/homepage.css">
    <link rel="stylesheet" href="css/parentpage.css">
    <link rel="stylesheet" href="css/subpage.css">

    <!-- Link to Javascript -->
    <script src='js/functions.js'></script>
</head>

<body>

    <div class= "header" id="header">
        <?php include("header.php"); ?>
    </div>

    <?php
        if (!isset($_REQUEST['page'])) { // displaying homepage at default
            include("home.php");
        } 

        else { // when page is requested
            // preventing users from navigating through file system
            $page = preg_replace('/[^0-9a-zA-Z]-/', '', $_REQUEST['page']);
            include("$page.php");

            // change the background for header in subpages
            if (str_contains($page, 'subpages/')) {
                echo '<script> changeColor(); </script>';
            }
        }

    ?>

    <footer>
        <?php include("footer.php"); ?>
    </footer>

</body>

</html>