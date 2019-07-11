<!DOCTYPE html>
<html lang="en">

<body>


    <?php 

        $a = 310;

        if ($a <= 50) {
            $z = $a * 3.5;
            echo "Bill for $a units is $z";
        }elseif (($a > 50) && ($a <=150)) {
            $z = $a * 4;
            echo "Bill for $a units is $z";
        }elseif (($a > 150)&&($a <=250)) {
            $z = $a * 5.2;
            echo "Bill for $a units is $z";
        }elseif ($a > 250) {
            $z = $a * 6.5;
            echo "Bill for $a units is $z";
        }


     ?>


    
</body>
</html>