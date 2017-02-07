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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
        <script type='text/javascript'>
            function allCategories() {
                $("#content").load("ecard.php");
            };
            function openAbout() {
                $("#content").load("about.html");
            };
             function openHowTo() {
                $("#content").load("howto.html");
            };
            function reload(category) {
                $("#content").load("send.php?category="+category);
            }
        </script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3" id="left">
                <div id="header">
                    <a href="index.php"><div class="enjoy-css">ECARDS SYSTEM</div></a>
                    <hr class="line" />
                </div>
                <div id="home">
                    <span class="accapit">HOME </span><br>
                    <span class="button" onclick="openAbout();">ABOUT ECARDS SYSTEM</span> <br>
                    <span class="button" onclick="openHowTo();">HOW TO</span>
                    <hr class="line" />
                </div>
                <div id="categories">
                    <span class="accapit">CATEGORIES</span> <br>
                    <span onclick="allCategories();" class="button accapit">ALL CATEGORIES</span> <br>
                    <?php
                        echo "<ul>";
			foreach(glob('category/*', GLOB_ONLYDIR) as $dir) {
                            $dir = str_replace('category/', '', $dir);
                                echo '<li class="button" onclick="reload(\''.$dir.'\');">'.$dir.'</li>';
                        }; 
			echo "</ul>";
                    ?>
                    <hr class="line" />
                </div>
                <!-- <div id="search">
                    <span class="accapit">SEARCH FORM</span> <br> <br>
                    <div class="input-group">
                        <input type="text" class="form-control" name="searchquery" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button" onclick="search()">Go!</button>
                        </span>
                    </div>
                    <hr class="line" /> 
                </div>                   --> 
                <div id="meta">
                    <span class="accapit">META</span> <br>
                    <a href="login.php">LOG IN</a> <br>
                    <a href="http://paajaf.org">PAAJAF FOUNDATION</a>
                    <hr class="line" />
                </div>
                <div id="footer">
                    <a href="http://paajaf.org"><img src="img/PAAJAF_logo1.png"/></a> <br>
                    © 2017 eCards <br>
                    Designed by <span class="accapit"><a href="http://smartdesignblog.com">SmartDesign</a></spaN>
                </div>
            </div>
            <div class="col-md-9" id="content">
                
            </div>
        </div>   
    </body>
</html>
