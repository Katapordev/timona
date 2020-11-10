<?php

/**
 * @package     Joomla.Administrator
 * @subpackage  com_banners
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Component\Timona\Administrator\Controller;

defined('_JEXEC') or die;

use Joomla\CMS\Application\CmsApplication;

use Joomla\CMS\Language\Text;

use Joomla\CMS\MVC\Controller\AdminController;

use Joomla\CMS\MVC\Factory\MVCFactoryInterface;

use Joomla\Utilities\ArrayHelper;

/**
 * Timona list controller class.
 *
 * @since  1.6
 */

class QuanlymayController extends AdminController

{

    /**
     * The prefix to use with controller messages.
     *
     * @var    string
     * @since  1.6
     */

    protected $text_prefix = 'COM_Timona_Timona';

    /**
     * Constructor.
     *
     * @param   array                $config   An optional associative array of configuration settings.
     * @param   MVCFactoryInterface  $factory  The factory.
     * @param   CmsApplication       $app      The JApplication for the dispatcher
     * @param   \JInput              $input    Input
     *
     * @since   3.0
     */

    public function __construct($config = array() , MVCFactoryInterface $factory = null, $app = null, $input = null)

    {

        parent::__construct($config, $factory, $app, $input);

        $this->registerTask('sticky_unpublish', 'sticky_publish');

    }

    /**
     * Method to get a model object, loading it if required.
     *
     * @param   string  $name    The model name. Optional.
     * @param   string  $prefix  The class prefix. Optional.
     * @param   array   $config  Configuration array for model. Optional.
     *
     * @return  \Joomla\CMS\MVC\Model\BaseDatabaseModel  The model.
     *
     * @since   1.6
     */

    public function getModel($name = 'Timona', $prefix = 'Administrator', $config = array(
        'ignore_request' => true
    ))

    {

        return parent::getModel($name, $prefix, $config);

    }

    /**
     * Stick items
     *
     * @return  void
     *
     * @since   1.6
     */

    public function sticky_publish()

    {

        // Check for request forgeries.
        

        $this->checkToken();

        $ids = $this
            ->input
            ->get('cid', array() , 'array');

        $values = array(
            'sticky_publish' => 1,
            'sticky_unpublish' => 0
        );

        $task = $this->getTask();

        $value = ArrayHelper::getValue($values, $task, 0, 'int');

        if (empty($ids))

        {

            $this
                ->app
                ->enqueueMessage(Text::_('COM_Timona_NO_Timona_SELECTED') , 'warning');

        }

        else

        {

            // Get the model.
            

            
            /** @var \Joomla\Component\Timona\Administrator\Model\TimonaModel $model */

            $model = $this->getModel();

            // Change the state of the records.
            

            if (!$model->stick($ids, $value))

            {

                $this
                    ->app
                    ->enqueueMessage($model->getError() , 'warning');

            }

            else

            {

                if ($value == 1)

                {

                    $ntext = 'COM_Timona_N_Timona_STUCK';

                }

                else

                {

                    $ntext = 'COM_Timona_N_Timona_UNSTUCK';

                }

                $this->setMessage(Text::plural($ntext, count($ids)));

            }

        }

        $this->setRedirect('index.php?option=com_Timona&view=Timona');

    }

}

