<?php 
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form 2</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <header>
        <div class="container">
            <p class="heading">4 Step Registration Form</p>
        </div>
    </header>

    <div class="container">

        <a href="registration/step1.php" class="btn">Register</a>

        
        <?php 
            if(isset($_GET['error'])){
                echo '<div class="alert error">'. $_GET['error'] .'</div>';
            } else if(isset($_GET['success'])){
                echo '<div class="alert success">'. $_GET['success'] .'</div>';
            }
        ?>
    </div>





    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>