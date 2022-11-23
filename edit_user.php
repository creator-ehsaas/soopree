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

    <link href="https://unpkg.com/@tailwindcss/forms@0.2.1/dist/forms.min.css" rel="stylesheet">
    <title>Edit User</title>
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
<div class="h-full">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Student Information</h3>
            <p class="mt-1 text-sm text-gray-600">Fill out all the details about student</p>
        </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="firstname" class="block text-sm font-medium text-gray-700">First name</label>
                    <input type="text" name="firstname" id="firstname" autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="lastname" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="text" name="email" id="email" autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                <div class="col-span-6 sm:col-span-1">
                    <label for="batch" class="block text-sm font-medium text-gray-700">Batch</label>
                    <input type="text" name="batch" id="batch" autocomplete="batch" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="prn" class="block text-sm font-medium text-gray-700">PRN No</label>
                    <input type="text" name="prn" id="prn" autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Street address</label>
                    <input type="text" name="address" id="address" autocomplete="address" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="phone" class="block text-sm font-medium text-gray-700">Phone no</label>
                    <input type="text" name="phone" id="phone" autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" name="city" id="city" autocomplete="address-level2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="state" class="block text-sm font-medium text-gray-700">State / Province</label>
                    <input type="text" name="state" id="state" autocomplete="address-level1" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                    <input type="text" name="postal_code" id="postal_code" autocomplete="postal_code" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
    </div>

    <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Parents Information</h3>
            <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
        </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                    <label for="p_firstname" class="block text-sm font-medium text-gray-700">First name</label>
                    <input type="text" name="p_firstname" id="p_firstname" autocomplete="given-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3">
                    <label for="p_lastname" class="block text-sm font-medium text-gray-700">Last name</label>
                    <input type="text" name="p_lastname" id="p_lastname" autocomplete="family-name" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6">
                    <label for="p_email" class="block text-sm font-medium text-gray-700">Email address</label>
                    <input type="text" name="p_email" id="p_email" autocomplete="email" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-4">
                    <label for="p_address" class="block text-sm font-medium text-gray-700">Street address</label>
                    <input type="text" name="p_address" id="p_address" autocomplete="address" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-2">
                    <label for="p_phone" class="block text-sm font-medium text-gray-700">Phone no</label>
                    <input type="text" name="p_phone" id="p_phone" autocomplete="phone" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                    <label for="p_city" class="block text-sm font-medium text-gray-700">City</label>
                    <input type="text" name="p_city" id="p_city" autocomplete="address-level2" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="p_state" class="block text-sm font-medium text-gray-700">State / Province</label>
                    <input type="text" name="p_state" id="p_state" autocomplete="address-level1" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>

                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                    <label for="p_postal_code" class="block text-sm font-medium text-gray-700">ZIP / Postal code</label>
                    <input type="text" name="p_postal_code" id="p_postal_code" autocomplete="postal_code" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
    <div class="py-5">
        <div class="border-t border-gray-200"></div>
    </div>
    </div>

    <div class="mt-10 sm:mt-0">
    <div class="md:grid md:grid-cols-3 md:gap-6">
        <div class="md:col-span-1">
        <div class="px-4 sm:px-0">
            <h3 class="text-lg font-medium leading-6 text-gray-900">Password</h3>
            <p class="mt-1 text-sm text-gray-600">Set your account password</p>
        </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
        <div class="overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password" autocomplete="none" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="c_password" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" name="c_password" id="c_password" autocomplete="none" class="mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>
                </div>
                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                    <button type="submit" class="inline-flex justify-center py-2 px-8 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Edit</button>
                </div>
                </div>
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