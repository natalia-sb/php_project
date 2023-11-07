<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <h1> TAREFAS </h1>
    </header>
    
    <div class="">
        <a class="" href="listar.php">HOME</a>
    </div>

    <div class="container">
        <div class="col mt-5">
        <?php
        
                if (isset($_REQUEST["page"])) {
                    switch ($_REQUEST["page"]) {
                        case "listar":
                            include("listar.php");
                            break;
                        default:
                            echo " ";
                    }
                }
                
            ?>
        </div>
    </div>

</body>
</html>