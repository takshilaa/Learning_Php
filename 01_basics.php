<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learning Php</title>
</head>
<body>
    <div class="container">
        This is my first php website
    </div>
    <?php 
               //Constants in php

               define('PI', 3.14);
    
              echo"this is php ";
              echo"<br>";
              $variable1=3;
              $variable2=88;
              

              //operators in PHP
            //   Arithmetic operators

            echo "the value of variabe1 + variable2 is  : ";
            echo $variable1 + $variable2;echo "<br>";
            echo "the value of variabe1 - variable2 is  : ";
            echo $variable1 - $variable2;echo "<br>";
            echo "the value of variabe1 * variable2 is  : ";
            echo $variable1 * $variable2;echo "<br>";
            echo "the value of variabe1 / variable2 is  : ";
            echo $variable1 / $variable2;echo "<br>";
            echo "<br>";


            //   Assignment operators

            $newVar = $variable1;
            $newVar +=1;
            echo "the value of new variabe is " ;
            echo $newVar;
            echo "<br>";

            //   Comparison operators

            echo"the value of 1==4 is";
            echo var_dump(1==4);echo "<br>";

            echo"the value of 1!=4 is";
            echo var_dump(1!=4);echo "<br>";

            echo"the value of 1>=4 is";
            echo var_dump(1>=4);echo "<br>";

            echo"the value of 1<=4 is";
            echo var_dump(1<=4);echo "<br>";

            //   Increment/Decrement operators
            // variable1 = 3
            echo $variable1++;echo "<br>"; //after printing 3 =  4
            echo $variable1--;echo "<br>"; //after printing 4 = 3
            echo ++$variable1;echo "<br>"; //4 
            echo --$variable1;echo "<br>";//3

            //   Logical operators

            // and (&&)
            // OR (||)
            // XOR
            // NOT(!)

            // $myVar = (true) and (true);
            // $myVar = (true) and (false);
            // $myVar = (false) and (false);
            
            echo var_dump($myVar);

             echo "<br> <h1> Data Types </h1> <br>";
            //Data types
            // 1.String
            $var = "Im a string";
            echo var_dump($var);
            echo "<br>";

            // 2. Int
            $var = 21;
            echo var_dump($var);
            echo "<br>";

            // 3. Float
            $var = 21.6;
            echo var_dump($var);
            echo "<br>";

            // 4. Boolean
            $var = true;
            echo var_dump($var);
            echo "<br>";
            // 5. Array
            // 6. Object
            echo PI ;





    ?>
     
</body>
</html>