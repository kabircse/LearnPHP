<?php
          class MagicMetod1{
              function __get($name){
                  echo "__get executed with name $name ";
              }
              function __set($name , $value){
                  echo "__set executed with name $name , value $value";
              }
              function __call($name , $parameter) {
                  $a = print_r($parameter , true); //taking recursive array in string
                  echo "__call executed with name $name , parameter $a";
              }
              static function __callStatic($name , $parameter){
                  $a = print_r($parameter , true); //taking recursive array in string
                  echo "__callStatic executed with name $name , parameter $a";
              }
          }
          $a = new MagicMetod1();
          $a->abc = 3;//__set will be called/triggerd/executed
          $a->pqr;//__get will be called
          $a->getMyName('Kabir' , 'Hossain', '28');//__call will be executed
          MagicMetod1::xyz('Monir' , 'Hossain' , '29', 'B-Baria');//__callstatic will be executed
          
          
    //Output:
    /*
__set executed with name abc , value 3__get executed with name pqr __call executed with name getMyName , parameter Array
(
    [0] => Kabir
    [1] => Hossain
    [2] => 28
)
__callStatic executed with name xyz , parameter Array
(
    [0] => Monir
    [1] => Hossain
    [2] => 28
    [3] => B-Baria
)
*/
