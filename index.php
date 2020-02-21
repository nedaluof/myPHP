<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nidal training</title>
</head>

<body>
    <span style="color:blue">
        Training (
        <br>
        <?php
        //test manual fill to $nidalArray
        //$nidalArray = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        //test Automatic fill to $myArray
        $myArray = Null;
        for ($z = 0; $z < 10; $z++) {
            $myArray[$z] = $z + 300 / 2.5;
        }
        //print out the items in the Array and 
        //determine if the item even or odd
        if ($myArray != NULL) {
            for ($i = 0; $i < count($myArray); $i++) {
                if ($myArray[$i] % 2 == 0) {
                    echo "$myArray[$i] is Even <br>";
                } else {
                    //echo "$myArray[$i] is Odd <br>";
                    //test print_r("Hi Hi") new keyword its same echo !
                    print_r("$myArray[$i] is Odd <br>");
                }
            }
        }
        ?>
        )
        <br>
    </span>
    <h3>Useful Functions in Array (Built in)</h3>
    <!-- test add new item to the end of the Array-->
    <h4 style="color: gray">
        <?php
        $nidalArray = [1, 2, 3];
        //if we need to add item at the end of the Array 
        //we should substract 1 from the real size to handle
        //the index of the Array that start from Zero 0
        $nidalArray[count($nidalArray) - 1] = 10;
        //print real size of the Array
        $arraySize = count($nidalArray);
        echo " the size of the Array is: $arraySize <br>";
        //print the head of the Array
        $head = reset($nidalArray);
        echo " first item is : $head <br>";

        //get the end of the Array , there are two ways
        //first , using end($arrayName) built in function
        $end1 = end($nidalArray);
        echo " last item is : $end1 using first way<br>";
        //second , using arrayName[count(arrayName)-1];
        $end2 = $nidalArray[count($nidalArray) - 1];
        echo " last item is : $end2 using second way <br>";
        ?>
    </h4>
    <br>
    <h3 style="color: forestgreen">Stack and Queue functions</h3>
    <h4>
        <?php
        $nidalArray2 = [1, 2, 3];
        array_push($nidalArray2, 10);
        print_r("the last item pushed using array_push <br>");
        foreach ($nidalArray2 as $value) {
            print_r($value);
            print_r('<br>');
        }
        ?>
    </h4>


</body>

</html>