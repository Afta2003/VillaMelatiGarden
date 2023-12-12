<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            width: 400px;
            margin: 0 auto;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            box-sizing: border-box;
            border-radius: 25px
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            width: 100%;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .signup {
            margin-top: 10px;
            text-align: center;
        }
    </style>
</head>
<body>
    <img src="img/LOGO VILLA.jpeg" alt="Logo villa"  width="581" height="133" length="1000">
    <div class="container">
        <h2>Sign up for Booking Villa</h2>
        <form action="/sign up" method="post">
            <input type="text" name="username" placeholder=" Username" required>
            <input type="text" name="Email address" placeholder = "Email address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Log in">
        </form>
        <div class="g-recaptcha" data-sitekey="YOUR_RECAPTCHA_SITE_KEY"></div><br>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div class="signup">
            <p>Already have an acount? <a href="/login ">Log in</a></p>
        </div>
    </div>
</body>
</html>