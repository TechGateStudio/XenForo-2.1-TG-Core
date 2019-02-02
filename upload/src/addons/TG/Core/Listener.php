<?php

namespace TG\Core;

use TG\Core\Template\Compiler\Tag\DateTimeInputRow;

class Listener
{
	public static function appSetup(\XF\App $app) : void
	{
		$templateCompiler = $app->templateCompiler();

		$templateCompiler->setTags([
			'datetimeinput' => '\\' . DateTimeInputRow::class,
			'datetimeinputrow' => '\\' . DateTimeInputRow::class
		]);
	}
}