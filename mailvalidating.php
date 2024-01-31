<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'check.formsubmission@gmail.com';
  $mail->Password = 'mehzqzvfwwggxpzo';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom('enquire.3bigha@gmail.com','Website Enquiry Form');
  $mail->addAddress('enquire.3bigha@gmail.com');
  $mail->isHTML(true);
  $mail->Subject = $_POST["subject"];
  $mail->Body = "<b>Name :</b> ".$_POST["name"]."<br>".
                "<b>Subject :</b> ".$_POST["subject"]."<br>".
                "<b>Email :</b> ".$_POST["email"]."<br>".
                "<b>Mobile No. :</b> ".$_POST["mob_no"]."<br>".
                "<b>Message :</b> ".$_POST["message"];
  if($mail->send()){
    echo "<script>alert('Form submit sucessfully owner will be contact soon...')</script>";
    echo "<script>location.href='contact.php'</script>";
  }
  else{
    echo "<script>alert('Error please try again')</script>";
  }
}
?>











<!--
                    <form action="mailvalidating.php" method="POST">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name="name" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" name="email" id="email"  placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control"  name="subject" id="subject"  placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control"   name="message" id="message" placeholder="Leave a message here" style="height: 200px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit"  name="send">Send Message</button>
                            </div>
                        </div>
                    </form>


-->