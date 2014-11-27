<?php

class TraitUser {

	use FunctionsTrait;

/**
 * @param callable $callback Callback
 * @return void
 */
	public function doThing(callable $callback) {
		$visitor = function($expression) use (&$visitor, $callback) {
			echo 'It works';
		};
		$visitor($this);
	}

}
