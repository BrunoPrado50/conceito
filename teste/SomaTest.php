<?php 

require 'soma.php';

use PHPUnit\Framework\TestCase;

class SomaTest extends TestCase{

    public function testeSomar(){
        $soma1 = new Soma();
        $resultado = $soma1->somar(2,3);
        $this->assertEquals(5,$resultado);
    }
}
?>