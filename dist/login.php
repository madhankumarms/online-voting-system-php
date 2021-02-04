<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        body {
            background: url('img/login/authenticate.png') top right no-repeat;
            position: relative;
        }

        #login-section {
            max-width: 600px;
        }
    </style>
</head>
<body class="flex md:ml-64 justify-start items-center h-screen">
    <div id="login-section" class="p-8 bg-green-300 shadow-xl rounded-lg">
        <div>
            <h1 class="font-bold tracking-wider uppercase text-center text-gray-700 text-xl mb-4">Login Page</h1>
            <div class="w-full max-w-xs">
        </div>
        <div class="w-full max-w-xs">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="post" action="">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                        Username
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="username" type="text" placeholder="Username">
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Password
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" placeholder="******************">
                </div>
                <div class="flex items-center justify-between">
                    <input class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline cursor-pointer" type="submit" value="Sign in">
                    <a class="ml-8 inline-block align-baseline font-bold text-sm text-green-500 hover:text-green-800" href="#">
                        Forgot Password?
                    </a>
                </div>
                
            </form>
        </div>
    </div>
</body>
</html>