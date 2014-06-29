<?php
/**
 * @package	wp_praetorians
 * @license   THE BEER-WARE LICENSE
 * @copyright 2014 nekudo.com
 * @author Simon Samtleben <support@nekudo.com>
 */

class Praetorians
{
	const VERSION = '1.0.0';
	protected $piIsSet = false;

	public function add_pi()
	{
		if($this->piIsSet === true)
		{
			return;
		}

		if(is_feed() === true)
		{
			return;
		}

		$pi = '<div style="position: fixed; bottom: 0; right: 0; margin-right: 4px;"><a href="http://praetorians.nekudo.com" style="color: #000;">&pi;</a></div>';
		echo $pi;
		$this->piIsSet = true;
	}
}