<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="main.png" rel="icon" style="width: 50px; /* حجم الصورة */
    height: 50px; /* نفس الارتفاع للحصول على مربع */
    border-radius: 50%; /* يجعل الصورة دائرية */
    object-fit:contain; /* للحفاظ على نسبة الصورة */">
    <title>Login Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            display: flex;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .left-panel, .right-panel {
            width: 50%;
            padding: 40px;
        }

        .left-panel {
            background-color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 20px;
            color: #555;
        }

        .input-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 15px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #37517E;
            color: yellow;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-bottom: 10px;
        }

        .login-btn:hover {
            background-color: #37517E;
        }

        .social-login {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }



        .right-panel {
            background: linear-gradient(#37517E, white, #37517E);
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
        }

        .right-panel .message {
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .image {
            max-width: 100%;
            height: auto;
        }

        .success {
            color: green;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .error {
            color: red;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                max-width: 90%;
            }

            .left-panel, .right-panel {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-panel">
            <h1 style="color: #37517E;">LOGIN</h1>
            <p style="font-weight: bold;">authenication data please</p>
            <?php
            // Check if the form has been submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $username = $_POST["username"];
                $password = $_POST["password"];

                // Check the credentials
                if (($username == "hisham" || $username == "ragab") && $password == "diveline") {
                    // Redirect to dashboard.php if login is successful
                    header("Location: dashboard.php");
                    exit(); // Ensure no further code is executed after redirection
                } else {
                    echo "<p class='error'>Not authorized data. Please try again.</p>";
                }
            }
            ?>
            <form action="" method="POST">
                <div class="input-group">
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <button type="submit" class="login-btn">Login Now</button>
            </form>

        </div>
        <div class="right-panel">
            <div class="message">
            </div>
            <img src="main.png" alt="logo" class="image">
        </div>
    </div>
   
</body>
</html>
