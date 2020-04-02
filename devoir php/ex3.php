<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Central d'achats</h1>
    <h4>Commande clients</h4>
    <table border=1>
        <tr>
            <th>Numero de commande</th>
            <th>Numero Client</th>
            <th>Date de commande</th>
            <th>Designation article</th>
            <th>Quantites</th>
            <th>Prix(DH)</th>
            <th>Date de livraison</th>
            <th>Addresse  Client</th>
        </tr>
        <?php
            $f=fopen("t.txt","r+");
            while($tmp=fgets($f)){
                echo "<tr>";
                foreach(explode(" | ",$tmp) as $a)
                    echo "<td>$a</td>";
                echo "</tr>";
            } 
        ?>
    </table>
</body>
</html>