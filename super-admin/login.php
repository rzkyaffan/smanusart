<?php
session_start();
if (isset($_POST["submit"])) {
    if ($_POST["username"] == "admin" && $_POST["Password"] == "123") {
        // Buat Session
        $_SESSION["login"] = true;
        header("Location: index.php");
    } else {
        header("Location: /");
    }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Admin</title>
    <style>
        * {
            text-decoration: none;
            list-style-type: none;
            border: none;
            font-family: 'poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: url(../assets/images/daniel-leone-v7daTKlZzaw-unsplash.jpg);
            background-position: center;
            background-size: cover;
            background-color: rgba(0, 0, 0, 0.5);
        }

        form {
            width: 30rem;
            padding: 2rem 6rem;
            border-radius: .5rem;
            text-align: center;
            position: relative;
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(.4rem);
            color: #edededed;
        }

        form h2 {
            margin-bottom: 2rem;
        }

        label {
            display: flex;
            flex-direction: column;
            padding: .5rem;
        }

        input {
            width: 100%;
            padding: .3rem;
            background: transparent;
            border: none;
            border-bottom: .1rem solid #ededed;
            margin-bottom: 1rem;
            color: #ededed;
        }

        button {
            width: 100%;
            padding: .5rem 0;
            background-color: #1b72e5;
            cursor: pointer;
            border-radius: .4rem;
            color: #ededed;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 2rem;
        }
        form input:focus{
            outline:none;
            color: #ededed;
        }
    </style>
</head>
<body>
<section class="container">
    </div>
        <form action="" method="post">
            <h2>Silahkan Login</h2>
            <li>
                <label for="username">Username :</label>
                <input type="username" name="username" id="username" autocomplete="off">
            </li>
            <li>
                <label for="Password">Password :</label>
                <input type="Password" name="Password" id="Password" autocomplete="off">
            </li>
            <button type="submit" name="submit">Masuk</button>
        </form>
    </section>
    <script src="../assets/js/main.js"></script>
</body>
</html>