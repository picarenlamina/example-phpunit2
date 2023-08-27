<?php

//namespace Tests;

require 'vendor/autoload.php';
use App\Libreria;



use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;





final class Libreria3Test extends TestCase
{
    
	
	public function test_funcional_factorial()
	{
		$client = new GuzzleHttp\Client();
		$domDoc = new DOMDocument();
		$url = 'http://localhost/guzzle/first/app/';

		//$res = $client->request('GET', $url . 'prueba2.php', ['query' => ['valor' => '5', ]]);
		
		$res = $client->request('POST', $url . 'prueba3.php', ['form_params' => ['valor' => '5','submit' => 'Enviar', ]]);


		$html = (string)$res->getBody();


		echo $html;
		// The @ in front of $domDoc will suppress any warnings
		$domHtml = @$domDoc->loadHTML($html);

		//discard white space 
		$domDoc->preserveWhiteSpace = false;

		  //the table by its tag name
		  //$divs = $domDoc->getElementsByTagName('div');


		  // loop over the table rows
		  /* foreach ($divs as $item) 
		  {
		   var_dump( $item );
		   echo $item->nodeValue;
			} */

		$item = $domDoc->getElementById('resultado');
		
		
		

		$this->assertEquals(120, $item->nodeValue);
		
	}
	
	
}