<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HastyDev - Plataforma para Desenvolvedores</title>
 

    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>

 
<style>
 
        body {
            font-family: 'Arial', sans-serif;
            color: #333;
            line-height: 1.6;
            background-color: #f8fafc;
        }

        h1, h2, h3, h4, h5, h6 {
            color: #1a202c;
        }

        p {
            margin-bottom: 1.25rem;
        }

 
        .dark-mode body {
            background-color: #1a202c;
            color: #cbd5e0;
        }

    
        header {
            background-color: #ffffff;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
        }

 
        .btn {
            display: inline-block;
            background-color: #4caf50;
            color: #fff;
            padding: 0.5rem 1rem;
            text-decoration: none;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }

    
        .title {
            color: #2d3748;
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }
 
        .subtitle {
            color: #4a5568;
            font-size: 1.5rem;
            margin-bottom: 0.5rem;
        }

       
        .section {
            margin-bottom: 2rem;
        }

 
        .highlight-box {
            background-color: #f0fff4;
            border-left: 4px solid #38a169;
            padding: 1rem;
            margin-bottom: 1.5rem;
        }

         
        .registration-area {
            background-color: #e2e8f0;
            padding: 2rem;
            border-radius: 0.5rem;
        }

        
        .icon {
            font-size: 2rem;
            margin-right: 0.5rem;
            vertical-align: middle;
        }

       
        .grow {
            transition: transform 0.2s ease-in-out;
        }

        .grow:hover {
            transform: scale(1.05);
        }

         
        .inscription-btn {
            outline: none;
            cursor: pointer;
            border: none;
            padding: 0.9rem 2rem;
            margin: 0;
            font-family: inherit;
            font-size: inherit;
            position: relative;
            display: inline-block;
            letter-spacing: 0.05rem;
            font-weight: 700;
            font-size: 17px;
            border-radius: 500px;
            overflow: hidden;
            background: #66ff66;
            color: ghostwhite;
        }

        .inscription-btn span {
            position: relative;
            z-index: 10;
            transition: color 0.4s;
        }

        .inscription-btn:hover span {
            color: black;
        }

        .inscription-btn::before,
        .inscription-btn::after {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 0;
        }

        .inscription-btn::before {
            content: "";
            background: #000;
            width: 120%;
            left: -10%;
            transform: skew(30deg);
            transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
        }

        .inscription-btn:hover::before {
            transform: translate3d(100%, 0, 0);
        }
    </style>

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            @include('layouts.navigation')

            
            @if (isset($header))
                <header class="bg-white dark:bg-gray-800 shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
 
        <div class="container mx-auto px-4">
        
        <section class="section">
            <h2 class="title">O que é o Vestibulinho?</h2>
            <p class="mb-4">O Vestibulinho das Escolas Técnicas Estaduais (ETECs) é um processo seletivo semestral realizado pelo Centro Paula Souza, que oferece cursos técnicos gratuitos em diversas áreas do conhecimento.</p>
            <p class="mb-4">Com uma longa tradição de excelência, o Vestibulinho é uma oportunidade imperdível para estudantes que buscam uma formação técnica de qualidade, preparando-os para o mercado de trabalho ou para ingresso no ensino superior.</p>
            <div class="highlight-box">
                <h3 class="subtitle">Por que participar do Vestibulinho?</h3>
                <p>✔️ Amplie suas oportunidades profissionais</p>
                <p>✔️ Aprenda com professores especializados</p>
                <p>✔️ Adquira habilidades práticas e teóricas</p>
                <p>✔️ Construa uma carreira de sucesso</p>
            </div>
        </section>

        <section class="section">
    <h2 class="title">Dicas de Preparação para o Vestibulinho</h2>
    <p class="mb-4">Preparar-se adequadamente para o Vestibulinho pode aumentar suas chances de sucesso. Aqui estão algumas dicas úteis para ajudá-lo a se preparar:</p>
    <ul class="list-disc ml-8">
        <li>Revise os conteúdos do ensino médio relevantes para o curso desejado.</li>
        <li>Pratique resolvendo questões de vestibulares anteriores.</li>
        <li>Participe de aulas preparatórias ou workshops, se disponíveis.</li>
        <li>Mantenha-se atualizado sobre as últimas notícias e desenvolvimentos em sua área de interesse.</li>
        <li>Desenvolva habilidades de gerenciamento de tempo para lidar com as demandas do processo seletivo.</li>
    </ul>
</section>

    
        <section class="section">
            <div class="registration-area">
                <h2 class="title text-center mb-4">Inscreva-se Agora!</h2>
                <p class="text-center mb-4">Não perca a chance de participar do Vestibulinho ETEC e dar o primeiro passo rumo ao seu futuro profissional.</p>
                <div class="text-center">
        <button class="inscription-btn" onclick="window.location.href='https://www.vestibulinhoetec.com.br/home/'"> <span>Inscreva-se</span> </button>
    </div>

            </div>
        </section>
 

  

    </div>

    <footer>
   @include('layouts.footer')
</footer>
</body>
</html>
