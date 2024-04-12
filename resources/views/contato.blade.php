<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Contato - HastyDev</title>
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

        form {
            margin-top: 20px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 10px;
     
            transition: all 0.3s;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        textarea {
            height: 150px;
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

        .alert-success {
            color: green;
        }

        .alert-error {
            color: red;
        }

        /* New Styles */

        /* Feedback Text Styling */
        .feedback {
            font-size: 18px;
            color: #333;
            text-align: center;
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            background-color: #f9f9f9;
            transition: background-color 0.3s;
        }

        .feedback:hover {
            background-color: #f0f0f0;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus {
            outline: none;
            box-shadow: 0 0 10px rgba(0, 123, 255, 0.5);
        }


        .cta {
  position: relative;
  margin: auto;
  padding: 5px 18px;
  transition: all 0.2s ease;
  border: none;
  background: none;
  cursor: pointer;
  margin-left: 37%;
  margin-top:8px;
}

.cta:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  border-radius: 50px;
  background: #b1dae7;
  width: 45px;
  height: 45px;
  transition: all 0.3s ease;
}

.cta span {
  position: relative;
  font-family: "Ubuntu", sans-serif;
  font-size: 18px;
  font-weight: 700;
  letter-spacing: 0.05em;
  color: #234567;
}

.cta svg {
  position: relative;
  top: 0;
  margin-left: 10px;
  fill: none;
  stroke-linecap: round;
  stroke-linejoin: round;
  stroke: #234567;
  stroke-width: 2;
  transform: translateX(-5px);
  transition: all 0.3s ease;
}

.cta:hover:before {
  width: 100%;
  background: #b1dae7;
}

.cta:hover svg {
  transform: translateX(0);
}

.cta:active {
  transform: scale(0.95);
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
    <p style="font-size: 20px; font-weight: bold; text-align: center;">Precisa de ajuda ou quer nos dar algum feedback? Preencha o formulário abaixo e entraremos em contato em breve.</p>

    <form action="{{ route('enviar.mensagem') }}" method="post">
        @csrf
        <input type="text" name="nome" placeholder="Seu Nome" required>
        <input type="email" name="email" placeholder="Seu E-mail" required>
        <textarea name="mensagem" placeholder="Sua Mensagem" required></textarea>
        <button class="cta">
  <span>Enviar Feedback</span>
  <svg width="15px" height="10px" viewBox="0 0 13 10">
    <path d="M1,5 L11,5"></path>
    <polyline points="8 1 12 5 8 9"></polyline>
  </svg>
</button>

    </form>

    @if(session('error'))
    <div class="alert-error">
        <div class="feedback">{{ session('error') }}</div>
    </div>
    @endif

    @if(session('success'))
    <div class="alert-success">
        <div class="feedback">{{ session('success') }}</div>
    </div>
    @endif
</div>
<footer>
   @include('layouts.footer')
</footer>
</body>
</html>
