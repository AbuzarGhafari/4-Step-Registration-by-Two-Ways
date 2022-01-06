<?php 
session_start();

if($_SESSION["link1"] == ""){
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    exit;
}
$title = "Registration Form 2 - Step 4";
include_once ('header.php');
?>


    <div class="container">
        
        <p class="subheading">Basic Information</p>

        <form action="../App/Controllers/UserController.php" method="POST"  enctype="multipart/form-data">

            <div class="mb-1">
                <span class="gray">Name</span>
                <span id="showname"><?php echo $_SESSION['name']; ?></span>
            </div>
            <div class="mb-1">
                <span class="gray">Email</span>
                <span id="showemail"><?php echo $_SESSION['email']; ?></span>
            </div>
            <div class="mb-1">
                <span class="gray">Phone</span>
                <span id="showphone"><?php echo $_SESSION['phone']; ?></span>
            </div>
            <div class="mb-1">
                <span class="gray">Address</span>
                <span id="showaddress"><?php echo $_SESSION['address']; ?></span>
            </div>
            <p class="subheading">4 Files</p>        
            
            <div class="mb-1">
                <span class="gray">File 1</span>
                <span id="showfile1"><?php echo $_SESSION['file1']['name']; ?></span>
            </div>                        
                        
            <div class="mb-1">
                <span class="gray">File 2</span>
                <span id="showfile2"><?php echo $_SESSION['file2']['name']; ?></span>
            </div>                        
            
            <div class="mb-1">
                <span class="gray">File 3</span>
                <span id="showfile3"><?php echo $_SESSION['file3']['name']; ?></span>
            </div>                        
            
            <div class="mb-1">
                <span class="gray">File 4</span>
                <span id="showfile4"><?php echo $_SESSION['file4']['name']; ?></span>
            </div>          

            <p class="subheading">4 Social Media Profile Links</p>
            
            <div class="mb-1">
                <span class="gray">Link 1</span>
                <span id="showlink1"><?php echo $_SESSION['link1']; ?></span>
            </div>          
                        
            <div class="mb-1">
                <span class="gray">Link 2</span>
                <span id="showlink2"><?php echo $_SESSION['link2']; ?></span>
            </div>          
            
            <div class="mb-1">
                <span class="gray">Link 3</span>
                <span id="showlink3"><?php echo $_SESSION['link3']; ?></span>
            </div>          
            
            <div class="mb-1">
                <span class="gray">Link 4</span>
                <span id="showlink4"><?php echo $_SESSION['link4']; ?></span>
            </div>  
            
            <a href="step3.php" class="btn ">Back</a>
            <button id="nextBtn"  type='submit' name="registeruser" class="btn primary">Submit</button>
                    
        </form>

    </div>


<?php 
include_once 'footer.php';
?>