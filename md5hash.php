<?php
class md5_sum
{
	public $calculated = null;

	public function __construct ($string)
		{
			$this->calculated = md5("{$string}");
			return ($this->calculated);
		}
	public function __toString() 
	{
		return $this->calculated;
	}
}
