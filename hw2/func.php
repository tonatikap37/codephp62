<?php
// myFunction();

// function myFunction()
// {
//     echo "my1";
// }

// function functon2()
// {
//     echo "my";

//     return "you call me";
// }
//$calFunc = functon2();

//echo $calFunc;

// function calnumber($num1, $num2 = 7)
// {
//     $a = $num1;
//     $b = $num2;
//     $c = $a + $b;
//     $num1 = 6;
//     return $c;
// }
//// $num1 = 5;
// $num2 = 6;
// echo calnumber($num1,9);
// echo $num1;
// function calGPA($score)
// {
//     $gpa = "";
   // if ($num == 0 || $num == 1) {
    //    return 1;
    ///} else {
        //return $num * fatorail($num - 1);  }
      //  > 79 = A
        //>69 <80 = B
        //>59 <70 = C
        //>49 <60 = D
        //<50 = F
function GPA($score = 70)
{
     switch ($score = 70){
        case $score > 79:
        break;
        case ($score > 69 && $score <  80):
            echo "เกรด A" ;
            break;
        case ($score >= 69):
            echo "เกรด B";
            break;
        case ($score >= 59):
            echo "เกรด C";
            break;
        case ($score >= 49):
            echo "เกรด D";
            break;
            case ($score < 49):
                echo "เกรด D";
                break;
        default:
            echo "ติดF";
            break;
    }
    echo "<br>";
    return $score;
}
echo "<br>";
echo GPA();
  //echo fatorail(5) . "<br>";

// $Fullname = "Mr.Suradet Petcharanon";
// $lastname = substr($Fullname,11,3);
// echo $lastname;
// echo strlen($lastname);
// echo "<br>";
// echo max(1,4.33,45);
// echo round(19.987777,2);

//echo date("d/m/Y", "1579737600");
//echo "<br>";
// echo getdate();
//$currentdate = getdate();
//echo $currentdate["mday"];
//echo time();
