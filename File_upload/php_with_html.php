<?php
$h2_color="blue";
echo "<h1 style='color:red' >Hello</h1>";
echo "<h2 style='color:green' >Hello</h2>";
?> 

<?php
$name="Guru";
echo "<h1 style='color:orange'> My name is $name</h1>";
// echo "<h1 style='color:orange'>".$name."</h1>"; // php ka purana version
?>

<h1 style="color:red">
    My real name is <?php echo $name ?>
</h1>

<h2 style="color:<?php echo $h2_color;?>"><?php echo "This is h2 tag"; ?></h2>
<h2 style="color:<?php echo $h2_color;?>"><?php echo $name ?></h2>
<h2 style="color:<?php echo $h2_color;?>">My name is <?php echo $name ?></h2>