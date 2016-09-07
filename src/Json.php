<?php
namespace phptestsoft11;
class Json
{
	public function encode($data)
	{
		print_r($data);
		//return json_encode($data);
	}

	public function decode($data)
	{
		return json_decode($data,true);
	}
}
