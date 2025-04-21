<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>S.N.</td>
            <td>Name</td>
            <td>Email</td>
        </tr>
        <tr>
            <td>1</td>
            <td>Ritu</td>
            <td>ritu@gmail.com</td>
        </tr>
        <tr>
        <td>1</td>
            <td>Ritu</td>
            <td>ritu@gmail.com</td>
        </tr>
        <tr>
        <td>1</td>
            <td>Ritu</td>
            <td>ritu@gmail.com</td>
        </tr>
    </table>
    
</body>
</html> -->

<?php
    echo "<table border='1'>";
$users=[
    [1,"Ritu","ritu@gmail.com"],
    [2,"Guru","guru@gmail.com"],
    [3,"Raj","raj@gmail.com"],
    [4,"Rajesh","rajesh@gmail.com"],
    [5,"Raju","raju@gmail.com"]
];

for($i=0; $i<count($users); $i++){
    echo "<tr>";
    for($j=0; $j<count($users[$i]); $j++){
        echo "<td>";
        echo $users[$i][$j];
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>