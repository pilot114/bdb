<?php

namespace Bdb\Processor;

use \PHPHtmlParser\Dom;

class Html
{
	private $dom;
	private $messages = [];

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

			$finds = $this->dom->find($selector);
			foreach ($finds as $find) {
				$result[$name][] = $find->text();
			}
			$this->messages[] = sprintf("%s: %d\n", $selector, count($finds));
		}
		return $result;
	}
}