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

        .details strong { color: #475569; font-weight: 600; }
    </style>
</head>
<body>
    <main class="panel">
        <div class="mark">↗</div>
        <div class="eyebrow">Deployment check</div>
        <h1>It’s live!</h1>
        <p class="intro">Your PHP application has been successfully served. This page confirms that your OpenShift deployment is working.</p>

        <div class="status"><span class="dot"></span> Application is running</div>

        <div class="details">
            <div>PHP version: <strong><?= htmlspecialchars($phpVersion, ENT_QUOTES, 'UTF-8') ?></strong></div>
            <div>Server time: <strong><?= htmlspecialchars($serverTime, ENT_QUOTES, 'UTF-8') ?></strong></div>
        </div>
    </main>
</body>
</html>
