<?php 
include('check_auth.php');
include('db.php');


if(isset($_POST['save']))
{	 
	 $reqSub = $_POST['reqSub'];
	 $priority = $_POST['priority'];
	 $message = $_POST['msg'];
     $user_id = $_SESSION['id'];


	 $sql = "INSERT INTO requests (user_id, req, pri, msg) VALUES ('$user_id','$reqSub','$priority', '$message')";
	 if (mysqli_query($db, $sql)) {
		header("location:index.php");
	 } else {
		echo "Error: " . $sql . " " . mysqli_error($conn);
	 }



}
?>
<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Raise Request</title>
</head>
<body class="h-full overflow-auto">

<div class="min-h-full">
<?php include('nav.php');?>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">Raise A Request</h1>
    </div>
  </header>
  <main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
      <!-- Replace with your content -->
      <div class="px-4 py-6 sm:px-0">
        <div class="rounded-lg h-96">
            <!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white shadow sm:rounded-lg">
<div class="bg-white mb-8 shadow px-4 py-5 sm:rounded-lg sm:p-6">
    <div class="">
      <div class="mt-5 md:mt-0 md:col-span-2">
        <form action="raiseReq.php" method="POST">
          <div class="grid grid-cols-6 gap-6">
            <div class="col-span-6 sm:col-span-4">
              <label for="reqSub" class="block text-sm font-medium text-gray-700">Request Subject</label>
              <input type="text" name="reqSub" id="reqSub" autocomplete="given-name" class="mt-1 py-3 px-5 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md">
            </div>



            <div class="col-span-6 sm:col-span-2">
              <label for="priority" class="block text-sm font-medium text-gray-700">Priority</label>
              <select id="priority" name="priority" class="mt-1 block w-full py-3 px-5 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                <option value=2>LOW</option>
                <option value=1>MEDIUM</option>
                <option value=0>HIGH</option>
              </select>
            </div>

          </div>
          <div class="sm:grid sm:gap-4 sm:items-start sm:pt-5">
          
<label for="msg" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
<textarea id="msg" name="msg" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..."></textarea>

        </div>
        <div class="flex justify-end md:justify-start py-4">
        <button type="submit" name="save" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
          <span class="mr-2">Send Request</span>
  <!-- Heroicon name: solid/mail -->
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
</svg>
  
</button>
        </div>
        
        </form>
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