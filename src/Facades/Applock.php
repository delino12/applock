<?php

namespace Delino\Applock\Facades;

use Illuminate\Support\Facades\Facade;


/**
 * Cavilock pack
 */
class Applock extends Facade
{
	// locate facade accessor
	protected static function getFacadeAccessor(){
		return 'delino-applock';
	}
}