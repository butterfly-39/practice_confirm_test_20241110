<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset(css/sanitize.css}}">
    <link rel="stylesheet" href="{{ asset(css/common.css}}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <h1>FashionablyLate</h1>
            <a class="header__login-link" href="/login" >login</a>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>

</html>
