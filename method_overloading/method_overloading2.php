<?php
/*This is a method overloading, but in php we can not declare a method twice.So we have to exp:2.
//Exp:1
class A {
        public function func1($var1) {
            echo "hello from func1 with parameter as var1";
        }
     
        public function func1($var1,$var2) {
            echo "hello from func1 with parameter as var1 and var2";
        }
    }
     
    $objA = new A;
    $objA->func1('a');
*/

//step:2
class A {
	public function __call($name,$parm){
		print_r($parm);
	}
}
 
$objA = new A;
$objA->func1(2);
$objA->func1(2,3,4);

/*
Output:
    Array
    (
        [0] => 2
    )
    Array
    (
        [0] => 2
        [1] => 3
        [2] => 4
    )
*/
