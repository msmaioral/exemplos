
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Style/Style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Olhar Digital - O futuro passa primeiro aqui</title>
</head>
<body>
    <form action="">
        <fieldset>
            <legend>Meu grupo do formulario</legend>
            <div><input type="text" name="nome" placeholder="Digite seu nome"></div>
            <div><input type="text" name="email" placeholder="Digite seu email"></div>

            <div>
                <select name="lista" >
                    <option disable select>Qual sua idade?</option>
                    <option>20</option>
                    <option>25+</option>
                    <option>40+</option>
                </select>
            </div>
            <div>
                <h2>Qual sua cidade?</h2>
                <div class="radio-input">
                    <div>
                        <input type="radio" name="cidade"><span>Florianópoles</span>
                    </div>
                    <div>
                        <input type="radio" name="cidade"><span>Sao Paulo</span>
                    </div>
                    <div>
                        <input type="radio" name="cidade"><span>Rio de Janeiro</span>
                    </div>
                    
                </div>
                <h2>O que voce gosta de comer?</h2>
                <div class="radio-input">
                    <div>
                        <input type="checkbox" name="cidade"><span>Florianópoles</span>
                    </div>
                    <div>
                        <input type="checkbox" name="cidade"><span>Sao Paulo</span>
                    </div>
                    <div>
                        <input type="checkbox" name="cidade"><span>Rio de Janeiro</span>
                    </div>
            </div>
            <div>
                <textarea placeholder="Possui alguma observação?"></textarea>
            </div>
            <div>
                <input type="submit" name="acao" value="enviar">
            </div>
        </fieldset>
    </form>

</body>


</html>
