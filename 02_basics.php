<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bascis Part 2</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max_width:80%;
        background-color: rgb(228,195,195);
        margin :auto ;
        padding: 23px;
    }
    </style>
<body>
    <div class="container">
        <h1>Let's learn about php </h1>
        This is a container

        <?php
        echo "<br>";

        // if-else
        $age =78;
        if($age > 18)
        {
            echo "Eligible";
        }
        else{
            echo "Not eligible";
        }

        //array
        echo "<br>";
        $libraries = array("CPP","java","php","python");
        echo $libraries[1];

        //for-loop
        for($i =0; $i<4 ; $i++)
        {
            echo"<br> The values for for-loop are :: ";
            echo $i;
        }

        echo"<br>" ;
        //while loop
        $a = 0;
        while($a <= 4)
        {
            echo "<br> The value of WHILE loop is :: ";
            echo $a;
            $a++;
        }
        echo "<br>";

        //do-while
        $a= 0;
        do{     
            echo "<br> The value of libraries is :: ";
            echo $libraries[$a];
            $a++;

        }while($a < count($libraries));
        echo "<br>";
       
        //for each loop
        foreach($libraries as $values)
        {
            echo "<br>The values is  :: ";
            echo $values;
        }
        echo "<br>";

         //functions
         function print_number($num)
         {
            echo "<br> Your number is ::";
            echo $num;

         }
         print_number(77);
        

        ?>
    </div>
    
</body>
</html>