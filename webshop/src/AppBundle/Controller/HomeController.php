<?php
/**
 * Created by PhpStorm.
 * User: Jelle
 * Date: 2-6-2016
 * Time: 12:54
 */

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class HomeController extends Controller
{
    /**
     * @Route("")
     */
    public function indexAction()
    {
        return $this->render('home/index.html.twig');
    }
}