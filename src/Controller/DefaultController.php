<?php

namespace App\Controller;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="default")
     */
    public function index()
    {
        $user = $this->getUser();

        $repo = $this->getDoctrine()->getManager()->getRepository(Task::class);

        $data = $repo->find(1);

        dump($data);

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'user' => $user,
            'data' => $data
        ]);
    }
}
