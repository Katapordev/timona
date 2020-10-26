<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_Timona
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Administrator\View\Timona;

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

use Joomla\Component\Timona\Administrator\Model\TimonaModel;

use Joomla\Registry\Registry;

/**
 * View class for a list of Timona.
 *
 * @since  1.6
 */

class HtmlView extends BaseHtmlView

{

    /**
     * The search tools form
     *
     * @var    Form
     * @since  1.6
     */

    public $filterForm;

    /**
     * The active search filters
     *
     * @var    array
     * @since  1.6
     */

    public $activeFilters = [];

    /**
     * Category data
     *
     * @var    array
     * @since  1.6
     */

    protected $categories = [];

    /**
     * An array of items
     *
     * @var    array
     * @since  1.6
     */

    protected $items = [];

    /**
     * The pagination object
     *
     * @var    Pagination
     * @since  1.6
     */

    protected $pagination;

    /**
     * The model state
     *
     * @var    Registry
     * @since  1.6
     */

    protected $state;

    /**
     * Method to display the view.
     *
     * @param   string  $tpl  A template file to load. [optional]
     *
     * @return  void
     *
     * @since   1.6
     * @throws  Exception
     */

    public function display($tpl = null):
        void

        {

            /** @var TimonaModel $model */

            $model = $this->getModel();

            parent::display($tpl);

        }

    }
    
