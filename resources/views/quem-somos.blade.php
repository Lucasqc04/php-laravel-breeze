<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quem Somos - ETEC</title>
       @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #95453d;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        main {
            padding: 20px;
        }

h1{

color: #fff;
text-align: center;

}

         h2 {
            color: #333;
            text-align: center;
        }

        p {
            color: #666;
            line-height: 1.6;
        }

        .section {
            margin-bottom: 40px;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
            text-transform: uppercase;
            border-bottom: 2px solid #333;
            padding-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        ul li {
            margin-bottom: 10px;
            padding-left: 20px;
            position: relative;
        }

        ul li::before {
            content: '•';
            position: absolute;
            left: 0;
            color: #333;
        }
    </style>
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


            

    <main>
        <div class="section">
            <h2>Como funciona a ETEC?</h2>
            <p>Chegou a hora de ir para o ensino médio, ou você quer fazer um curso técnico, mas não sabe ainda como funciona a ETEC? Então, chegou o momento de descobrir. Confira abaixo as respostas principais dúvidas e os detalhes sobre a instituição.</p>
        </div>

        <div class="section">
            <h2>Como funciona para entrar na ETEC?</h2>
            <p>Em primeiro lugar, você precisa saber que não basta simplesmente se inscrever para entrar em uma dessas escolas. Na verdade, existe uma seleção. Ela acontece uma vez ao ano para quem pretende entrar no ensino médio. Por outro lado, para quem busca fazer apenas o curso técnico, a seleção acontece duas vezes.</p>
            <p>A seleção para entrar em uma ETEC se chama Vestibulinho ETEC e consiste em uma prova. Em algumas edições, por conta da pandemia de COVID-19, a prova não aconteceu e as escolas selecionaram por meio do histórico escolar. No entanto, a seleção por prova retornou para todas as modalidades.</p>
            <p>Em alguns anos, mais de 170 mil estudantes concorreram às vagas. Em geral, cada ETEC oferece cerca de 30 a 40 vagas para cada turma.</p>
            <p>As pessoas que conquistam essas vagas são aquelas que alcançam as maiores notas na prova. Portanto, é essencial se preparar bem para passar e ficar entre os primeiros colocados.</p>
            <p>O exame para os cursos técnicos e ensino médio exige as seguintes matérias:</p>
            <ul>
                <li>Português</li>
                <li>Matemática</li>
                <li>Biologia</li>
                <li>Química</li>
                <li>Física</li>
                <li>História</li>
                <li>Geografia</li>
            </ul>
            <p>Já para as vagas remanescentes do curso técnico e cursos de especialização, a prova cobra conteúdo específico da área escolhida.</p>
        </div>

        <div class="section">
            <h2>Quais as modalidades que existem na ETEC?</h2>
            <p>Apesar de ser mais conhecida em algumas cidades por conta do ensino médio gratuito e de qualidade, a ETEC tem opções para todos os públicos. Sendo assim, as opções recebem o nome de modalidades. São elas:</p>
            <ul>
                <li>Ensino Médio com Ênfase</li>
                <li>NovoTEC Integrado PI / M-TEC PI</li>
                <li>NovoTEC Integrado / M-TEC (Ensino Médio com Qualificação Profissional ou Habilitação Técnica)</li>
                <li>Curso técnico (presencial, EAD ou semi)</li>
                <li>Vagas remanescentes (Ensino Médio)</li>
                <li>Especialização</li>
                <li>EJA (Educação de Jovens e Adultos)</li>
            </ul>
        </div>

        <div class="section">
            <h2>Quem pode entrar na ETEC?</h2>
            <p>As pessoas que podem entrar nas modalidades de Ensino Médio são aquelas que estão concluindo o ensino fundamental, especificamente o último ano dessa fase. Ou seja, se você está no final do 9º ano, deve prestar o Vestibulinho ETEC no final deste ano para entrar na ETEC no início do ano seguinte.</p>
            <p>Por outro lado, a opção de cursar apenas o curso técnico serve para quem já está a partir do 2º ano do ensino médio ou já concluiu os estudos. Isso é, se você está concluindo o 1º ano, pode fazer o Vestibulinho do final do ano para entrar na ETEC no ano seguinte. Porém, uma pessoa do 1º ano do ensino médio não pode fazer a prova do meio do ano, pois não estará cursando o 2º ano no momento da matrícula na ETEC.</p>
            <p>Pessoas que já concluíram o ensino fundamental, mas não fizeram o ensino médio e já chegaram aos 18 anos, devem optar pela modalidade EJA.</p>
        </div>

        <div class="section">
            <h2>Como funciona a dinâmica de notas dos alunos da ETEC?</h2>
            <p>Não é somente a seleção que diferencia a ETEC de outras escolas. Na verdade, há outros detalhes, como o sistema de notas. Aliás, pode ser que você já tenha escutado algo sobre isso: as notas na ETEC não seguem a escala numérica. Inclusive, elas nem se chamam “notas”: são menções.</p>
            <p>As menções da ETEC servem para mensurar o desempenho dos estudantes com base em seu aprendizado de diversas formas. Provas teóricas, provas práticas, atividades, seminários e trabalhos são levados em consideração.</p>
            <p>O nível máximo de desempenho é chamado de MB, que significa muito bom. Logo abaixo dele, há o nível B, que representa um bom desempenho. Alunos que ficam “na média” recebem a menção R, ou seja, regular. Por fim, há o I, que serve para demonstrar um desempenho insatisfatório.</p>
        </div>

        <div class="section">
            <h2>Quais são os horários na ETEC?</h2>
            <p>Assim como os uniformes, as ETECs têm horários que variam de uma unidade para outra. Ademais, vale a pena saber que existem várias ETECs, ok? Portanto, uma boa dica é checar onde fica a mais próxima da sua casa ou aquela que tem mais cursos do seu interesse.</p>
            <p>Mas, de forma geral, o período da manhã costuma começar entre 7h e 8h, dependendo do horário determinado pela direção. Normalmente, há uma tolerância de 10 minutos para atrasos. O período da tarde, por sua vez, tende a começar por volta das 13h, e o noturno inicia em torno das 19h.</p>
            <p>Os alunos que cursam o ensino médio em meio período, seja com ênfase ou com curso técnico, têm cerca de seis aulas por dia e possuem um intervalo curto. No caso de quem faz apenas o curso técnico, são cerca de quatro a cinco aulas por dia.</p>
            <p>Porém, quem estuda na modalidade PI (Período Integral) frequenta a ETEC do começo da manhã até a metade da tarde. Na maioria dos casos, há um intervalo curto matutino, pausa longa para almoço e um intervalo curto vespertino.</p>
        </div>

        <div class="section">
            <h2>A ETEC é boa para os vestibulares?</h2>
            <p>Nos últimos anos, as ETECs se consolidaram como ótimas opções para quem pretende passar em grandes vestibulares. Inclusive, há unidades que passaram à frente de escolas particulares no ranking do ENEM. Por isso, se a sua meta é entrar na faculdade, não há dúvidas de que a ETEC vai ajudar nisso.</p>
        </div>

        <div class="section">
            <h2>Vale a pena fazer ETEC para entrar no mercado de trabalho?</h2>
            <p>Assim como nos vestibulares, os alunos das ETECs se destacam no mercado de trabalho. A média é que cerca de 70% formados consigam um emprego na área e vale lembrar que os salários de quem possui curso técnico são geralmente mais altos do que das pessoas que têm apenas o ensino médio.</p>
        </div>
    </main>
    <footer>
   @include('layouts.footer')
</footer>
</body>
</html>
