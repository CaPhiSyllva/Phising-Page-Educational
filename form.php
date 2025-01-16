<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phising Page educationaL</title>
    <style>
        /* Reset e estilo básico */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8f9fa;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h1 {
            font-size: 22px;
            color: #ff0000;
            margin-bottom: 10px;
        }

        p {
            font-size: 16px;
            color: #555;
            margin-bottom: 20px;
        }

        form {
            margin-top: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 12px;
            font-size: 16px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background: #0056b3;
        }

        .educational-note {
            margin-top: 20px;
            font-size: 14px;
            color: #888;
        }

        .educational-note strong {
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Título falso -->
        <h1>Faça login para acessar sua conta</h1>
        <p>Insira suas informações para continuar.</p>

        <!-- Formulário falso -->
        <form action="#" method="POST">
            <input type="text" name="username" placeholder="Usuário ou E-mail" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
        </form>

        <!-- Nota educacional -->
        <div class="educational-note">
            <p><strong>Atenção:</strong> Esta é uma página educativa para demonstrar como sites maliciosos podem enganar usuários. Nunca insira informações pessoais em sites não confiáveis!</p>
        </div>
    </div>
</body>
</html>
