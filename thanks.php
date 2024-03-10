<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            background-image: url('img/background1.jpg');
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
            height: 100vh; /* Ensure background covers the entire viewport */
            margin: 0; /* Remove default body margin */
            display: flex;
            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
        }

        .thank-you-container {
            text-align: center;
            font-weight: 1000;
            padding: 40px;
            border-radius: 12px;
            background-color: #191d2b;
            color: #aea527;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transform: scale(1);
            transition: transform 0.3s, background-color 0.3s, box-shadow 0.3s;
            cursor: pointer;
        }

        .thank-you-container:hover {
            background-color: #b2becd;
            color: #191d2b;
            box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
            transform: scale(1.05);
        }

        .logout-btn {
            border-radius: 30px;
            color: black;
            font-weight: 1000;
            position: relative;
            border: 1px solid #191d2b;
            display: flex;
            align-items: center;
            overflow: hidden;
            background-color: #aea527;
            padding: 10px 20px; /* Adjust padding as needed */
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s; /* Smooth transition */
        }

        .logout-btn:hover {
            background-color: #27AE60;
            color: #f8f8f8;
        }


        h1 {
            margin-bottom: 30px;
            font-size: 48px;
            letter-spacing: 2px;
        }

        p {
            font-size: 22px;
            line-height: 1.6;
            opacity: 0.9;
        }
    </style>
</head>
<body>

<div class="thank-you-container">
    <h1>Thank You!</h1>
    <p>"Once you find peace, you'll never deal with anyone”</p>
    <!-- Logout button -->
    <button onclick="window.location.href = 'login.php';" class="logout-btn">Logout</button>
    <button onclick="window.location.href = 'index.php';" class="logout-btn">HOME</button>
</div>

</body>
</html>
