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
        dump($user);

        $repo = $this->getDoctrine()->getManager()->getRepository(Task::class);

        $query = $repo->findAll();
        dump($query);

        $tasks = $repo->findAll();

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
            'user' => $user,
            'tasks' => $tasks
        ]);
    }
}
