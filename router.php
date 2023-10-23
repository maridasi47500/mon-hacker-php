
<?php

include 'class.welcome.php';
use mywelcome\WelcomeClass as Welcome;
$path = pathinfo($_SERVER["SCRIPT_FILENAME"]);
if ($path["extension"] == "el") {
    header("Content-Type: text/x-script.elisp");
    readfile($_SERVER["SCRIPT_FILENAME"]);
//}
//
//else if (preg_match('`/`', $_SERVER["REQUEST_URI"])) {
//    header("Content-Type: text/html");
//$filename = "index.html";
//myProgram=new WelcomeClass("welcome");
//myProgram.set_path("./welcome");
//    echo $myProgram.render($filename);}
} else if (preg_match('/\.(?:png|jpg|jpeg|gif)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
} else { 
    header("Content-Type: text/html");
$filename = "index.html";
           $title="Bienvenue ici heyhey";
$myProgram=new Welcome($title);
$myProgram->set_path("./welcome");
    echo $myProgram->render($filename);
}
?>

