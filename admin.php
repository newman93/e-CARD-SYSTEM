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
            function addCategory(){
                $("#content").load("category.html");
            };
            function addMedia() {
                $("#content").load("media.html");
            };
            function allCategories() {
                $("#content").load("allcategories.php");
            };
            function allMedia() {
                $("#content").load("allmedia.php");
            };
        </script>
    </head>
    <body>
        <div class="row">
            <div class="col-md-3" id="left">
                <div id="header">
                    <a href="admin.php"><div class="enjoy-css">ECARDS SYSTEM</div></a>
                    <hr class="line" />
                </div>
                <div id="dashboard">
                    <span class="accapit">DASHBOARD</span> <br>
                    <span class="button">USERNAME: PHILIP</span><br>
                    <a href="logout.php">LOG OUT</a>
                    <hr class="line" />
                </div>
                <div id="category">
                    <span class="accapit">CATEGORY</span> <br>
                    <span class="button" onclick="addCategory();">ADD NEW CATEGORY</span> <br>
                    <span class="button" onclick="allCategories();">ALL CATEGORIES</span>
                    <hr class="line" />
                </div>
                <div id="media">
                    <span class="accapit">MEDIA</span> <br>
                    <span class="button" onclick="addMedia();">ADD NEW MEDIA</span> <br>
                    <span class="button" onclick="allMedia();">ALL MEDIA</span>
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
