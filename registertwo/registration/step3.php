<?php 
session_start();

if($_SESSION["file1"] == ""){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
$title = "Registration Form 2 - Step 3";
include_once ('header.php');
?>

    <div class="container">
        
        <p class="subheading">4 Social Media Profile Links</p>

        <form action="../App/Controllers/RegisterController.php" method="POST"  enctype="multipart/form-data">

            <div class="inputRow">
                <label for="link1">Link 1</label>
                <input type="text" name="link1" id="link1" require>
            </div>

            <div class="inputRow">
                <label for="link2">Link 2</label>
                <input type="text" name="link2" id="link2" require>
            </div>

            <div class="inputRow">
                <label for="link3">Link 3</label>
                <input type="text" name="link3" id="link3" require>
            </div>

            <div class="inputRow">
                <label for="link4">Link 4</label>
                <input type="text" name="link4" id="link4" require>
            </div>
                    
            <a href="step2.php" class="btn ">Back</a>
            <button type="submit" name="step3" class="btn primary" onclick="return validateStepThree();">Next</button>
        </form>

    </div>



    <div id="inputError" class=" ">
        <p id="error"></p>
        <button type="button" id="closeError">&times;</button>
    </div>


<?php 
include_once 'footer.php';
?>