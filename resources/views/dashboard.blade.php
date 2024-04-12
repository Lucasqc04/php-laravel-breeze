<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>ETEC Zona Leste</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
    }

    .bg-image {
    background-image: url('https://www.eteczonaleste.com.br/wp-content/uploads/2023/09/image-21-1.jpg');
    background-size: cover;
    background-position: center;
    height: 70vh;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    text-align: center;
    font-size: 36px;
    position: relative;  
 
}

 
 
    .content {
        font-size: 60px;
        padding: 20px;
        text-align: center;
        background-color: rgb(105 54 54 / 30%);

    }

    .content p {
        color: #fff;
        font-size: 18px;
        margin-top: 20px;
    }

    .image-container {
        text-align: center;
        margin-top: 30px;
    }

    .image-container img {
        display: inline-block;
        margin-top: 60px;
        height: 500px;
        width: 500px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 20px 0;
    }
</style>
</head>
<body>

 
 

         <x-app-layout>

<div class="bg-image">
    <div class="bg-overlay"></div>  
    <div class="content">
        <h1>Bem-vindo à ETEC Zona Leste</h1>
        <p>Descubra um futuro brilhante na ETEC Zona Leste. Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
    </div>
</div>


<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6">
                <div style="text-align: center;">
                    <div class="image-container">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/895d682d-b2b3-458e-a9a8-30cae4d3e38c-1.png" alt="">
                    </div>
                    <p style="font-size: 30px; margin-top: 15px;">Aprendizados para além da sala de aula</p>
                    <p style="margin-top: 20px; color: darkgrey;"> Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                    <div class="image-container">
                        <img src="https://www.eteczonaleste.com.br/wp-content/uploads/2024/03/6aa4a7b4-0afa-4cf9-aba9-268decc1c8bc.jpeg" alt="">
                    </div>
                    <p style="font-size: 30px; margin-top: 15px;">Infraestrutura Moderna</p>
                    <p style="margin-top: 20px; color: darkgrey;">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                </div>
            </div>
        </div>
    </div>
</div>

</x-app-layout>

<footer>
    @include('layouts.footer')
</footer>

</body>
</html>
