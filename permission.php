<?php
    function isAdmin(){
        if ($_SESSION['LEVEL'] == '0'){
            return true;
        }
        return false;
    }

    function isCompany(){
        if ($_SESSION['LEVEL'] == '1'){
            return true;
        }
        return false;
    }

    function isPoster(){
        if ($_SESSION['LEVEL'] == '2'){
            return true;
        }
        return false;
    }

    
    function isUser(){
        if ($_SESSION['LEVEL'] == '3'){
            return true;
        }
        return false;
    }
    
?>