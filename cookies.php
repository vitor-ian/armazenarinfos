<?php 

    if(isset($_POST['text1'])){
        $v1 = $_POST['text1'];
        setcookie("teste", $v1, time() + (86400 * 30), "/");
    }

    
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies PHP</title>
</head>


<body>
    <h1>Cookies PHP</h1>

    <form action="" method="post">
        <div>
            <input class="texto" type="text" name="text1" placeholder="Insira o texto">
        </div>
        
        <div>
            <input type="submit" name="submit" class="btn2" value="Salvar Valor">
        </div>
        
    </form>

    


        <style>
            body{
                height: 100vh;
                background: rgb(0,155,255);
                background: linear-gradient(0deg, rgba(0,155,255,1) 0%, rgba(45,245,253,1) 100%);
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                font-family: 'Roboto', sans-serif;
            }

            h1{
                color: white;
                font-size: 50px;
                text-transform: uppercase;
                margin: 50px;
            }

            * {
                padding: 0px;
                margin: 0px;
                border: none;
                box-sizing: border-box;
            }

            form{
                background-color: white;
                padding: 50px;
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                position: relative;
            }

            .texto{
                padding: 20px 30px;
                margin: 10px;
                border: 1px solid rgb(213, 213, 213);
                border-radius: 50px;
                font-size: 20px;
            }

            .btn2{
                padding: 20px 30px;
                margin: 10px;
                border-radius: 50px;
                font-size: 15px;
                background-color: rgb(0, 215, 32);
                color: white;
                text-transform: uppercase;
                transition: 0.5s ease;
            }

            .btn2:hover{
                background-color: rgb(2, 172, 27);
                cursor: pointer;
            }

        </style>
</body>
</html>