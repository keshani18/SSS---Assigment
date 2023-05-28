<?php
include_once("./dbconfig.php");

// 2 Files and move 2 files to folder
$video_img = $_FILES['video-image'];
$video_audio = $_FILES['video'];

$video_target_dir = "../uploads/video/";
$video_image_target_dir = "../uploads/video_images/";

$video_target_file = $video_target_dir . basename($_FILES['video']['name']);
$video_image_target_file = $video_image_target_dir . basename($_FILES['video-image']['name']);

move_uploaded_file($_FILES['video-image']['tmp_name'], $video_image_target_file);
move_uploaded_file($_FILES['video']['tmp_name'], $video_target_file);


//Insert New Song to database
$video_name = $_POST['video-name'];
$artist_f_name = $_POST['artist_f_name'];
$artist_l_name = $_POST['artist_l_name'];
$duration = $_POST['video_duration'];

$video_target_dir = "./uploads/video/";
$video_image_target_dir = "./uploads/video_images/";

$video_target_file = $video_target_dir . basename($_FILES['video']['name']);
$video_image_target_file = $video_image_target_dir . basename($_FILES['video-image']['name']);

$sql = "INSERT INTO video(V_Name, F_Name, L_Name, V_Duration, Video_Image, Video) VALUES('$video_name', '$artist_f_name', '$artist_l_name', '$duration', '$video_image_target_file', '$video_target_file');";

if($conn->query($sql)){
    echo "<script type='text/javascript'>alert('Your video has been added to website successfully!');</script>";
    echo  "<script type='text/javascript'> window.location.href='../video.php'; </script>";
}else{
    echo "<script type='text/javascript'>alert('File Uploading Failed!');</script>";
    echo  "<script type='text/javascript'> window.location.href='../add-video.php'; </script>";
}


$conn->close();


?>