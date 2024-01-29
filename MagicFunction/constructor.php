<!-- Constructor : special method in a class that is called automatically when an object is created. -->
<!-- Purpose: Used for initializing object properties or performing any necessary setup when an object is instantiated. -->

<?php
class BaseClass {
    function __construct() {
        print "In BaseClass constructor\n";
    }
}

class SubClass extends BaseClass {
    function __construct() {
        parent::__construct();
        print "In SubClass constructor\n";
    }
}

class OtherSubClass extends BaseClass {
    // inherits BaseClass's constructor
}

$obj = new BaseClass();       // In BaseClass constructor
$obj = new SubClass();        // In BaseClass constructor // In SubClass constructor
$obj = new OtherSubClass();   // In BaseClass constructor




//Constructor with parameter
class Point {
    protected int $x;
    protected int $y;

    public function __construct(int $x, int $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }
}

$p1 = new Point(4, 5);
$p2 = new Point(4);  // $y will take its default value of 0.
$p3 = new Point(y: 5, x: 4);  // Named parameters (PHP 8.0+)

// Constructor Promotion (PHP 8.0+): A shortcut to declare and assign constructor parameters to object properties.
// Note: Properties are created and assigned automatically based on constructor parameters.
class ConstructorPromotation {
    public function __construct(protected int $x, protected int $y = 0) {
    }
}






//Constructor property promotion
//1.Traditional Approach:
class PointOne {
    private int $x;
    private int $y;
    
    public function __construct(int $x, int $y) {
        $this->x = $x;
        $this->y = $y;
    }
}
//2.Constructor Property Promotion:
class PointTwo {
    public function __construct(public int $x, public int $y) {
    }
}

//Old-style Constructors (Deprecated in PHP 8.0.0):
// Avoid using a method with the same name as the class for a constructor.
// Note: Use __construct() instead.
// using the old-style constructor is deprecated, and it will result in an E_DEPRECATED error. Although it may still work, it is advised to update your code to use the __construct() method instead.

//old style
class MyClass {
    function MyClass() {
        // constructor logic
    }
}
//new style
class MyClassNew {
    function __construct() {
        // constructor logic
    }
}


// New in Initializers (PHP 8.1.0):
static $x = new MyClassNew;          // Sets $x as an instance of MyClassNew.
const C = new MyClassNew;             // Defines a constant with an instance of MyClassNew.
function test($param = new MyClassNew) {}  // Function parameter with a default instance of MyClassNew.

class Test {
    public function __construct(
        public $prop = new MyClassNew,   // Constructor property promotion with a default instance of MyClassNew.
    ) {}
}




?>