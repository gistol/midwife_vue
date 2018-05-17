<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegisterFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class RegisterController extends Controller
{
    /**
     * @Route("/register", name="register")
     * @param Request $request
     * @param UserPasswordEncoderInterface $encoder
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(RegisterFormType::class);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ){
            $registerFormData = $form->getData();

            $username = $registerFormData['username'];
            $email = $registerFormData['email'];
            $password = $registerFormData['password'];
            $cPassword = $registerFormData['confirmPassword'];
            $first_name = $registerFormData['firstName'];
            $last_name = $registerFormData['lastName'];


            $repository = $this->getDoctrine()->getRepository(User::class);

            $existing_username = $repository->findBy([
                "username" => $username
            ]);

            $existing_email = $repository->findBy([
                "email" => $email
            ]);

            if( !empty($existing_username) ){
                $this->addFlash('danger', 'User with that username exists. Pick another one.');
                return $this->redirectToRoute('register');
            }

            if( !empty($existing_email) ){
                $this->addFlash('danger', 'User with that email exists. Pick another one.');
                return $this->redirectToRoute('register');
            }

            if( $password == $cPassword ){

                $entityManager = $this->getDoctrine()->getManager();
                $user = new User();


                $user->setUsername($username);
                $user->setEmail($email);
                $user->setFirstName($first_name);
                $user->setLastName($last_name);

                $encoded = $encoder->encodePassword($user, $password);

                $user->setPassword($encoded);

                $entityManager->persist($user);

                $entityManager->flush();

                $this->addFlash('success', 'Successfully Registered!');

                return $this->redirectToRoute('login');
            } else {
                $this->addFlash('danger', 'Passwords are different. Need to be the same.');
            }


        }

        return $this->render('register/index.html.twig', [
            'registerForm' => $form->createView()
        ]);
    }
}
