<?php

namespace AppBundle\Controller;

use AppBundle\AppBundle;
use AppBundle\Entity\User;
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
        // execute request
        $userRepo = $this->get('doctrine')->getManager()->getRepository('AppBundle:User');
        $users = $userRepo->findAll();
        
        return $this->render('AppBundle:Default:users.html.twig', compact('users'));
    }

    public function userSingleAction(Request $request)
    {
        // get param: id user
        $id = $request->get('id');

        // execute request
        $userRepo = $this->get('doctrine')->getManager()->getRepository('AppBundle:User');
        $user = $userRepo->findOneById($id);
        
       
        
        // render view
        return $this->render('AppBundle:Default:user-single.html.twig', compact('user'));
    }

    public function userDeleteAction(Request $request)
    {
        // get param: id user
        $request->get('id');

        // render view
        return $this->render('AppBundle:Default:users.html.twig');
    }

    public function userCreateAction(Request $request)
    {
        // render view
        return $this->render('AppBundle:Default:user-create.html.twig');
    }

}
