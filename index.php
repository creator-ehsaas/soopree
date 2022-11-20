<?php 
include('check_auth.php');
include('db.php');
?>
<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>


    <title>Dashboard</title>
</head>
<body class="h-full">

<div class="min-h-full">
  <?php include('nav.php');?>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">My Requests</h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="rounded-lg h-96">
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:p-6">
    <div class="mt-5">
    <?php
    $user_id = $_SESSION['id'];
    $m4 = "Select * from requests where user_id='$user_id'";
    $requests = mysqli_query($db, $m4);
    $num_req = mysqli_num_rows($requests);
    // $requests = mysqli_fetch_assoc($j7);
    if($num_req>0){
      foreach ($requests as $req) {
        if($req['pri'] == 1){
          $color = "bg-yellow-50";
          $tclr = "text-yellow-600";
          $pri= "Medium";
        }else if($req['pri'] == 2){
          $color = "bg-gray-50";
          $tclr = "text-gray-600";
          $pri= "Low";
        }else {
          $color = "bg-red-50";
          $tclr = "text-red-600";
          $pri= "Urgent";
        }
        echo '<div class="rounded-md '.$color.' px-6 py-5 sm:flex sm:items-start sm:justify-between mb-3">
                <div class="sm:flex sm:items-start">
                <div class="mt-3 sm:mt-0 sm:ml-4">
                  <div class="text-sm font-medium text-gray-900 w-full">'.$req["approval"].' - <span class="ml-2 uppercase font-medium '.$tclr.'">'.$pri.'</span></div>
                  <div class="mt-1 text-sm text-gray-600 sm:flex sm:items-center">
                    <div>'.$req["req"].'</div>
                    <span class="hidden sm:mx-2 sm:inline" aria-hidden="true"> &middot; </span>
                    <div class="mt-1 sm:mt-0">'.$req["created_at"].'</div>
                  </div>
                </div>
              </div>
              <div class="mt-4 sm:mt-0 sm:ml-6 sm:flex-shrink-0">
                <a href="viewReq.php" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:text-sm">View</a>
              </div>
            </div>';
      }
    }else{
      echo '
      <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start justify-center">
                <span class="text-gray-700 font-medium">No Requests</span>
      </div>
      ';
    }
      ?>
    </div>
  </div>
</div>

        </div>
      </div>
      <!-- /End replace -->
    </div>
  </main>
</div>

</body>
</html>