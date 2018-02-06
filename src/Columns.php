<?php
/*
 * Copyright Tino Kupke
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mopic\StandardExtension;

use Contao\DataContainer;
use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;

class Columns
{
	public function generatePageHook(PageModel $page, LayoutModel $layout, PageRegular $pageRegular)
	{
		if ($layout->rs_columns_load_css) {
			$GLOBALS['TL_CSS'][] = 'web/bundles/standardextension/css/fe_main.css||static';
		}
	}
}
