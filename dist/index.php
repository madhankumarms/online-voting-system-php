<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voting System | Online voting management system</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        .right-shift {
            max-width: 400px;
        }

        .right-shift:first-child {
            right: 5rem;
        }

        .right-shift:last-child{
            right: 3rem;
        }
    </style>
</head>
<body class="bg-gray-100">
    <div class="block md:flex">
        <div class="bg-green-700 md:h-screen flex justify-center items-center md:w-2/3 px-8">
            <div>
                <h1 class="text-white font-bold text-5xl">Voting Management System</h1>
                <h2 class="text-2xl text-green-200 font-semibold">Online voting system makes voting simple.</h2>
            </div>
        </div>
        <div class="flex flex-col justify-center md:w-1/3">
            <div class="bg-white shadow-lg flex items-center justify-around px-8 py-4 rounded-lg lg:relative right-shift">
                <div class="h-12 w-12 bg-green-500 rounded-full"></div>
                <p class="text-gray-700 pl-4 pr-8 text-md">Already a member <a href="login.php" class="btn btn-green hover:bg-green-700">Login</a></p>
            </div>
            <div class="bg-white shadow-lg flex items-center justify-around px-8 py-4 rounded-lg my-8 lg:relative right-shift">
                <div class="h-12 w-12 bg-orange-500 rounded-full mx-2"></div>
                <p class="text-gray-700 pl-4 pr-8 text-md">New to this site <a href="signup.php" class="btn btn-orange hover:bg-orange-600">Sign up</a></p>
            </div>
        </div>
    </div>
</body>
</html>