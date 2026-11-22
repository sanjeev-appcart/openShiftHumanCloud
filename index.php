
<?php
// PHP variables
$phpVersion = PHP_VERSION;
$serverTime = date('d M Y, h:i A');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OpenShift | Deployment Check</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            min-height: 100vh;
            display: grid;
            place-items: center;
            padding: 24px;
            font-family: system-ui, sans-serif;
            color: #172033;
            background: linear-gradient(135deg, #eef2ff, #f8fafc, #e0f2fe);
        }

        .panel {
            width: min(100%, 460px);
            padding: 42px 36px;
            text-align: center;
            background: white;
            border: 1px solid #e5eaf3;
            border-radius: 22px;
            box-shadow: 0 24px 70px rgba(31, 50, 90, .12);
        }

        .mark {
            width: 68px;
            height: 68px;
            display: grid;
            place-items: center;
            margin: 0 auto 22px;
            border-radius: 20px;
            color: white;
            font-size: 30px;
            background: linear-gradient(135deg, #4f46e5, #0891b2);
        }

        .eyebrow {
            margin-bottom: 10px;
            color: #6366f1;
            font-size: 12px;
            font-weight: 700;
            letter-spacing: .14em;
            text-transform: uppercase;
        }

        h1 {
            margin-bottom: 12px;
            font-size: 29px;
        }

        .intro {
            color: #64748b;
            line-height: 1.65;
        }

        .status {
            display: inline-flex;
            align-items: center;
            gap: 9px;
            margin: 26px 0;
            padding: 9px 14px;
            color: #15803d;
            background: #f0fdf4;
            border: 1px solid #dcfce7;
            border-radius: 999px;
            font-size: 13px;
            font-weight: 650;
        }

        .dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #22c55e;
        }

        .details {
            padding-top: 18px;
            border-top: 1px solid #eef2f7;
            color: #94a3b8;
            font-size: 12px;
            line-height: 1.9;
        }

        .details strong {
            color: #475569;
            font-weight: 600;
        }
    </style>
</head>

<body>
    <main class="panel">

        <div class="mark">↗</div>

        <div class="eyebrow">Deployment Check</div>

        <h1>It's Live!</h1>

        <p class="intro">
            Your PHP application has been successfully served.
            This page confirms that your OpenShift deployment is working.
        </p>

        <div class="status">
            <span class="dot"></span>
            Application is running
        </div>

        <div class="details">
            <div>
                PHP Version:
                <strong><?= htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>

            <div>
                Server Time:
                <strong><?= htmlspecialchars($serverTime, ENT_QUOTES, 'UTF-8') ?></strong>
            </div>
        </div>

    </main>
</body>
</html>
