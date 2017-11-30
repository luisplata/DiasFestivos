<?php

use luisplata/FestivosColombia/Festivo;

class FestivosColombiaTest extends PHPUnit_Framework_TestCase
{
    public function nothingTest(){
        $this->assertTre(true);
    }
	public function testNothing(){
		$this->assertTrue(true);
	}
	
	public function testFestivo(){
		$festivo = new Festivo();
		$this->assertTrue($festivo->prueba());
	}
}