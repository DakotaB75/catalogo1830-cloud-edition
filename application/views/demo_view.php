<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial;
            background: #224495;
            color: white;
            text-align: center;
            padding: 60px;
        }
        .card {
            background: #1e293b;
            padding: 30px;
            border-radius: 12px;
            display: inline-block;
        }
        .ok {
            color: #22c55e;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="card">
    <h1><?php echo $title; ?></h1>
    <p class="ok"><?php echo $status; ?></p>
    <p><?php echo $mode; ?></p>
</div>

</body>
</html>