<?php
session_start();

include_once('../Models/User.php');
include_once('../Models/UserLink.php');
include_once('../Models/UserFile.php');
include_once('../Models/Request.php');

if (isset($_POST['registeruser'])) {

    if(!Request::validate($_SESSION, ['name', 'email', 'phone', 'address','file1', 'file2', 'file3', 'file4', 'link1', 'link2', 'link3', 'link4']))
    {
        header('Location: ' . '../../index.php?error='. Request::getFirstError());
        exit;
    }

    User::insert([
        'name' => $_SESSION['name'],
        'email' => $_SESSION['email'],
        'phone' => $_SESSION['phone'],
        'address' => $_SESSION['address'],
    ]);

    $userId = User::lastInsertId();

    UserFile::insert([
        'user_id' => $userId,
        'file' => $_SESSION["file1"]['file_path']
    ]);

    UserFile::insert([
        'user_id' => $userId,
        'file' => $_SESSION["file2"]['file_path']
    ]);

    UserFile::insert([
        'user_id' => $userId,
        'file' => $_SESSION["file3"]['file_path']
    ]);

    UserFile::insert([
        'user_id' => $userId,
        'file' => $_SESSION["file4"]['file_path']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_SESSION['link1']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_SESSION['link2']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_SESSION['link3']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_SESSION['link4']
    ]);

    session_unset();
    session_destroy();

    header('Location: ' . '../../index.php?success=Registration successfull!!!');
    exit;
} 