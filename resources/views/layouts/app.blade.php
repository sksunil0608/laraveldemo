<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header> 
        <div>
            <h5>
                This is header
            </h5>
        </div>
    </header>

    <main id="main">
        @yield('content')
    </main>

    <footer>
        <h6>This is footer</h6>
    </footer>
</body>
</html>