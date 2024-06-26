<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: url("img/backgroundimg.jpg");
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            width: 300px;
            padding: 16px;
            background-color: rgba(255, 255, 255, 0.9);
            border: 1px solid black;
            border-radius: 15px;
        }
        input[type=text], input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        button:hover {
            opacity: 0.8;
        }
        .nav-buttons {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .nav-buttons button, .nav-buttons .fa {
            height: 40px;
            width: 80px;
            border: none;
            outline: none;
            font-size: 20px;
            font-weight: 600;
            color: #383838;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
            margin: 5px 0;
        }
        .fa {
            font-size: 20px;
            padding: 10px 18px;
        }
        #back, .fa-mail-forward {
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        #next, .fa-mail-reply {
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }
        .fa-mail-reply {
            background: linear-gradient(#07ffb0, #4caf50);
        }
        .fa-mail-forward {
            background: linear-gradient(#ffeb3b, #ff5722);
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }
        function goNext() {
            window.history.forward();
        }
        function validateForm() {
            var x = document.forms["loginForm"]["uname"].value;
            if (x == "") {
                alert("Username must be filled out");
                return false;
            }
            var y = document.forms["loginForm"]["psw"].value;
            if (y == "") {
                alert("Password must be filled out");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
    <div class="container">
        <h2>Login to your account</h2>
        <form name="loginForm" onsubmit="return validateForm()">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit" name="login" value="login">Login</button>
            <a href="forget_password.php">Forget Password</a>
        </form>
    </div>
    <div class="nav-buttons">
        <i class="fa fa-mail-reply" aria-hidden="true" onclick="goBack()"></i>
        <button id="back" onclick="goBack()">BACK</button>
        <button id="next" onclick="goNext()">NEXT</button>
        <i class="fa fa-mail-forward" aria-hidden="true" onclick="goNext()"></i>
    </div>
</body>
</html>
