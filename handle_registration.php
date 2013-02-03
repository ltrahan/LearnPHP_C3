<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Registration Confirmation</title>
    </head>
    <body>
        
            <?php // script to handle registration information
                ini_set('display_errors', 1);
                error_reporting(E_ALL | E_STRICT);
                // set the array containing course information
                $course_one=array('title'=>'Togaf foundations 9.1 L1 and 2','courseDate'=>'March 28,2013','duration'=>'5 days');
                $course_two=array('title'=>'Togaf foundations 9.2 for Practitioners','courseDate'=>'April 28,2013','duration'=>'5 days');
                $course_three=array('title'=>'Togaf foundations 9.2 L1 and L2','courseDate'=>'June 28,2013','duration'=>'5 days');
                $courses=array(111622 => $course_one,111644=>$course_two,113253 =>$course_three);
                // get the variables from $_POST
                $chosenCourseId=$_POST['course'];
                $title=$_POST['title'];
                $registrantName=$_POST['name'];
                $registrantEmail=$_POST['email'];
                $registrantPhone=$_POST['phone'];
                $paymentMethod=$_POST['paymentMethod'];
                
                //now lets get the course details from the array
                $courseChosen = $courses[$chosenCourseId]['title'];
                $courseChosenDate = $courses[$chosenCourseId]['courseDate'];
                $courseChosenDuration = $courses[$chosenCourseId]['duration'];
                
                
                print "<p>Thank you for registering for the following course:</br /><strong>$courseChosen
                </strong><br />Starting Date: $courseChosenDate<br />Duration: $courseChosenDuration</p><p>We have the following registration information now on file:<br />
                    Name:$registrantName<br />
                    Email:$registrantEmail<br />
                    Phone:$registrantPhone</p>";
                             
               if ($paymentMethod === 'offline') {
                   
                   print "<p>As you have selected Offline as your prefered payment method, someone will
                       call you at $registrantPhone to make arrangements within the next 24 hours</p>";
                   
               } else {
                   
                   print "<p>You have chosen Paypal as a payment method. A PayPal invoice will be emailed to you in the next few minutes.</p>";
               }       
            ?>
        
    </body>
</html>
