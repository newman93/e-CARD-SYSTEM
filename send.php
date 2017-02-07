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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            $('div#image_container img').click(function(){
                // set the img-source as value of image_from_list
                $('input#image_from_list').val( $(this).attr("src") );  
            });
        </script>    
    </head>
    <body>
        <div class="row">
            <div class="jumbotron">
                <div class="container">
                        <?php 
                            $dir = $_GET['category'];
                            $katalog    = 'category/'.$dir.'/photo/';
                            $pliki = scandir($katalog,1);
                                foreach($pliki as $plik) { 
                                   echo "<img src='category/".$dir."/photo/".$plik."' height='300' width='800' alt='photo'>";
                                   break;                                   
                                }
                        ?> 
                </div>
            </div>
             <?php
                $dir = $_GET['category'];
                $katalog    = 'category/'.$dir.'/media/';;
                    $pliki = scandir($katalog,1);
                    foreach($pliki as $plik) { 
                        if ($plik == "." || $plik == "..") break; else {
                        echo "<div class='col-sm-6 col-md-4'>
                            <div class='thumbnail' id='image_container'>
                                <img src='category/".$dir."/media/".$plik."' alt='photo'>
                            </div>
                        </div>";
                        }
                    }
                    ?> 
            <div class="col-md-9"><span class="accapit pad"><?php echo $_GET['category']; ?></span></div>
            <div class="col-md-9">    
            <form action="mail.php" method="post">
                    <input id="image_from_list" name="image_from_list" type="hidden" value="" />
                    <label for="exampleInputName">Your name</label>
                    <input type="text" class="form-control" name="exampleInputName" id="exampleInputName" placeholder="Name">
                <div class="form-group">
                    <label for="exampleInputEmail">Your email address</label>
                    <input type="email" class="form-control" name="exampleInputEmail" id="exampleInputEmail" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Your friend email address</label>
                    <input type="email" class="form-control" name="exampleInputEmail1" id="exampleInputEmail1" placeholder="Friend Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage">eCard message</label>
                    <textarea rows="10" class="form-control" name="exampleInputMessage" id="exampleInputMessage" placeholder="Simple Message">
                    </textarea>
                </div>
                    <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </div>    
         </div>
    </body>
</html>
