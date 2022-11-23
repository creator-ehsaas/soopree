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


    <title>Users</title>
</head>
<body class="h-full">

<div class="min-h-full">
  <?php include('nav.php');?>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">All Users</h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="rounded-lg h-96">
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow sm:rounded-lg">
<div class="px-4 sm:px-6 lg:px-8 py-4 sm:py-6 lg:py-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-xl font-semibold text-gray-900">Users</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
    </div>
    <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
      <a href="add_user.php" class="inline-flex items-center justify-center rounded-md border border-transparent bg-blue-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 sm:w-auto">Add user</a>
    </div>
  </div>
  <div class="mt-8 flex flex-col">
    <div class="-my-2 -mx-4 sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle">
        <div class="shadow-sm ring-1 ring-black ring-opacity-5">
          <table class="min-w-full border-separate" style="border-spacing: 0">
            <thead class="bg-gray-50">
              <tr>
                  <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Parents Name</th>
                  <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Students Name</th>
                  <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">PRN</th>
                  <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:pl-6 lg:pl-8">Batch</th>
                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter lg:table-cell">Email</th>
                <th scope="col" class="sticky top-0 z-10 hidden border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter sm:table-cell">Phone no</th>
                <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 px-3 py-3.5 text-left text-sm font-semibold text-gray-900 backdrop-blur backdrop-filter">Action</th>
                <th scope="col" class="sticky top-0 z-10 border-b border-gray-300 bg-gray-50 bg-opacity-75 py-3.5 pr-4 pl-3 backdrop-blur backdrop-filter sm:pr-6 lg:pr-8">
                  <span class="sr-only">Edit</span>
                </th>
              </tr>
            </thead>
            <tbody class="bg-white">
            <?php
    // $user_id = $_SESSION['id'];
    $m4 = "Select * from users";
    $requests = mysqli_query($conn, $m4);
    $num_req = mysqli_num_rows($requests);
    // $requests = mysqli_fetch_assoc($j7)
    if($num_req>0){
      foreach ($requests as $req) {
        echo '<tr>
        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">'.$req["fname"].' '.$req["lname"].'</td>
        <td class="whitespace-nowrap border-b border-gray-200 py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">'.$req["stdFname"].' '.$req["stdLname"].'</td>
        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">'.$req["prn"].'</td>
        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">'.$req["batch"].'</td>
        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500 hidden lg:table-cell">'.$req["email"].'</td>
        <td class="whitespace-nowrap border-b border-gray-200 px-3 py-4 text-sm text-gray-500">'.$req["phone"].'</td>
        <td class="relative whitespace-nowrap border-b border-gray-200 py-4 pr-4 pl-3 text-left  text-sm font-medium sm:pr-6 lg:pr-8">
            <a href="edit_user.php" class="text-yellow-600 hover:text-yellow-900 mr-3">Edit</a>
            <a href="users.php?del='.$req["id"].'" class="text-red-600 hover:text-red-900">Delete</a>
        </td>
      </tr>';

            

      }
      if(isset($_GET["del"])){
        // delete request
        $id = $_GET["del"];
        $sql = "DELETE FROM users WHERE id=".$id;
        $delReq = mysqli_query($conn, $sql);

        if ($conn->query($sql) === TRUE) {
          ?>
          <script>
            // redirect to index.php
            window.location.href = "users.php";
          </script>
          <?php
        } else {
          ?><script> alert("Error deleting record: " . $conn->error);</script><?php
        }

      }
    }else{
      echo '
      <div class="rounded-md bg-gray-50 px-6 py-5 sm:flex sm:items-start justify-center">
                <span class="text-gray-700 font-medium">No Users</span>
      </div>
      ';
    }
      ?>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
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