<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" type="text/css" href="estilo.css">
        <scrpit src="script.js" defer></scrpit>
    </head>
    <body>
        <div class="box">
            <form name="gerador"  method="post" action="proces_gerador.php">
                <fieldset>
                    <legend><b>Gerador de Currículos</b></legend>
                    <br>
                    <div class="inputBox">
                        <input type="text" name="nome" id="nome" class="inputUser"required>
                        <label for="nome" class="labelInput">Nome Completo</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <label for="dataNascimento" class="labelInput">Data de Nascimento :</label><br>
                        <input type="date" name="dataNascimento" id="dataNascimento" class="inputUser"required>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="tel" name="telefone" id="telefone" class="inputUser"required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <br><br>

                    <div class="inputBox">
                        <input type="email" name="email" id="email" class="inputUser"required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br><br>

                    <p>Sexo :</p>
                    <input type="radio" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br><br>

                    <div class="inputBox">
                        <input type="text" name="endereco" id="endereco" class="inputUser"required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>

                    <div id="experienciasContainer" class="inputBox">
                        <label for="experiencia" class="labelInput">AdicioneExperiências</label>
                        <br>
                        <input type="text" id="experiencia" name="experiencia[]">
                    </div>

                    <button type="button" onclick="addExperience()">Adicionar Experiencia</button>
                    <br><br>
                    
                    <div class="inputBox">
                        <input type="textarea" name="sobre" id="sobre" class="inputUser"required>
                        <label for="sobre" class="labelInput">Sobre</label>
                    </div>
                    <br><br>

                    <input type="submit" name="enviar" id="submit" value="Enviar">

                </fieldset>
            </form>
        </div>
    </body>
</html>