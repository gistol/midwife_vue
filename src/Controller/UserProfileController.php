<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserProfileController extends Controller
{
    /**
     * @Route("/user", name="user_profile")
     */
    public function index()
    {
        $user = $this->getUser();

        if( empty($user) ){
            return $this->redirectToRoute('login');
        }

        return $this->render('user_profile/index.html.twig', [
            'user' => $user
        ]);
    }
}
