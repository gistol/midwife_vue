<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\EditAccountFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditAccountController extends Controller
{
    /**
     * @Route("/edit_account", name="edit_account")
     */
    public function index(Request $request)
    {
        $form = $this->createForm(EditAccountFormType::class);

        $id = $this->getUser()->getId();

        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(User::class);

        $usr = $repo->find($id);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ){
            $data = $form->getData();
            $email = $data['email'];
            $password = $data['password'];
            $cPassword = $data['confirmPassword'];

            if( $password == $cPassword ){
                $usr->setEmail($email);
                $entity->persist($usr);

                $entity->flush();

                $this->addFlash('success', 'Edited!');
                return $this->redirectToRoute('user_profile');
            } else {
                $this->addFlash('danger', 'Passwords do not Match.');
                return $this->redirectToRoute('edit_account');
            }


        }


        return $this->render('edit_account/index.html.twig', [
            'editAccountForm' => $form->createView()
        ]);
    }
}
