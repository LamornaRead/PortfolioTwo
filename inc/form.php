<?php

include('connect.php');

$firstName = $lastName = $email = $subject = $comment = $success = "";
$errors = [];
$inputs = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $firstName = test_input($_POST['firstname']);
  $lastName = test_input($_POST['lastname']);
  $email = test_input($_POST['email']);
  $subject = test_input($_POST['subject']);
  $comment = test_input($_POST['message']);


    //validate name
    if ($firstName === "") {
        $errors['firstname'] = 'Please fill in first name!';
    } else {
        $inputs['firstname'] = $firstName;
    }

    if ($lastName === "") {
        $errors['lastname'] = 'Please fill in last name!';
    } else {
        $inputs['lastname'] = $lastName;
    }


    // validate email 
    if ($email === "") {
        $errors['email'] = 'Please fill in email!';
    } else {
        $email = filter_var($email, FILTER_VALIDATE_EMAIL);
        if($email === false) {
            $errors['email'] = 'Please enter a valid email!';
        } else {
            $inputs['email'] = $email;
        }
    }

    //validate subject
    if($subject === "") {
        $errors['subject'] = 'Please fill in subject!';
    } else {
        $inputs['subject'] = $subject;
    }

    //validate message 
    if ($comment === "") {
        $errors['message'] = 'Please fill out a message for us!';
    } else {
        $inputs['message'] = $comment;
    }

    if(count($errors) === 0) {
        $insertData = "INSERT INTO contact (firstname, lastname, email, subject, comment)
        VALUES ('$firstName', '$lastName', '$email', '$subject', '$comment')";

        $conn->query($insertData);

        $success = 'Submit Successful';
      }


}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

?>
                <form id="form-contact" class="form" name="contact-form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>#contact" onsubmit="return validateForm()">
                    <div class="row-full form-heading">
                        <h4 class="section-heading">Send Us A Message <i class="fa-solid fa-arrow-right"></i> <span class="small-hidden"><i class="fa-solid fa-envelope"></i></span></h4>
                    </div>

                    <div class="row">
                        <label class="hidden" for="fname"></label>
                        <input class="name" type="text" id="fname" name="firstname" placeholder="First Name . . .">
                    </div>

                    <div class="row">
                        <label class="hidden" for="lname"></label>
                        <input class="name" type="text" id="lname" name="lastname" placeholder="Last Name . . .">
                    </div>

                    <div class="row-full">
                        <label class="hidden" for="email"></label>
                        <input class="email" type="email" id="email" name="email" placeholder="Email Address . . .">
                    </div>

                    <div class="row-full">
                        <label class="hidden" for="subject"></label>
                        <input class="subject" type="text" id="subject" name="subject" placeholder="Subject . . .">
                    </div>

                    <div class="row-full">
                        <label class="hidden" for="message"></label>
                        <textarea class="message" id="message" name="message" placeholder="Message . . ."></textarea>
                        <span id="messageErr" class="error"></span>
                    </div>

                     <div class="row-full">
                        <input id="btn" class="submit-btn" type="submit" value="Submit" name="submit">
                    </div>
                    <div class="row-full suc-mess">
                        <span id="success"></span>
                        <?php
                            if(count($errors) === 0) {
                                echo '<span class="succ">' . $success . '</span>'; 
                            } else {
                                foreach($errors as $err) {
                                    echo '<div>';
                                    echo '<span class="error">' . $err . '</span>';
                                    echo '</div>';
                                }
                            }
                        
                        ?>
                    </div>
                </form>