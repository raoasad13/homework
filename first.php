<!DOCTYPE html>
<html>
<body>

<?php
  
  echo "MY FIRST php code";
  
  echo "<br>";
  
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
?> 

</body>
</html>
