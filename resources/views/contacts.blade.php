<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <header class="w-100 bg-primary mb-3 p-3"> 
            <a href="/" class="text-light text-decoration-none ms-3 bg-secondary rounded p-2">HOME</a>
            <a href="/products" class="text-light text-decoration-none ms-3 bg-secondary rounded p-2">My Products</a>
        </header>
        <main class="text-center"> 
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>CONTACTS</h1>
                        <div class="card">
                            <h4> {{ $name }} {{ $surname }} </h4>
                            <p> {{ $mail }} </p>
                            <p> {{ $telephone_number }} </p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>