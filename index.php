<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>To PHP Krzysztofa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f0f0f0;
            text-align: center;
            padding-top: 100px;
        }

        h1 {
            font-size: 2em;
            color: #333;
        }

        .hourglass {
            margin: 50px auto;
            width: 50px;
            height: 90px;
            position: relative;
        }

        .hourglass::before, .hourglass::after {
            content: "";
            position: absolute;
            left: 0;
            right: 0;
            margin: auto;
            border-left: 25px solid transparent;
            border-right: 25px solid transparent;
            animation: flip 2s infinite;
        }

        .hourglass::before {
            top: 0;
            border-bottom: 45px solid #555;
        }

        .hourglass::after {
            bottom: 0;
            border-top: 45px solid #555;
        }

        @keyframes flip {
            0% { transform: scaleY(1); opacity: 1; }
            50% { transform: scaleY(0.1); opacity: 0.5; }
            100% { transform: scaleY(1); opacity: 1; }
        }
    </style>
</head>
<body>

    <h1><?php echo "To PHP Krzysztofa"; ?></h1>

    <div class="hourglass"></div>

</body>
</html>
