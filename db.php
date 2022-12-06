<?php
    $user='root';
    $pass='';
    $db='soopree';
    // Create connection
    $conn = new mysqli('localhost',$user, $pass, $db) or die("Connection failed: ");
    // Check connection
    // echo "connection success";

    $k0 = false;
    $r1 = false;

if (isset($_POST['login'])) {
    $y2 = $_POST["email"];
    $s3 = $_POST["pass"];
    $m4 = "Select * from users where email='$y2'";
    $h5 = mysqli_query($conn, $m4);
    $j7 = mysqli_num_rows($h5);
    $m5 = "Select * from admin where email='$y2'";
    $h6 = mysqli_query($conn, $m5);
    $j8 = mysqli_num_rows($h6);
   
    // echo $j7;
    if ($j7 == 1) {
        while ($b8 = mysqli_fetch_assoc($h5)) {
            // $savedIp=$b8['userIp'];
            if ($s3 == $b8['pass']) {
                $k0 = true;
                session_start();
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $y2;
                $_SESSION['id'] = $b8['id'];
                $_SESSION['email'] = $b8['email'];
                $_SESSION["isUser"] = true;
                $_SESSION["isAdmin"] = false;
                $_SESSION["isDean"] = false;

                // if($IP == $savedIp){
                header("location: index.php");
                // } else {
                //     // $err = "Invalid Credentials 1 $y2 and $s3";
                //     echo "<script>popupwarn('Invalid Credentitals')</script>";
                // }
            } else {
                // $err = "Invalid Credentials 2 $j7";
                echo "<script>alert('Invalid credentials')</script>";
            }

        }
    } 

    if ($j8 == 1) {
        while ($b8 = mysqli_fetch_assoc($h6 )) {
            if ($s3 == $b8['pass']) {
                    $k0 = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $y2;
                    $_SESSION['id'] = $b8['id'];
                    $_SESSION['email'] = $b8['email'];
                    $_SESSION["isAdmin"] = true;
                    $_SESSION["isUser"] = false;
                    $_SESSION["isDean"] = false;
                    header("location: index.php");
                } else {
                    echo "<script>alert('Invalid credentials')</script>";
                    header("location: login.php");

                }

            }
            
        }else {
        // get dean login
        $m4 = "Select * from dean where email='$y2'";
        $h5 = mysqli_query($conn, $m4);
        $j7 = mysqli_num_rows($h5);

        if ($j7 == 1) {
            while ($b8 = mysqli_fetch_assoc($h5)) {
                // $savedIp=$b8['userIp'];
                if ($s3 == $b8['pass']) {
                    $k0 = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $y2;
                    $_SESSION['id'] = $b8['id'];
                    $_SESSION['email'] = $b8['email'];
                    $_SESSION["isDean"] = true;
                    $_SESSION["isAdmin"] = false;
                    $_SESSION["isUser"] = false;
                    // if($IP == $savedIp){
                    header("location: index.php");
                    // } else {
                    //     // $err = "Invalid Credentials 1 $y2 and $s3";
                    //     echo "<script>popupwarn('Invalid Credentitals')</script>";
                    // }
                } else {
                    // $err = "Invalid Credentials 2 $j7";
                    echo "<script>alert('Invalid credentials')</script>";
                    header("location: login.php");

                }

            }
        }
    }


}
?>  