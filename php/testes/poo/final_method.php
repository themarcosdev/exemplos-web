<?php
class Animals {
     final function age(){}
     private function move(){}
}

class Fishes extends Animals {
    // private function age(){} // age() cannot be re-write why is a final met. from parent (keep equal to all animals);
    private function move(){} // move is/need be diferent to fishes (swin);
}
?>
