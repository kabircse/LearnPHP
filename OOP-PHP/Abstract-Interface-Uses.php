## When & how to implement abstract and interface by Nahidul Hasan

Interface Class: We know that an interface is defined by the interface keyword and all methods are abstract. All methods declared in an interface must be public; this is simply the nature of an interface.
Example:
<?php
interface Logger
{
    public function execute();
}

In an interface, the method body is not defined, just the name and the parameters. If we do not use an interface, what problems will be encounter? Why should we use interface?
Answers to these questions in this article. 
<?php
class LogToDatabase 
{
    public function execute($message)
    {
        var_dump('log the message to a database :'.$message);
    }
}

class LogToFile 
{
    public function execute($message)
    {
        var_dump('log the message to a file :'.$message);
    }
}

class UsersController 
{ 
    protected $logger;
    
    public function __construct(LogToFile $logger)
    {
        $this->logger = $logger;
    }
    
    public function show()
    { 
        $user = 'nahid';
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToFile);
$controller->show();

In above example, I do not use interface. I write to the log using the LogToFile class.
But, if I want to write a log using LogToDatabase, I have to change the hard-coded class reference in the above code on line number 23.
That line code is:
public  function __construct(LogToFile $logger)
This code will be:
public  function __construct(LogToDatabase $logger)

In a large project, if I have multiple classes and I need to change them, I have to change all the classes manually. But, if we use an interface, this problem is solved; we will not need to change code manually.
Now, see the following code and try to understand what happens if I use interface:
<?php

interface Logger 
{
    public function execute($message);
}

class LogToDatabase implements Logger 
{
    public function execute($message){
        var_dump('log the message to a database :'.$message);
    }
}

class LogToFile implements Logger 
{
    public function execute($message) 
    {
        var_dump('log the message to a file :'.$message);
    }
}

class UsersController 
{
    protected $logger;
    
    public function __construct(Logger $logger) 
    {
        $this->logger = $logger;
    }
    
    public function show() 
    {
        $user = 'nahid';
        $this->logger->execute($user);
    }
}

$controller = new UsersController(new LogToDatabase);
$controller->show();


Now, if I change from LogToDatabase to LogToFile, I do not have to change the constructor method manually. In the constructor method, I have injected an interface; not an arbitrary class.
If you have multiple classes and swap from one class to another class, you will get the same result without changing any class references.
In the above example, I write the log using LogToDatabase and now I want to write the log using LogToFile.
I can call it like this:
$controller = new UsersController(new LogToFile);
$controller->show();
I get results without changing other classes because interface handle this swapping issue.













Abstract Class: An abstract class is a class that is only partially implemented by the programmer. It may contain at least one abstract method, which is a method without any actual code in it — just the name and the parameters, and that it has been marked as “abstract”.
An abstract method is simply a function definition that serves to tell the programmer that the method must be implemented in a child class.
Here is an example: 
<?php
abstract class AbstractClass
{
    // Force Extending class to define this method
    abstract protected function getValue();    
    public function printOut() 
    {
        print $this->getValue() . "\n";
    }
}

Now, the question is: “How do we know that a method will be needed and that it must be implemented?” I will try to explain this here.
Please see the Tea class: 
<?php
class Tea 
{
    public function addTea()
    {
        var_dump('Add proper amount of tea');
        return $this;
    }
    protected  function  addHotWater()
    {
        var_dump('Pour Hot water into cup');
        return $this;
    }    
    protected  function addSugar()
    {
        var_dump('Add proper amount of sugar');
        return $this;
    }    
    protected function addMilk()
    {
        var_dump('Add proper amount of Milk');
        return $this;
    }
    public function make()
    {
        return $this
            ->addHotWater()
            ->addSugar()
            ->addTea()
            ->addMilk();
    }
}

$tea = new Tea();
$tea->make();

Now, we look at the Coffee class.
<?php
class Coffee 
{
    public function addCoffee()
    {
        var_dump('Add proper amount of coffee');
        return $this;
    }

    protected  function  addHotWater()
    {
        var_dump('Pour Hot water into cup');
        return $this;
    }
    
    protected  function addSugar()
    {
        var_dump('Add proper amount of sugar');
        return $this;
    }
    
    protected function addMilk()
    {
        var_dump('Add proper amount of Milk');
        return $this;
    }

    public function make()
    {
        return $this
            ->addHotWater()
            ->addSugar()
            ->addCoffee()
            ->addMilk();
    }
}

$tea = new Coffee();
$tea->make();

In the two classes above, the three methods addHotWater(), addSugar(), and addMilk() are the same.
So, we should remove duplicate code. We can do that like this:
<?php
abstract class Template
{
    public function make()
    {
        return $this
            ->addHotWater()
            ->addSugar()
            ->addPrimaryToppings()
            ->addMilk();
    }
    
    protected  function  addHotWater()
    {
        var_dump('Pour Hot water into cup');
        return $this;
    }
    
    protected  function addSugar()
    {
        var_dump('Add proper amount of sugar');
        return $this;
    }    
    protected function addMilk()
    {
        var_dump('Add proper amount of Milk');
        return $this;
    }    
    protected abstract function addPrimaryToppings();
}

class Tea extends Template
{
    public function addPrimaryToppings()
    {
        var_dump('Add proper amount of tea');
        return $this;
    }
}

$tea = new Tea();
$tea->make();

class Coffee extends Template
{
    public function addPrimaryToppings()
    {
        var_dump('Add proper amount of Coffee');
        return $this;
    }
}
$coffee = new Coffee();
$coffee->make();

I make an abstract class and name it Template.
Here, I define addHotWater(), addSugar(), addMilk(), and make an abstract method named addPrimaryToppings.
Now, if I make the Tea class extend the Template class, I will get the three defined methods and I have to define the addPrimaryToppings() method. The Coffee class will as well, in a similar way.
And if you’d like to practice and get code about interface and abstract classes, please check out my GitHub (stars always appreciated) repository.
Thanks for reading.

