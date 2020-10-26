<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_Timona
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Administrator\View\Hocvien;

defined('_JEXEC') or die;

use Exception;

use Joomla\CMS\Factory;

use Joomla\CMS\Form\Form;

use Joomla\CMS\Helper\ContentHelper;

use Joomla\CMS\Language\Multilanguage;

use Joomla\CMS\Language\Text;

use Joomla\CMS\MVC\View\GenericDataException;

use Joomla\CMS\MVC\View\HtmlView as BaseHtmlView;

use Joomla\CMS\Pagination\Pagination;

use Joomla\CMS\Toolbar\Toolbar;

use Joomla\CMS\Toolbar\ToolbarHelper;

use Joomla\Component\Timona\Administrator\Model\HocvienModel;

use Joomla\Registry\Registry;

/**
 * View class for a list of Hocvien.
 *
 * @since  1.6
 */

class HtmlView extends BaseHtmlView

{
    public function display($tpl = null)
    {
        $app = Factory::getApplication();
        $params = $app->getParams();

        // Get some data from the models
        $state = $this->get('State');
        $item = $this->get('Item');
        $children = $this->get('Children');
        $parent = $this->get('Parent');
        $pagination = $this->get('Pagination');

        parent::display($tpl); // Flag indicates to not add limitstart=0 to URL
        $pagination->hideEmptyLimitstart = true;

   }
}
