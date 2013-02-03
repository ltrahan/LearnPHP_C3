<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Your feedback</title>
    </head>
    <body>
        <?php //Script 3.3 handle_form.php
        ini_set('display_errors', 1); //let me learn from my errors
        error_reporting(E_ALL | E_STRICT); //show all possible problems

//this page receives data from feedback.html
        // it will receive title,name,email, response, comments and submit in $_POST
        $title=$_POST['title'];
        $name=$_POST['name'];
        $response=$_POST['response'];
        $comments=$_POST['comments'];
        
        print "<p>Thank you, $title $name, for your comments.</p>
                <p> You stated that you found this example to be
                 '$response' and added:<br />$comments</p>";
        ?>
    </body>
</html>
