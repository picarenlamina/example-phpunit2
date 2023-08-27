<?php

namespace App;

use InvalidArgumentException;


class Libreria
{
	static function factorial( $valor )
	{
		/* if ( not is_int( $valor ) )
			 throw new InvalidArgumentException("Error " . $valor );
		 */
		if( $valor == 0 || $valor == 1 )
			$resultado = 1;
		else
		{
			$resultado = 1;
			for( $i = 1; $i <= $valor; $i++ )
				$resultado = $resultado * $i;
		}
		return $resultado;		
	}
}