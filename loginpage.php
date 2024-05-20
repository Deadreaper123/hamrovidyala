<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            /* background-color: #f3f3f3; */
            background-image: url("img/backgroundimg.jpg");
        }
        .container {
            width: 300px;
            padding: 16px;
            background-color: none;
            margin: 0 auto;
            margin-top: 100px;
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
    </style>
</head>
<body>
    <div class="container">
        <h2>Login your account</h2>
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <button type="submit">Login</button>
    </div>

    <script>
        function validateForm() {
            var x = document.forms["myForm"]["uname"].value;
            if (x == "") {
                alert("Username must be filled out");
                return false;
            }
            var y = document.forms["myForm"]["psw"].value;
            if (y == "") {
                alert("Password must be filled out");
                return false;
            }
        }
    </script>


</body>
</html>