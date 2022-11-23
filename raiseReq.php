<?php 
include('db.php');
include('check_auth.php');

if(isset($_POST['raise'])){
    $req = $_POST['reqSub'];
    $pri = $_POST['priority'];
    $msg = $_POST['msg'];
    $user_id = $_SESSION['id'];
    $m4 = "INSERT INTO requests (user_id, req, pri, msg) VALUES ('$user_id', '$req', '$pri', '$msg')";
    $h5 = mysqli_query($conn, $m4);
    if($h5){
        echo "<script>alert('Request raised successfully')</script>";
        header("location: index.php");
    }else {
        echo "<script>alert('Request failed to raise')</script>";
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

    <title>Raise A Request</title>
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
              <input type="text" name="reqSub" id="reqSub" autocomplete="given-name" class="mt-1 py-3 px-5 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 border rounded-md" required>
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
<textarea id="msg" name="msg" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your thoughts here..." required></textarea>

        </div>
        <div id="" class="flex justify-end md:justify-start rounded-md shadow-sm hidden">
    <input type="text" id="hs-trailing-button-add-on-multiple-add-ons" name="hs-trailing-button-add-on-multiple-add-ons" class="py-3 px-4 block w-full border-gray-300 border shadow-sm rounded-l-md text-sm focus:z-10 focus:border-blue-500 focus:z-10 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400">
    <button type="button" class="py-3 px-4 inline-flex flex-shrink-0 justify-center items-center gap-2 rounded-r-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:z-10 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all text-sm">
      Verify
    </button>
  </div>
  <div id="recaptcha-container" class="mt-4"></div>
              <div id="verify" style="display: none;" class="m-2">
                <label for="otp" class="block text-sm font-medium text-gray-700"> OTP </label>
                <div class="mt-1">
                  <input id="verificationCode" name="otp" type="text" autocomplete="off" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>
              <div id="btn"></div><div>
              <button type="submit" id="otp" class="mt-4 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onclick="sendCode()"><span class="mr-2">Verfiy OTP</span>
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(255, 255, 255, 1);transform:msFilter;"><path d="M11.488 21.754c.294.157.663.156.957-.001 8.012-4.304 8.581-12.713 8.574-15.104a.988.988 0 0 0-.596-.903l-8.05-3.566a1.005 1.005 0 0 0-.813.001L3.566 5.747a.99.99 0 0 0-.592.892c-.034 2.379.445 10.806 8.514 15.115zM8.674 10.293l2.293 2.293 4.293-4.293 1.414 1.414-5.707 5.707-3.707-3.707 1.414-1.414z"></path></svg>
</button> 
<button type="submit" id="submit" name="raise" class="hidden mt-4 justify-center inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"><span class="mr-2">Send Request</span>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
  <path d="M3.478 2.405a.75.75 0 00-.926.94l2.432 7.905H13.5a.75.75 0 010 1.5H4.984l-2.432 7.905a.75.75 0 00.926.94 60.519 60.519 0 0018.445-8.986.75.75 0 000-1.218A60.517 60.517 0 003.478 2.405z" />
</svg>
</button>
              </div>
        </form>
        <?php 

          
            $userEmail = $_SESSION['email'];
            $query = "select * from `users` where `email`='$userEmail'";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_array($res)) {
              $contact = $row['phone'];
            }
          
            echo '<script>let contact=' . $contact . '</script>';

            

        
        ?>
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
<script src="https://www.gstatic.com/firebasejs/8.3.1/firebase.js"></script>
<script src="firebase.js"></script>
<script>
    // Your web app's Firebase configurationdocument.getElementById("btn")
    var firebaseConfig = {
      apiKey: "AIzaSyBo8zTqdzMpARRMGo5Tfo1A2GOgPPrN9gM",
      authDomain: "soopree-cf241.firebaseapp.com",
      projectId: "soopree-cf241",
      storageBucket: "soopree-cf241.appspot.com",
      messagingSenderId: "939711273555",
      appId: "1:939711273555:web:d42b2aba59e6edd7de44a6",
      measurementId: "G-GD9SSVMH39"                           
    };

    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();

    function sendCode() {
      let enteredVal = document.getElementById("msg").value;
      if (enteredVal.length > 0) {
        phoneAuth();
        document.getElementById("recaptcha-container").style.display = 'none';
        document.getElementById("verify").style.display = 'block';
        document.getElementById("otp").style.display = 'none';
        document.getElementById("btn").innerHTML = `<button type="Button" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" onClick="codeverify()">VERIFY</button>`;
      }
    }
  </script>
</body>
</html>