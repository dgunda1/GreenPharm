<?php
if (session_id() == "") {
    session_start();
}

if ($_SESSION['user']['mail']=="") {
    
    header('Location: ./../../index.html');
};
?>