<?php

include('connect.php');

$firstName = $lastName = $email = $subject = $comment = $success = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $firstName = test_input($_POST['firstname']);
  $lastName = test_input($_POST['lastname']);
  $email = test_input($_POST['email']);
  $subject = test_input($_POST['subject']);
  $comment = test_input($_POST['message']);

  $insertData = "INSERT INTO contact (firstname, lastname, email, subject, comment)
                  VALUES ('$firstName', '$lastName', '$email', '$subject', '$comment')";
  $conn->query($insertData);

  $success = 'Submit Successful';
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
                        <span id="fnameErr" class="error"></span>
                    </div>

                    <div class="row">
                        <label class="hidden" for="lname"></label>
                        <input class="name" type="text" id="lname" name="lastname" placeholder="Last Name . . .">
                        <span id="lnameErr" class="error"></span>
                    </div>

                    <div class="row-full">
                        <label class="hidden" for="email"></label>
                        <input class="email" type="email" id="email" name="email" placeholder="Email Address . . .">
                        <span id="emailErr" class="error"></span>
                    </div>

                    <div class="row-full">
                        <label class="hidden" for="subject"></label>
                        <input class="subject" type="text" id="subject" name="subject" placeholder="Subject . . .">
                        <span id="subjectErr" class="error"></span>
                    </div>

                    <div class="row-full">
                        <label class="hidden" for="message"></label>
                        <textarea class="message" id="message" name="message" placeholder="Message . . ."></textarea>
                        <span id="messageErr" class="error"></span>
                        <span id="char-count"></span>
                    </div>

                     <div class="row-full">
                        <input id="btn" class="submit-btn" type="submit" value="Submit" name="submit">
                    </div>
                    <div class="row-full suc-mess">
                        <span id="success"></span>
                        <?php
                        echo '<span class="succ">' . $success . '</span>'; 
                        ?>
                    </div>
                </form>