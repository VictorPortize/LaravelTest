<!DOCTYPE html>
<html>
    <head>
        <title>@yield("title") - Laravel 1</title>
    </head>
    <body>
        <Header>
            <h1>Header</h1>
        </Header>
        <hr/>
        <section>
            @yield('content')
        </section>
        <hr/>
        <footer>
            Rodapé
        </footer>
    </body>
</html>