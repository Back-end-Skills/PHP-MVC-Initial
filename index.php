<?php 
require_once 'vendor/autoload.php'; 
   

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MVC Instrutor celker</title>
    </head>
    <body>
        <?php 
         
            $url = new Core\ConfigController();
            $url->carregar();
        
        ?>
        
    </body>
</html>