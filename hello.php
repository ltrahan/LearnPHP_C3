<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Greetings!</title>
    </head>
    <body>
        <?php  // Script 3.7 - hello.php
        ini_set('display_errors',1);    //turn on error display in case not set
        error_reporting(E_ALL | E_STRICT); //make error reporting tell me all
        // now set the variables from the $_GET and display a greeting
        $name=$_GET['name'];
        print"<p>Hello, <span style=\"font-weight:bold\">$name</span>!</p>"; 
        ?>
    </body>
</html>
