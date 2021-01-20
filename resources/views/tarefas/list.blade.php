<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Laravel 1</title>
</head>
<body>
    <header>
        <h1>Header</h1>
    </header>
    <hr/>
    <section>
        @yield('content')
    </section>
    <br/>
    <footer>
        Rodapé.
    </footer>
</body>
</html>