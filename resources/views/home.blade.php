<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HastyDev - Plataforma para Desenvolvedores</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
            color: #333;
        }

        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            margin-top: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 0 20px;
        }

        .cta-button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .cta-button:hover {
            background-color: #0056b3;
        }

        .features {
            display: flex;
            justify-content: space-around;
            margin-top: 50px;
        }

        .feature {
            text-align: center;
            flex: 1;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .feature h2 {
            margin-top: 0;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
     


        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif



    <div class="container">
        <p>Construa, colabore e inove com HastyDev</p>
        <a href="#" class="cta-button">Comece Agora</a>
        <div class="features">
            <div class="feature">
                <h2>Projetos</h2>
                <p>Gerencie seus projetos de desenvolvimento de forma eficiente.</p>
            </div>
            <div class="feature">
                <h2>Colaboração</h2>
                <p>Trabalhe em equipe de forma integrada e colaborativa.</p>
            </div>
            <div class="feature">
                <h2>Recursos</h2>
                <p>Acesse uma variedade de recursos para acelerar o desenvolvimento.</p>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy; 2024 HastyDev. Todos os direitos reservados.</p>
    </footer>
</body>
</html>
