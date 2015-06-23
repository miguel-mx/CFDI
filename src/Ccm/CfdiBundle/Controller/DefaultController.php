<?php

namespace Ccm\CfdiBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="_root")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('_indexcfdi');
    }
}
