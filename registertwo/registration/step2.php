<?php 
session_start();

if($_SESSION["name"] == ""){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
$title = "Registration Form 2 - Step 2";
include_once ('header.php');
?>


    <div class="container">

        <p class="subheading">4 Files</p>

        <form action="../App/Controllers/RegisterController.php" method="POST"  enctype="multipart/form-data">

            <div class="inputRow">
                <label for="file1">File 1</label>
                <input type="file" name="file1" id="file1" require>
            </div>

            <div class="inputRow">
                <label for="file2">File 2</label>
                <input type="file" name="file2" id="file2" require>
            </div>

            <div class="inputRow">
                <label for="file3">File 3</label>
                <input type="file" name="file3" id="file3" require>
            </div>

            <div class="inputRow">
                <label for="file4">File 4</label>
                <input type="file" name="file4" id="file4" require>
            </div>
            
            <a href="step1.php" class="btn ">Back</a>
            <button type="submit" name="step2" class="btn primary" onclick="return validateStepTwo();">Next</button>
                    
        </form>

    </div>

    <div id="inputError" class=" ">
        <p id="error"></p>
        <button type="button" id="closeError">&times;</button>
    </div>


<?php 
include_once 'footer.php';
?>