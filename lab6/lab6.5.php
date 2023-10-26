<?php

class ClaseBase{
    public function test(){
        echo "ClaseBase::test() llamada \n";
    }
    final public function masTest(){
        echo "ClaseBase::masTest() llamada \n";
    }
}

class ClaseHijo extends ClaseBase{
    public function masTests(){
        echo "ClaseHijo::masTest() llamada \n";
    }
}
?>