<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ProgressController extends Controller
{
    /**
     * @Route("/progress", name="progress")
     */
    public function index()
    {
        $user = $this->getUser();
        if( !$user ){
            return $this->redirectToRoute('login');
        }

        return $this->render('progress/index.html.twig', [
            'user' => $user
        ]);
    }
}
