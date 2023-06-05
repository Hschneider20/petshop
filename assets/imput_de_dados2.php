<!DOCTYPE html>
<html>
<head>
    <title>Formulário Parte 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulário Parte 2</h2>

        <div class="form">
            <form action="../scripts/cadastro_input2.php" method="post">
                <div>
                    <label for="temperatura-corpo">Temperatura Corporal:</label>
                    <input type="text" id="temperatura-corpo" name="temperatura_corporal" required>
                </div>

                <div>
                    <label for="batimentos-cardiacos">Batimentos Cardíacos:</label>
                    <input type="text" id="batimentos-cardiacos" name="batimentos_cardiacos" required>
                </div>

                <div>
                    <label for="nivel-atividade">Nível de Atividade:</label>
                    <input type="text" id="nivel-atividade" name="nivel_atividade" required>
                </div>

                <div>
                    <label for="nivel-hidratacao">Nível de Hidratação:</label>
                    <input type="text" id="nivel-hidratacao" name="nivel_hidratacao" required>
                </div>

                <div>
                    <button class="positive" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>