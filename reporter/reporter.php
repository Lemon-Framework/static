<?php
$problem = 'Exception';
$message = 'Undefined variable $parke';
$line = 37;
$file = 'index.php';
$hint = 'Did you mean $parek?';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exception | Lemon</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@300&display=swap');
        * {
            font-family: 'Source Code Pro', monospace;
        }
        :root {
            --primary: #282828;
            --secondary: #A29783;
            --red: #AF2923;
        }
    </style>
    <link rel="stylesheet" href="dist/css/app.css">
</head>
<body class='bg-primary text-secondary'>
    <div id="app">
        <div class="container px-3 py-5 mx-auto sm:px-0">
            <div class="block p-3 shadow-xl bg-red text-primary">
                <div class="text-xl"><?= $problem ?> - <?= $file ?>:<?= $line ?></div>
                <div class="text-2xl"><?= $message ?></div>
                <div class="text-2xl"><?= $hint ?></div>
            </div>
            <context></context>
        </div>
    </div>
</body>
<script>
let context = {
    'trace': [
        
    ]
}
</script>
<script src="dist/js/app.js"></script>
</html>
