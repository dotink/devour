<?php

namespace Devour;

/**
 *
 */
class Trim
{
	/**
	 *
	 */
	public function __invoke($value, array $context = array())
	{
		if (!is_string($value)) {
			return $value;
		}

		return trim($value) ?: NULL;
	}
}
