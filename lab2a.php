<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab 2a</title>
</head>
<body>
    <table border=1 cellspacing=0 cellpadding=15>
        <tr>
            <th>Name</th>
            <th>Marks</th>
        </tr>

        <?php
    $students = array("Ram"=>30, "Hari"=>40, "Shyam"=>50,"Bari"=>60,"Aam"=>70);
    $names=array_keys($students);
    
    for ($i=0; $i <count($students) ; $i++) { 
        echo "<tr>
        <td> $names[$i]</td> 
        <td>".$students[$names[$i]]."</td>
        </tr> ";
    }
    echo "</table> <br>
    Using foreach loop <br>";

    echo"<table border=1 cellspacing=0 cellpadding=15>
    <tr>
        <th>Name</th>
        <th>Marks</th>
    </tr>";

    foreach ($students as $name=>$marks) {
        echo "<tr>
        <td>$name</td>
        <td>$marks</td>
        </tr>";

    }
    
    ?>
    </table>
</body>
</html>