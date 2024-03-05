 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>give a number for the game:</p>
<form method="POST" action="martios1.php">
    first number  <input type="number" min='1' max="45" name="numbers[]"><br>
    second number <input type="number" min='1' max="45" name="numbers[]"><br>
    third number  <input type="number" min='1' max="45" name="numbers[]"><br>
    fourth number <input type="number" min='1' max="45" name="numbers[]"><br>
    fifth number  <input type="number" min='1' max="45" name="numbers[]"><br>
    <p>give a joker number</p>
    <input type="number" min='1' max="20" name="joker"><br>
    <input type="submit" value="play" name="play"><br>
</form>

<?php
if(isset($_POST['play']))
{
    $numbers = $_POST["numbers"];
    $joker = $_POST["joker"];
     sort($numbers);

    echo "<table border='1' width='300' height='300'>";
    echo "<tr><th>1</th><th>2</th><th>3</th><th>4</th><th>5</th><th>joker</th></tr>";
    echo "<tr>";
    for($i=0; $i<count($numbers); $i++)  // Fixed the typo here, changed $1 to $i
    {
        echo "<td>$numbers[$i]</td>";
    }
    echo"<td>$joker</td>";
   
    echo "</tr>";
    
    echo "</table>";
}
?>

</body>
</html>
