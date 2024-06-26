<?php
 Require database connection
 require 'connection.php';
session_start();

// Check if the form is submitted
if (isset($_POST['login'])) {
    $username=$_POST['uname'];
    $password=$_POST['psw'];


    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'home';

    // Create a connection
    $conn =mysqli_connect($server, $user, $password, $database);
    if(!conn){
        die("cannot connect");
    }
    else{
        echo"connected sucessfully";
    }
    $sql="insert into menu values(7,'hari',948503)";

  
    // Securely get the username and password from the form
    $username = $conn->real_escape_string($_POST['uname']);
    $password = $conn->real_escape_string($_POST['password']);

    // Prepare and execute the SQL statement
   $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);
    $sql="insert into home values("

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        $_SESSION['id'] = $user['id'];
        $_SESSION['un'] = $user['username'];
        $_SESSION['type'] = $user['type'];
        header('location: dashboard.php');
    } else {
        echo '<script>alert("Wrong Credentials")</script>';
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    
<div class="container">

    <?php
        include 'headernav.php';
    ?>

    <div class="row">
        <div class="col-6 offset-3">
            <form method="post" action="logincheck.php">
                <div class="mb-3">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>

                <div class="mb-3">
                    <input type="submit" value="Login" class="btn btn-primary">
                </div>
            </form>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>
</div>

<script src="js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        body {
            padding: 0;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #383838;
        }
        .box {
            height: 40px;
            width: 100%;
            max-width: 290px;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        button {
            height: 40px;
            width: 80px;
            border: none;
            outline: none;
            font-size: 20px;
            font-weight: 600;
        }
        button, .fa {
            color: #383838;
            box-shadow: 3px 3px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
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

        @media (max-width: 768px) {
            .box {
                flex-direction: column;
                height: auto;
                width: auto;
            }
            button, .fa {
                width: 100%;
                max-width: 290px;
                margin: 5px 0;
                padding: 10px;
            }
            .fa {
                padding: 10px;
                font-size: 18px;
            }
            #back, .fa-mail-forward {
                border-radius: 0;
            }
            #next, .fa-mail-reply {
                border-radius: 0;
            }
        }
    </style>
    <script>
        function goBack() {
            window.history.back();
        }

        function goNext() {
            window.history.forward();
        }
    </script>
</head>
<body>
    <div class="box">
        <i class="fa fa-mail-reply" aria-hidden="true" onclick="goBack()"></i>
        <button id="back" onclick="goBack()">BACK</button>
        <button id="next" onclick="goNext()">NEXT</button>
        <i class="fa fa-mail-forward" aria-hidden="true" onclick="goNext()"></i>
    </div>
</body>
</html>

