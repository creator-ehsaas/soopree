<?php
$user='root';
$pass='';
$db='spsy';
// Create connection
$db = new mysqli('localhost',$user, $pass, $db) or die("Connection failed: ");
// Check connection
// echo "connection success";

$k0 = false;
$r1 = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $y2 = $_POST["email"];
    $s3 = $_POST["password"];
    $m4 = "Select * from auth where userEmail='$y2'";
    $h5 = mysqli_query($db, $m4);
    $j7 = mysqli_num_rows($h5);
    if ($j7 == 1) {
        while ($b8 = mysqli_fetch_assoc($h5)) {
          $savedIp=$b8['userIp'];
            if ($s3 == $b8['userPass']) {
                $k0 = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $y2;
                if($IP == $savedIp){
                    header("location: dashbord.php");
                } else {
                // $err = "Invalid Credentials 1 $y2 and $s3";
                echo "<script>popupwarn('Invalid Credentitals')</script>";
            }
        }
    } else {
      // $err = "Invalid Credentials 2 $j7";
echo "<script>popupwarn('Invalid credentials')</script>"; 
    }
}
}

?>  