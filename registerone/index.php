<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <header>
        <div class="container">
            <p class="heading">4 Step Registration Form</p>
        </div>
    </header>

    <div class="container">
        <button class="btn" id="registerFormBtn">Register</button>
            
        
        
        <?php 
            if(isset($_GET['error'])){
                echo '<div class="alert error">'. $_GET['error'] .'</div>';
            } else if(isset($_GET['success'])){
                echo '<div class="alert success">'. $_GET['success'] .'</div>';
            }
        ?>
    
    </div>

    <div id="modalContainer">

        <div class="modalContent">

            <form action="App/Controllers/UserController.php" method="POST"  enctype="multipart/form-data">

                <div class="modalHeader flex">
                    <p class="heading">Registration Form</p>
                    <button type="button" id="closeModalBtn">&times;</button>
                </div>

                <div class="modalBody">
                        
                    <div class="modalItem show" data-step="1">

                        <p class="subheading">Basic Information</p>

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

                    </div>

                    <div class="modalItem"  data-step="2">
                    
                        <p class="subheading">4 Files</p>

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
                    
                    </div>
                    
                    <div class="modalItem"  data-step="3">
                    
                        <p class="subheading">4 Social Media Profile Links</p>

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
                    
                    </div>
                    
                    <div class="modalItem"  data-step="4">
                        
                        <p class="subheading">Basic Information</p>
                        <div class="mb-1">
                            <span class="gray">Name</span>
                            <span id="showname">text</span>
                        </div>
                        <div class="mb-1">
                            <span class="gray">Email</span>
                            <span id="showemail">text</span>
                        </div>
                        <div class="mb-1">
                            <span class="gray">Phone</span>
                            <span id="showphone">text</span>
                        </div>
                        <div class="mb-1">
                            <span class="gray">Address</span>
                            <span id="showaddress">text</span>
                        </div>
                        <p class="subheading">4 Files</p>        
                        
                        <div class="mb-1">
                            <span class="gray">File 1</span>
                            <span id="showfile1">text</span>
                        </div>                        
                        
                        <div class="mb-1">
                            <span class="gray">File 2</span>
                            <span id="showfile2">text</span>
                        </div>                        
                        
                        <div class="mb-1">
                            <span class="gray">File 3</span>
                            <span id="showfile3">text</span>
                        </div>                        
                        
                        <div class="mb-1">
                            <span class="gray">File 4</span>
                            <span id="showfile4">text</span>
                        </div>          

                        <p class="subheading">4 Social Media Profile Links</p>
                        
                        <div class="mb-1">
                            <span class="gray">Link 1</span>
                            <span id="showlink1">text</span>
                        </div>          
                        
                        <div class="mb-1">
                            <span class="gray">Link 2</span>
                            <span id="showlink2">text</span>
                        </div>          
                        
                        <div class="mb-1">
                            <span class="gray">Link 3</span>
                            <span id="showlink3">text</span>
                        </div>          
                        
                        <div class="mb-1">
                            <span class="gray">Link 4</span>
                            <span id="showlink4">text</span>
                        </div>  
                    </div>
                </div>
                
                <div class="modalFooter">
                    <button id="prevBtn"  type='button' class="btn">Prev</button>
                    <button id="nextBtn"  type='button' class="btn primary">Next</button>
                    
                    <button id="submitBtn" type="submit"  name="registeruser" value="submit" class="btn primary">Submit</button>
                </div>
                    
            </form>

        </div>

    </div>





    <div id="inputError" class=" ">
        <p id="error"></p>
        <button type="button" id="closeError">&times;</button>
    </div>



    <script src="assets/js/jQuery.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>