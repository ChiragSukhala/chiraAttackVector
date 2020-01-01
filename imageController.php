<?php
session_start();

//auth check
if(!isset($_SESSION['user'])){
   echo "Login First";
   die();
  } 

//secure mode check
if(!isset($_GET['user'])){
    $user = $_SESSION['user'];
}else{
    $user= $_GET['user'];
}

$type = $_GET['type'];

$covers = [
    "pacto-visual-cWOzOnSoh6Q-unsplash.jpg",
    "hack-capital-uv5_bsypFUM-unsplash.jpg",
    "ilya-pavlov-OqtafYT5kTw-unsplash.jpg",
    "mark-harrison-o66pgmxwjaU-unsplash.jpg"
];






// open the file in a binary mode
if($type == 'profile'){
    $name = './assests/profile_picture/0'.$user.'.jpeg';
}else{
    $name = './assests/cover_picture/'.$covers[$user-1];
}

$fp = fopen($name, 'rb');

// send the right headers
header("Content-Type: image/png");
header("Content-Length: " . filesize($name));

// dump the picture and stop the script
fpassthru($fp);
exit;
?>