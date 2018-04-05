<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

        body {
            background:black;
            font-family: Arial, Helvetica, sans-serif;}
        form {border: 3px solid #f1f1f1;}

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

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 25%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }
            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>
<body>

<p style="color: white "><?php echo $_SESSION["wrong"];?></p>
<div  style="background:white; width: 50%; height: auto; margin-left: 25%" class="container">
    <form method="post" action="/adminlogin.php">
        <div class="imgcontainer">
            <img src="images/ceo.jpg" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="email" required="required">

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required="required">

            <button name="submit" type="submit">Login</button>

        </div>


    </form>

</div>

</body>
</html>
