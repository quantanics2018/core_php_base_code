<!-- php script  -->
<?php


// variable declaration
// variable
$A = "4"; // string 

// typecasting 
$a = (int) $A; // string to integer 8 - 4 [low to high] and [high to low ]
// var_dump () retrive dataype
// int - 4bytes [ 4bit-1byte ] 
// string - 8  bytes
// int(10)

// echo var_dump($A); 


function mytest(){
    $b = 10;
    // global keyword
    global $a;

    return $b+$a;
}


echo "global variable".$A;
echo "<br />";
echo "adding global variable and inside function value result:\t".mytest();
echo "<br />";
print("Hello world");

echo ("<br/>open / close");

// print("a= %d",a);
// output : [ a = 10 ]


/*

output 
    <h2>2</h2>
    2

*/

// data Types
/*

integer
float
double
boolean
string 
array
object
null



*/



?>