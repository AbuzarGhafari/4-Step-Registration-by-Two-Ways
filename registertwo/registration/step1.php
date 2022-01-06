<?php 
$title = "Registration Form 2 - Step 1";
include_once ('header.php');
?>

    <div class="container">

        <p class="subheading">Basic Information</p>

        <form action="../App/Controllers/RegisterController.php" method="POST"  enctype="multipart/form-data">

            <div class="inputRow">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" require>
            </div>
            <div class="inputRow">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" require>
            </div>
            <div class="inputRow">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" require>
            </div>
            <div class="inputRow">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" require>
            </div>
                    
            <a href="../index.php" class="btn">Go Back</a>
            <button type="submit" name="step1" class="btn primary" onclick="return validateStepone();">Next</button>
                        
        </form>



    </div>

    
    <div id="inputError" class=" ">
        <p id="error"></p>
        <button type="button" id="closeError">&times;</button>
    </div>


<?php 
include_once 'footer.php';
?>