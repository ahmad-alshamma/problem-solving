<?php 
    echo "Q1 --------------------------------------------------<br>";
    // write function to print array reverse
    function reverse($array1){
        for ($i=count($array1)-1; $i>=0 ; $i--){
            echo($array1[$i])."<br>";    
        }
        echo "<br>";
    }
    $question1 = [10 , 20 , 30 , 40 , 50];
    reverse($question1);

?>


<?php 
      echo "Q2 --------------------------------------------------<br>";
    // write function to print larage number in array
    function large_number($array2){
        $large = $array2[0];
        for ($i=0; $i<count($array2)-1; $i++){
            if($array2[$i]>$large){
                $large = $array2[$i];
            }
        }
        echo $large . "<br><br>";
    }

    $question2 = [5 , 6 , 7 , 8 , 9 ,20 , 70 , 50 , 90 , 40];
    echo large_number($question2);
?>



<?php 
    echo "Q3 --------------------------------------------------<br>";
    // write function to print smallest number in array
    function samll_number($array3){
        $small = $array3[0];
        for ($i=0; $i<count($array3)-1; $i++){
            if($array3[$i]<$small){
                $small = $array3[$i];
            }
    
        }
        echo $small . "<br>";
    }

    $question3 = [5 , 6 , 7 , 8 , 9 ,20 , 70];
    echo samll_number($question3);
?>



