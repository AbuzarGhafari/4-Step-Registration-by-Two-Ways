<?php
session_start();
include_once('../Models/UserFile.php');

if (isset($_POST['step1'])) {

    $_SESSION['name'] = $_POST['name'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['phone'] = $_POST['phone'];
    $_SESSION['address'] = $_POST['address'];

    header('Location: ' . '../../registration/step2.php');
    exit;

} else if (isset($_POST['step2'])) {

    UserFile::uploadFile($_FILES["file1"]);
    $_SESSION['file1'] = $_FILES["file1"];
    $_SESSION['file1']['file_path'] = UserFile::getFilePath();

    UserFile::uploadFile($_FILES["file2"]);
    $_SESSION['file2'] = $_FILES["file2"];
    $_SESSION['file2']['file_path'] = UserFile::getFilePath();

    UserFile::uploadFile($_FILES["file3"]);
    $_SESSION['file3'] = $_FILES["file3"];
    $_SESSION['file3']['file_path'] = UserFile::getFilePath();

    UserFile::uploadFile($_FILES["file4"]);
    $_SESSION['file4'] = $_FILES["file4"];
    $_SESSION['file4']['file_path'] = UserFile::getFilePath();
    

    header('Location: ' . '../../registration/step3.php');
    exit;
} else if (isset($_POST['step3'])) {

    $_SESSION['link1'] = $_POST['link1'];
    $_SESSION['link2'] = $_POST['link2'];
    $_SESSION['link3'] = $_POST['link3'];
    $_SESSION['link4'] = $_POST['link4'];

    header('Location: ' . '../../registration/step4.php');
    exit;
} 