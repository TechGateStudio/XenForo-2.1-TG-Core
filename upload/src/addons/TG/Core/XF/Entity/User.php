<?php

namespace TG\Core\XF\Entity;

use XF\Mvc\Entity\Structure;

/**
 * Class User
 * @package TG\Core\XF\Entity
 *
 * COLUMNS
 * @property bool tgc_gender
 */
class User extends XFCP_User
{
	public static function getStructure(Structure $structure)
	{
		$structure = parent::getStructure($structure);

		$structure->columns += [
			'tgc_gender' => ['type' => self::STR, 'default' => 'none', 'allowedValues' => ['none', 'male', 'female']]
		];

		return $structure;
	}
}