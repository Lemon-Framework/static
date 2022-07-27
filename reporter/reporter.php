<?php

// FOR TESTING


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
            font-family: 'Source Code Pro', monospace !important;
        }
        :root {
            --primary: #282828;
            --secondary: #A29783;
            --red: #AF2923;
            --mid-dark: #928374;
        }
    </style>
    <link rel="stylesheet" href="dist/css/app.css">
    <link rel="stylesheet" href="dist/css/gruvbox.css">
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
    'error': 'index.php',
    'hints': [
        'Try checking that variable $parke actually exist in yout scope.',
        'Try https://stackoverflow.com/questions/4261133/notice-undefined-variable-notice-undefined-index-warning-undefined-arr/4261200#4261200',
        'Nejaka husta vec'
    ],
    'request': {
        'path': '/',
        'query': 'foo=bar',
        'method': 'post',
        'headers': {
            'content-type': 'text/json'
        },
        'body': 'parek'
    },
    'trace': [
        {file: 'index.php', code: '<\?php echo \'cs\';', line: 1},
        {file: 'parek.php', code: '<\?php\ne\nc\np\nc\na\na\na\na\na\na\na\na\na\na\na\na;', line: 2},
        {file: 'parek.php', code: `<\?php

declare(strict_types=1);

use Lemon\Cache;
use Lemon\Config;
use Lemon\Http\Request;
use Lemon\Kernel\Lifecycle;
use Lemon\Route;
use Lemon\Support\Filesystem;
use Lemon\Support\Types\Arr;

include __DIR__ . '/../vendor/autoload.php';

Lifecycle::init(Filesystem::parent(__DIR__));

session_start();

Config::part('kernel')->set('debug', true);

Route::get('/', function() {
    $posts = Cache::get('posts');
    if (! $posts) {
        return 'no posts';
    }
    $posts = Arr::reverse($posts)->content;
    foreach ($posts as $post) {
        echo $post['title'], '<br>', $post['content'], '<br><br>';
    }
});

Route::post('/upload', function(Request $request) {
    if (Arr::hasKey($_SESSION, 'password')) {
        if ($_SESSION['password'] === Cache::get('password')) {
            $posts = Cache::get('posts');
            $posts[] = [
                'title' => $request->input('title'),
                'content' => $request->input('content'),
                'date' => time(),
            ];
            Cache::set('posts', $posts);
        }
    }
    
    return redirect('/');
});

Route::get('/upload', function() {
    if (Arr::hasKey($_SESSION, 'password')) {
        if ($_SESSION['password'] === Cache::get('password')) {
            return <<<'HTML'
                <form method="post">
                    <input type="text" name="title">
                    <input type="text" name="content">
                    <button>dekel</button>
                </form>
            HTML;
        }
    }
    return redirect('/');
});


Route::get('/login', function() {
    if (Arr::has($_SESSION, 'password')) {
        return redirect('/');
    }

    return <<<'HTML'
        <form method="post">
            <input type="text" name="name">
            <input type="password" name="password">
            <button>send</button>
        </form>       
    HTML;
});


Route::post('/login', function(Request $request) {
    if (isset($request->input['name']) && isset($request->input['password'])) {
        if ($request->input('name') === Cache::get('name') && password_verify($request->input('password'), Cache::get('password'))) {
            $_SESSION['password'] = Cache::get('password');
            return redirect('/');
        } 
    } // TODO add $request->has


    return redirect('/login');
});`, line: 25},
        {file: 'index.php', code: '<\?php echo \'cs\';', line: 1},
    ]
}
</script>
<script src="dist/js/app.js"></script>
</html>
