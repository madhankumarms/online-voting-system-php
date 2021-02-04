<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up form</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            background: url('img/login/signup.png') no-repeat top left;
        }
    </style>
</head>
<body class="flex flex-cols justify-end items-center h-screen">
    <div class="bg-orange-500 shadow-xl p-6 rounded-lg md:mr-48">
        <div>
            <h1 class="text-center text-2xl tracking-wider text-white font-semibold mb-4 uppercase">Signup Form</h1>
        </div>
        <form class="w-full max-w-lg bg-white p-6 rounded-lg" method="POST" action="">
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
        First Name
      </label>
      <input name="fname" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Eg: Sparky">
    </div>
    <div class="w-full md:w-1/2 px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
        Last Name
      </label>
      <input name="lname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
    </div>
  </div>
  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
        Password
      </label>
      <input name="password" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
      <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
  </div>

  <div class="flex flex-wrap -mx-3 mb-6">
    <div class="w-full px-3">
      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-email">
        Email
      </label>
      <input name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-email" type="email" placeholder="example@gmail.com">
      <!-- <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> -->
    </div>
  </div>
  <div class="flex justify-center">
    <input type="submit" value="Submit" class="btn btn-orange hover:bg-orange-600 cursor-pointer text-white font-semibold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
  </div>
</form>
    </div>
</body>
</html>