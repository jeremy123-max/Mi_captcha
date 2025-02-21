<?php session_start(); ?><!DOCTYPE html><html>
<head>
    <title>Formulario con CAPTCHA</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }
        .captcha-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        img {
            max-width: 100%;
            height: auto;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            background-color: #007BFF;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        a {
            display: block;
            margin-top: 10px;
            color: #007BFF;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="captcha-container">
        <h2>Formulario con CAPTCHA</h2>
        <form action="verificar.php" method="post">
            <p>Introduce el texto de la imagen:</p>
            <img src="captcha.php" alt="CAPTCHA"><br><br>
            <input type="text" name="captcha" required>
            <button type="submit">Enviar</button>
        </form>
        <p>¿Problemas con el CAPTCHA? <a href="tel:+51903367320">Llamar para asistencia</a></p>
    </div>
</body>
</html>