<?php
namespace In2code\T3cm\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

/**
 * This is you Extbase Backend Module Controller. It works just like an extbase Frontend Plugin controller.
 * Inherit from \TYPO3\CMS\Extbase\Mvc\Controller\ActionController and simply implement your actions.
 * Have a look at EXT:t3cm/Resources/Private/Layouts/Backend.html for a TYPO3-Look'n'Feel Backend Layout.
 */
class SockenController extends ActionController
{
    /**
     *
     */
    public function waschenAction()
    {
        $this->view->assign('hello', 'world');
    }

    /**
     *
     */
    public function gewaschenAction()
    {
        echo 'laskhvakhvqd';
    }
}
