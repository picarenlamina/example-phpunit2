<?php

namespace Tests;



use PHPUnit\Framework\TestCase;
use App\Libreria;

require 'vendor/autoload.php';


final class Libreria1Test extends TestCase
{
    public function test_factorial()
	{
		
		
		$valor  = Libreria::factorial( 5 );

		$this->assertEquals(120, $valor);
		//$this->assertEquals(121, $valor);
		
	}
	

	
}
