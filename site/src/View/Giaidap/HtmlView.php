<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_timona
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Site\View\Giaidap;

defined('_JEXEC') or die;

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

use Joomla\Component\Timona\Site\Model\GiaidapModel;

use Joomla\Registry\Registry;

class HtmlView extends BaseHtmlView

{

    public function display($tpl = null)

    {
        $model = $this->getModel();
        parent::display($tpl);
    }

}

