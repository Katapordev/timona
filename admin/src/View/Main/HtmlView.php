<?php

/**

 * @package     Joomla.Administrator

 * @subpackage  com_banners

 *

 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.

 * @license     GNU General Public License version 2 or later; see LICENSE.txt

 */



namespace Joomla\Component\Taza\Administrator\View\Main;



defined('_JEXEC') or die;



use Exception;

use Joomla\CMS\Component\ComponentHelper;

use Joomla\CMS\Factory;

use Joomla\CMS\Form\Form;

use Joomla\CMS\Helper\ContentHelper;

use Joomla\CMS\Language\Text;

use Joomla\CMS\MVC\View\GenericDataException;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

use Joomla\CMS\Toolbar\ToolbarHelper;

use Joomla\Component\Taza\Administrator\Model\MainModel;



/**

 * View to edit a banner.

 *

 * @since  1.5

 */

class HtmlView extends BaseHtmlView

{

	/**

	 * The Form object

	 *

	 * @var    Form

	 * @since  1.5

	 */

	protected $form;



	/**

	 * The active item

	 *

	 * @var    object

	 * @since  1.5

	 */

	protected $item;



	/**

	 * The model state

	 *

	 * @var    object

	 * @since  1.5

	 */

	protected $state;



	/**

	 * Display the view

	 *

	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.

	 *

	 * @return  void

	 *

	 * @since   1.5

	 *

	 * @throws  Exception

	 */

	public function display($tpl = null): void

	{

		/** @var BannerModel $model */

		$model       = $this->getModel();



		parent::display($tpl);

	}

}

