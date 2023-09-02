//Contact Form in PHP
<?php
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $phone = htmlspecialchars($_POST['phone']);
  $website = htmlspecialchars($_POST['website']);
  $message = htmlspecialchars($_POST['message']);

  
  require_once 'vendor/autoload.php';
  use Twilio\Rest\Client;

  $sid    = "enter your onwn key";
  $token  = "enter your own key";
  $twilio = new Client($sid, $token);

  $message = $twilio->messages
    ->create("+918847860070",
      array(
        "from" => "+17193150959",
        "body" => $message
      )
    );

print($message->sid);
?>