<?php
include_once("./dbconfig.php");

// 2 Files and move 2 files to folder
$music_img = $_FILES['music-image'];
$music_audio = $_FILES['music-audio'];

$music_target_dir = "../uploads/music/";
$music_image_target_dir = "../uploads/music_images/";

$music_target_file = $music_target_dir . basename($_FILES['music-audio']['name']);
$music_image_target_file = $music_image_target_dir . basename($_FILES['music-image']['name']);

move_uploaded_file($_FILES['music-image']['tmp_name'], $music_image_target_file);
move_uploaded_file($_FILES['music-audio']['tmp_name'], $music_target_file);


//Insert New Song to database
$music_name = $_POST['music-name'];
$artist_f_name = $_POST['artist_f_name'];
$artist_l_name = $_POST['artist_l_name'];
$duration = $_POST['music_duration'];

$music_target_dir = "./uploads/music/";
$music_image_target_dir = "./uploads/music_images/";

$music_target_file = $music_target_dir . basename($_FILES['music-audio']['name']);
$music_image_target_file = $music_image_target_dir . basename($_FILES['music-image']['name']);

$sql = "INSERT INTO music(Music_Name, F_Name, L_Name, Music_Duration, Music_Image, Music_Audio) VALUES('$music_name', '$artist_f_name', '$artist_l_name', '$duration', '$music_image_target_file', '$music_target_file');";

if($conn->query($sql)){
    echo "<script type='text/javascript'>alert('Your music has been added to website successfully!');</script>";
    echo  "<script type='text/javascript'> window.location.href='../music.php'; </script>";
}else{
    echo "<script type='text/javascript'>alert('File Uploading Failed!');</script>";
    echo  "<script type='text/javascript'> window.location.href='../add-music.php'; </script>";
}


$conn->close();


?>