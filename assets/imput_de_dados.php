<!DOCTYPE html>
<html>
<head>
    <title>Formulário Parte 1</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulário Parte 1</h2>

        <div class="form">
            <form action="../scripts/cadastro_input.php" method="post">
                <div>
                    <label for="nome-pet">Nome do Pet:</label>
                    <input type="text" id="nome-pet" name="nome_pet" required>
                </div>

                <div>
                    <label for="foto-pet">Foto do Pet:</label>
                    <input type="file" id="foto-pet" name="foto_pet">
                </div>

                <div>
                    <label for="idade-pet">Idade:</label>
                    <input type="number" id="idade-pet" name="idade_pet" required>
                </div>

                <div>
                    <label for="peso-pet">Peso:</label>
                    <input type="text" id="peso-pet" name="peso_pet" required>
                </div>

                <div>
                    <button class="positive" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>