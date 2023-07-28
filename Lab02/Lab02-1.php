<?php
//if...else
$age = 50;
 if ($age < 30) {
    echo "Your age is less than 30!";
}  
elseif ($age > 30 && $age < 40)
{ 
    echo "Your age is between 30 and 40!";
} 
elseif ($age > 40 && $age < 50)
   { 
    echo "Your age is between 40 and 50!";
} 
else
{
    echo "Your age is greater than 50!";
}
?>
<hr>
<?php
$max = 0;
echo $i =0;
echo ",";
echo $j = 1;
echo ",";
$result=0;
while ($max < 10 )
{
$result = $i + $j;
 $i = $j;
  $j = $result;

$max = $max + 1;
echo $result;
echo",";
}
?>

<?php
$fruits = array(' apple ', 'banana', 'orange', 'grapes');
 foreach ($fruits as $fruit)
{ 
 echo $fruit; 
 echo "<br/>";
}
$employee = array('name' => 'John Smith','age'=> 30, 'profession');
 foreach ($employee as $key => $value)
 {
  echo sprintf("%s: %s</br>", $key, $value);
   echo "<br/>";
 }

  ?>
<hr>
<?php 
echo 'Simple Break';
 for($i = 1; $i <= 2; $i++) {
 echo "\n".'$i=.$i.';
  for($j = 1;
   $j <= 5;
    $j++) { if($j == 2) { 
        break;
     }
      echo '$j ='.$j.'';
    }
}
echo 'Multi-level Break';
 for($i = 1; $i <= 2; $i++) 
 { 
    echo "\n".'$i = '.$i.'';
  
 for($j = 1; $j <= 5; $j++) 
 { if($j == 2) { 
    break 2; 
}
  echo '$j = '.$j.'';
}
 
}
 ?>