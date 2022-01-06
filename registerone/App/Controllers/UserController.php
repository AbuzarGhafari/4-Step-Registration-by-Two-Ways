<?php

include_once('../Models/User.php');
include_once('../Models/UserLink.php');
include_once('../Models/UserFile.php');
include_once('../Models/Request.php');

if (isset($_POST['registeruser'])) {

    if(!Request::validate($_POST, ['name', 'email', 'phone', 'address', 'link1', 'link2', 'link3', 'link4'])){
        header('Location: ' . '../../index.php?error='. Request::getFirstError());
        exit;
    }
    
    if(!Request::validate($_FILES, ['file1', 'file2', 'file3', 'file4'])){
        header('Location: ' . '../../index.php?error='. Request::getFirstError());
        exit;
    }
    
    User::insert([
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'phone' => $_POST['phone'],
        'address' => $_POST['address'],
    ]);

    $userId = User::lastInsertId();

    if(UserFile::uploadFile($_FILES["file1"])){
        UserFile::insert([
            'user_id' => $userId,
            'file' => UserFile::getFilePath()
        ]);
    }else {
        header('Location: ' . '../../index.php?error=File 1 not uploaded.');
        exit;
    }

    if(UserFile::uploadFile($_FILES["file2"])){
        UserFile::insert([
            'user_id' => $userId,
            'file' => UserFile::getFilePath()
        ]);
    }else {
        header('Location: ' . '../../index.php?error=File 2 not uploaded.');
        exit;
    }

    if(UserFile::uploadFile($_FILES["file3"])){
        UserFile::insert([
            'user_id' => $userId,
            'file' => UserFile::getFilePath()
        ]);
    }else {
        header('Location: ' . '../../index.php?error=File 3 not uploaded.');
        exit;
    }

    if(UserFile::uploadFile($_FILES["file4"])){
        UserFile::insert([
            'user_id' => $userId,
            'file' => UserFile::getFilePath()
        ]);
    }else {
        header('Location: ' . '../../index.php?error=File 4 not uploaded.');
        exit;
    }

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_POST['link1']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_POST['link2']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_POST['link3']
    ]);

    UserLink::insert([
        'user_id' => $userId,
        'link' => $_POST['link4']
    ]);

    header('Location: ' . '../../index.php?success=Registration successfull!!!');
    exit;
} 