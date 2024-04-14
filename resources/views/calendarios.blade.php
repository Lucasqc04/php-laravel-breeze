<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contato - HastyDev</title>
    <style>
        body {
            font-family: Arial, sans-serif; /* Definindo uma fonte padrão */
            background-color: #f3f4f6; /* Adicionando uma cor de fundo */
            margin: 0;
            padding: 0;
        }

     
        .nav-link {
            color: #fff;
            text-decoration: none;
            margin-right: 1rem;
            cursor: pointer;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
            padding: 1rem 0; /* Adicionando um espaçamento interno */
        }

        /* Estilos para os iframes */
        .iframe-container {
            width: 90%;
            margin: 2rem auto; /* Centralizando e adicionando espaço entre os iframes */
            padding: 1.5rem;
            background-color: #fff; /* Adicionando uma cor de fundo aos iframes */
            border-radius: 8px; /* Arredondando as bordas */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Adicionando uma sombra sutil */
        }

        .iframe-container h1 {
            font-size: 28px; /* Aumentando o tamanho do título */
            text-align: center; /* Centralizando o título */
            margin-bottom: 1rem; /* Adicionando espaço entre o título e o iframe */
        }

        .iframe-container iframe {
            width: 100%;
            height: 600px;
            border: none; /* Removendo a borda padrão do iframe */
        }
    </style>
</head>
<body>

@include('layouts.navigation')

@if (isset($header))
    <header class="bg-white dark:bg-gray-800 shadow">
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            {{ $header }}
        </div>
    </header>
@endif


<nav class="bg-gray-800 text-white text-center py-2">
    <a class="nav-link" href="#etec">Etec Da Zona Leste</a>
    <a class="nav-link" href="#ceu-parque">Céu Parque São Carlos</a>
    <a class="nav-link" href="#fates">Fates Da Zona Leste</a>
    <a class="nav-link" href="#ceu-azul">Céu azul da cor do mar</a>
</nav>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <!-- Seu conteúdo HTML -->
    <!-- Cada iframe dentro de uma div com a classe iframe-container para aplicar os estilos -->
    <div id="etec" class="iframe-container">
        <h1>Etec Da Zona Leste</h1>
        <iframe src="/pdf/calendario-etecZonaLeste.pdf#toolbar=0"></iframe>
    </div>

    <div id="ceu-parque" class="iframe-container">
        <h1>Céu Parque São Carlos</h1>
        <iframe src="/pdf/calendario-CEUParqueSaoCarlos.pdf#toolbar=0"></iframe>
    </div>

    <div id="fates" class="iframe-container">
        <h1>Fatec Da Zona Leste</h1>
        <iframe src="/pdf/calendario-FatecZonaLeste.pdf#toolbar=0"></iframe>
    </div>

    <div id="ceu-azul" class="iframe-container">
        <h1>Céu azul da cor do mar</h1>
        <iframe src="/pdf/calendario-CEUAzulDaCorDoMar.pdf#toolbar=0"></iframe>
    </div>
</div>

<footer>
   @include('layouts.footer')
</footer>

<script>
     
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
</script>

</body>
</html>
