<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h2{
            text-align:center
        }
        .container{
            width:100;
        }
        .container>div{
            display:inline-block;
            width:33.33%;
            height:250px;
            background:1px solde #000;
        }
        .container>div>img{
            max-width:100%;
            height:250px
        }
    </style>
</head>
<body>
    <h2>Délice des Fruits & Légumes</h2>
    <div class="container">
        <?php
            $arr=['1.png','2.png','3.png','4.png','5.png','6.png','7.png','8.png','9.png'];
            shuffle($arr);
            foreach($arr as $a)
                echo "<div><img src='$a'></div>";
        ?>
    </div>
</body>
</html>