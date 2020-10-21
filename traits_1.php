
<?php
// Example #1 Trait example
trait ezcReflectionReturnInfo
{
    public function triats()
    {
        echo "OOP is fun! ";
    }

    function getReturnType()
    {
        echo "Mohammad Ali Abdullah";
    }
    function getReturnDescription()
    { 
        echo "Sanjida Akter";
    }
}

class ReflectionMetho 
{
    use ezcReflectionReturnInfo;
}

$obj = new ReflectionMetho();
$obj->getReturnType();
$obj->getReturnDescription();
?>
