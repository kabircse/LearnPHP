
    Magic Methods: Magic methods in php are some predefined function by php complier which executes on event.
        List of List of Magic Methods in PHP
        
    Some Magic Method Description:
    
    __construct:	This magic methods is called when someone create object of your class. Usually this is used for creating constructor in php5.
    __destruct:	This magic method is called when object of your class is unset. This is just opposite of __construct.
    __get:	This method called when your object attempt to read property or variable of the class which is inaccessible or unavailable.
    __set:	This method called when object of your class attempts to set value of the property which is really inaccessible or unavailable in your class.
    __isset:	This magic methods trigger when isset() function is applied on any property of the class which isinaccessible or unavailable.
    __unset	__unset: is something opposite of isset method. This method triggers when unset() function called on inaccessible or unavailable property of the class.
    __call:	__call magic method trigger when you are attempting to call method or function of the class which is either inaccessible or unavailable.
    __callstatic:	__callstatic execture when inaccessible or unavailable method is in static context.
    __sleep:	__sleep methods trigger when you are going to serialize your class object.
    __wakeup:	__wakeup executes when you are un serializing any class object.
    __toString:	__toString executes when you are using echo on your object.
    __invoke:	__invoke called when you are using object of your class as function.
