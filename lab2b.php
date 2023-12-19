<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 2b</title>
</head>
<p></p>
<body>
    <?php
     $str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla expedita animi eum aut, nam ipsa delectus culpa, fuga facere aperiam voluptatibus laboriosam doloribus earum? Et, error deleniti fugiat doloribus quod eos ipsa aperiam consectetur accusamus impedit magni itaque quaerat, eius aliquid odio, officiis amet ea voluptates cupiditate delectus vel? Dolores!";

     $strLength = mb_strlen($str);
     
     if($strLength <= 20) 
     {  echo $str;
     }
     else{
         if($str[20] == " ") {
            echo substr($str, 0, 20);
         }
         else{
             $i = 20;
             while ($i < $strLength && $str[$i] != " ")
                 $i++;
             echo substr($str, 0, $i);
         }
     }
    ?>
</body>
</html>