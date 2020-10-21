
<?php
// On the other hand, "use" for traits respects the current namespace:
trait sayWhere {
    public function whereAmI() {
        echo __CLASS__;
    }
}

class Hello {
    use sayWHere;
}

class World {
    use sayWHere;
}

$a = new Hello;
$a->whereAmI(); //Hello

// $b = new World;
// $b->whereAmI(); //World
?>
