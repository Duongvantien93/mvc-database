<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>admin_menu</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
        <style>
       
         .boxleft {
             width:100%;
         }
         #header , #footer {background:grey;
         padding:100px;}    
        </style>
    </head>
    <body>
    <div class="container">
        <div id=header></div>
        <div id=content>
                <div class="boxleft">
 
                            <?php
                                require_once"$folder/".$data["pages"].".php";
                            ?>               
                </div>
        </div>
        <div id=footer></div>
        </div>
        <script src="" async defer>    
        </script>
    </body>
</html>