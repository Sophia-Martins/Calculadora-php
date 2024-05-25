<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <style>

        body{
            text-align: center;
            background-color: cadetblue;
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .div1{
            background-color: rgba(0, 0, 0, 0.5);
            width: 400px;
            border-radius: 15px;
            padding: 20px;
            align-items: center;

        }

        #num{
            padding: 5px;
            border-radius: 5px;
            border: none;
            outline: none;
            width: 50px;
            margin-bottom: 20px;
        }

        form{
            padding: 1em;
        }

        button{
            padding: 5px 15px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
            background-color: aquamarine;
            color: white;
        }
        






    </style>
</head>
<body>
    <h1>Tabuada</h1>
    <div class="div1">
        <form action="index.php" method="post">

            <div >
                <label for="num">Número:</label>
                <input type="number" name="num" id="num" placeholder="digite um número" style="width: 150px;"><br>
                
            </div>
            <button type="submit">Calcular</button>

        </form>

        <div >

            <?php
           if(!empty($_POST['num']))
           {
            $numero = $_POST['num'];
            for($x = 1; $x<=10;  $x++)
            {
              $r = $numero * $x;
              echo "$numero"."x"."$x"."="."$r";
              echo "<br>";
            }
        }
           ?>


       
        </div>
    </div>
    
</body>
</html>