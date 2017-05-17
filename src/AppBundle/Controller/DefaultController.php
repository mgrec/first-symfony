<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\VarDumper\VarDumper;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AppBundle:Default:index.html.twig');
    }

    public function usersAction()
    {
        return $this->render('AppBundle:Default:users.html.twig');
    }

    public function userSingleAction(Request $request)
    {
        // get param: id user
        $request->get('id');
        
        // render view
        return $this->render('AppBundle:Default:user-single.html.twig');
    }

    public function userDelete(Request $request)
    {
        // get param: id user
        $request->get('id');

        // render view
        return $this->render('AppBundle:Default:users.html.twig');
    }

    public function userCreate(Request $request)
    {
        
        // render view
        return $this->render('AppBundle:Default:user-single.html.twig');
    }

}
