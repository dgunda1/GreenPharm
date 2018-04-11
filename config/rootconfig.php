<?php
if (isset($_SERVER['HTTP_HOST']))
{
    $host = $_SERVER['HTTP_HOST'];
    if($_SERVER['HTTP_HOST'] == "localhost")
    {
        $root =  realpath($_SERVER["CONTEXT_DOCUMENT_ROOT"]);
        //define("ROOT",$root."/greenpharm/test/public_html");
        define("ROOT",$root);
        $root = ROOT;
    }
    else
    {
        $root =  realpath($_SERVER["CONTEXT_DOCUMENT_ROOT"]);
    }
}
else
{
    $root =  realpath($_SERVER["CONTEXT_DOCUMENT_ROOT"]);
}
session_start();
//$user_name = $_SESSION['user']['name'] ;
//$user_email = $_SESSION['user']['mail'] ;
//$user_pantherid = $_SESSION['user']['pid'] ;
//include $root.'/authenticate.php';
//echo $root
?>