
<?php
$phpVersion = phpversion();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenShift | PHP App</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #141e30, #243b55);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
        }

        .card {
            text-align: center;
            padding: 45px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 18px;
            box-shadow: 0 15px 40px rgba(0,0,0,0.3);
            max-width: 420px;
            width: 90%;
        }

        .icon {
            font-size: 45px;
            margin-bottom: 20px;
        }

        h1 {
            font-size: 28px;
            margin-bottom: 12px;
        }

        p {
            color: #cbd5e1;
            line-height: 1.6;
        }

        .status {
            display: inline-block;
            margin-top: 25px;
            padding: 8px 16px;
            background: rgba(34, 197, 94, 0.15);
            color: #4ade80;
            border-radius: 20px;
            font-size: 13px;
        }

        .version {
            margin-top: 20px;
            font-size: 12px;
            color: #94a3b8;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="icon">🚀</div>

        <h1>Hello, OpenShift!</h1>

        <p>Your PHP application is up and running.</p>

        <div class="status">● Application Running</div>

        <div class="version">
            Powered by PHP <?php echo $phpVersion; ?>
        </div>
    </div>
</body>
</html>
