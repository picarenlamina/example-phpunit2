<?php

//namespace Tests;

require 'vendor/autoload.php';
use App\Libreria;



use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;





final class Libreria2Test extends TestCase
{
    
	
	public function test_funcional_factorial()
	{
		$client = new GuzzleHttp\Client();
		$domDoc = new DOMDocument();
		$url = 'localhost/';

		$res = $client->request('GET', $url . 'prueba.php', ['query' => ['valor' => '5', ]]);
		//$res = $client->request('POST', $url . 'prueba3.php', ['form_params' => ['valor' => '5','submit' => 'Enviar', ]]);

		


		$html = (string)$res->getBody();

		// The @ in front of $domDoc will suppress any warnings
		$domHtml = @$domDoc->loadHTML($html);

		//discard white space 
		$domDoc->preserveWhiteSpace = false;

		  //Buscamos etiquetas div
		  $divs = $domDoc->getElementsByTagName('div');


		  // loop over the table rows
		 /* foreach ($divs as $item) 
		  {
		   if( 
		   echo $item->nodeValue;
		  } */

		$item = $domDoc->getElementById('resultado');
		
		
		

		$this->assertEquals(5, $item->nodeValue);
		
	}
	
	
}
