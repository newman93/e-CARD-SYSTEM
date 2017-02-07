<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class='row'>
            <?php
                foreach(glob('category/*', GLOB_ONLYDIR) as $dir) {
                    $dir = str_replace('category/', '', $dir);
                    $katalog    = 'category/'.$dir.'/media/';
                    $pliki = scandir($katalog,1);
                    foreach($pliki as $plik) { 
                        if ($plik == "." || $plik == "..") break; else {
                        echo "<div class='col-sm-6 col-md-4'>
                            <div class='thumbnail'>
                                <img src='category/".$dir."/media/".$plik."' alt='photo'>
                                <div class='caption'>
                                    <h3>".$dir."</h3>
                                    <p><a href='deletemedia.php?path=category/".$dir."/media/".$plik."' class='btn btn-primary' role='button'>Delete</a></p>
                                </div>
                            </div>
                        </div>";
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>    