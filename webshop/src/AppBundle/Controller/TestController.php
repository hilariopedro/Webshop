<?php
/**
 * Created by PhpStorm.
 * User: Jelle
 * Date: 2-6-2016
 * Time: 11:06
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller
{
    /**
     * @Route("/test/")
     */
    public function indexAction()
    {
        return $this->render('test/index.html.twig', [
            //'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..'),
        ]);
    }

    /**
     * @Route("/test/{page}/new")
     */
    public function newAction($page)
    {
        return $this->render('test/new.html.twig', [
            'page' => $page
        ]);
    }
}