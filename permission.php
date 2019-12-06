<?php
    session_start();
    function isAdmin(){
        if ($_SESSION['LEVEL'] == 0){
            return true;
        }
        return false;
    }

    function isCompany(){
        if ($_SESSION['LEVEL'] == 1){
            return true;
        }
        return false;
    }

    function isPoster(){
        if ($_SESSION['LEVEL'] == 2){
            return true;
        }
        return false;
    }

    
    function isUser(){
        if ($_SESSION['LEVEL'] == 3){
            return true;
        }
        return false;
    }

    function isEmployer(){
        if ($_SESSION['LEVEL'] == 4){
            return true;
        }
        return false;
    }

    function isGuest(){
        if (!isset($_SESSION['USERNAME'])){
            return true;
        }
        return false;
    }
    
    function checkPermission(){
        if (isGuest()){
            return include 'HeaderGuest.php';
        }
        elseif (isUser()) {
            return include 'HeaderUser.php';
        }
        elseif (isCompany()){
            return include 'HeaderCompany.php';
        }
        elseif (isAdmin()){
            return include 'HeaderAdmin.php';
        }
        elseif (isPoster()){
            return include 'HeaderPoster.php';
        }
        elseif (isEmployer()){
            return include 'HeaderEmployer.php';
        }        
    }

    function checkLogin(){
        //Da dang nhap thi chuyen huong
        if (isset($_SESSION['username'])){
            Header( "HTTP/1.1 301 Moved Permanently" );
            header('Location: index-2.php');
        }
    }

    function checkLogout(){
        //Chua dang nhap thi chuyen huong
        if (!isset($_SESSION['username'])){
            Header( "HTTP/1.1 301 Moved Permanently" );
            header('Location: index.php');
        }
    }
?>