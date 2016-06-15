<?php
        /* Method Overloading: Method Overloading means multiple methods with same name but with different parametres.*/
        
        class Sum {
            public function getSum() {
        		$sum = 0;
                $args = func_get_args();
        
                if (empty($args)) return 0;
        
                foreach ($args as $arg) {
                    $sum += $arg;
                }
                return $sum;
            }
        }
        
        $s = new Sum();
        echo $s->getSum() . "\n" ;//no parameter
        echo $s->getSum(5) . "\n" ;//1 parameter
        echo $s->getSum(3, 4) . "\n" ;//2 parameter
        echo $s->getSum(3, 4, 7) . "\n" ;//3 parameter
/*
    Output:
    0
    5
    7
    14
*/    
    ?>
