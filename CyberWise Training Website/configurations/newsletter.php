<?php

include_once("./dbconfig.php");

$submit_button = $_POST["news-letter-submit"];
$subscriber_email = $_POST["newsletter-email"];

if(isset($submit_button) && strlen($subscriber_email) !== 0){
    $sql = "INSERT INTO newsletter_subscribers(subscriber_email) VALUES('$subscriber_email');";
    
    if($conn->query($sql)){
        echo "<script type='text/javascript'>alert('You have successfully subscribed to our newsletter!');</script>";
        echo  "<script type='text/javascript'> window.location.href='../'; </script>";
    }

}else {
    echo "<script type='text/javascript'>alert('Please enter a valid email to subscribe to newsletter!');</script>";
    echo  "<script type='text/javascript'> window.location.href='../'; </script>";
}

$conn->close();

?>