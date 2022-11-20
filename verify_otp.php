<!DOCTYPE html>
<html class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Verify OTP</title>
</head>
<body class="h-full overflow-auto">

<div class="min-h-full ">
<?php include('nav.php');?>

  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold text-gray-900">Verify</h1>
    </div>
  </header>
  <main class="h-full flex justify-center items-center pt-20 md:pt-32">
    <section class="bg-white rounded-lg">
        <div class="max-w-3xl px-6 py-16 mx-auto text-center">
            <h1 class="text-3xl font-semibold text-gray-800">Enter the OTP received !</h1>
            <!-- <p class="max-w-md mx-auto mt-5 text-gray-500 dark:text-gray-400">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, minus tempora nemo quos</p> -->

            <div class="flex flex-col mt-8 space-y-3 sm:space-y-0 sm:flex-row sm:justify-center sm:-mx-2">
                <input id="otp" type="number" class="px-4 py-2 text-gray-700 bg-white border rounded-md sm:mx-2 focus:border-blue-400 focus:outline-none focus:ring focus:ring-blue-300 focus:ring-opacity-40" placeholder="OTP" required>

                <button class="px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-700 rounded-md sm:mx-2 hover:bg-blue-600 focus:outline-none focus:bg-blue-600">
                    Verify
                </button>
            </div>
        </div>
    </section>
  </main>
</div>
</body>
</html>