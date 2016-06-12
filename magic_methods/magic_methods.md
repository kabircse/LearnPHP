
    Magic Methods: Magic methods in php are some predefined function by php complier which executes on event.
        List of List of Magic Methods in PHP
        
        
    Some Magic Method Description:
    __construct:	This magic methods is called when someone create object of your class. Usually this is used for creating constructor in php5.
    __destruct:	This magic method is called when object of your class is unset. This is just opposite of __construct.
    __get: takes one argument and executes when any inaccessible or unavailable property of the method is called. It takes name of the property as argument.
    __set: takes two property and executes when object try to set value in inaccessible property. It take first parameter as name of the property and second as the value which object is try to set.
    __call: method fires when object of your class is trying to call method of property which is either non accessible or not available. It takes 2 parameter  First parameter is string and is name of function. Second parameter is an array which is arguments passed in the function.
    __callStatic: is a static magic method. It executes when any method of your class is called by static techniques.
    __isset:	This magic methods trigger when isset() function is applied on any property of the class which isinaccessible or unavailable.
    __unset	__unset: is something opposite of isset method. This method triggers when unset() function called on inaccessible or unavailable property of the class.
    __sleep:	__sleep methods trigger when you are going to serialize your class object.
    __wakeup:	__wakeup executes when you are un serializing any class object.
    __toString:	__toString executes when you are using echo on your object.
    __invoke:	__invoke called when you are using object of your class as function.
