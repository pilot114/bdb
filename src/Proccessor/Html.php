<?php

namespace Bdb\Proccessor;

use \PHPHtmlParser\Dom;

class Html
{
	private $dom;

	function __construct()
	{
		$this->dom = new Dom();
	}

	public function filterData($data, $selectors)
	{
		$this->dom->load($data);
		$result = [];
		foreach ($selectors as $name => $selector) {
			$result[$name] = [];
			foreach ($this->dom->find($selector) as $find) {
				$result[$name][] = $find->text();
			}
		}
		return $result;
	}
}