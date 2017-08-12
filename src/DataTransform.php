<?php

namespace Bdb;

class DataTransform
{
	private $format;

	function __construct($format)
	{
		$this->format = $format;
	}

	public function save($filename, $data)
	{
	}

	public function load($filename)
	{
		return $data;
	}
}