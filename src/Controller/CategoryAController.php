<?php


namespace App\Controller;

use App\Entity\CategoryA;
use App\Form\CategoryFormType;
use Symfony\Bundle\FrameworkBundle\Tests\Fixtures\Validation\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CategoryAController extends Controller
{
    /**
     * @Route("/category", name="form_category")
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function category(Request $request)
    {

        $user = $this->getUser();

        $form = $this->createForm(CategoryFormType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $categorya = new CategoryA();

            dump($data);


            if ($data->getField1() == true) {
                $categorya->setField1(1);
            } else {
                $categorya->setField1(0);
            }
            if ($data->getField2() === true) {
                $categorya->setField2(1);
            } else {
                $categorya->setField2(0);
            }
            if ($data->getField3() === true) {
                $categorya->setField3(1);
            } else {
                $categorya->setField3(0);
            }
            if ($data->getField4() === true) {
                $categorya->setField4(1);
            } else {
                $categorya->setField4(0);
            }
            if ($data->getField5() === true) {
                $categorya->setField5(1);
            } else {
                $categorya->setField5(0);
            }
            if ($data->getField6() === true) {
                $categorya->setField6(1);
            } else {
                $categorya->setField6(0);
            }
            if ($data->getField7() === true) {
                $categorya->setField7(1);
            } else {
                $categorya->setField7(0);
            }
            if ($data->getField8() === true) {
                $categorya->setField8(1);
            } else {
                $categorya->setField8(0);
            }
            if ($data->getField9() === true) {
                $categorya->setField9(1);
            } else {
                $categorya->setField9(0);
            }
            if ($data->getField10() === true) {
                $categorya->setField10(1);
            } else {
                $categorya->setField10(0);
            }


//        if ($form->isSubmitted() && $form->isValid()) {

//            $registerFormData = $form->getData();

//            $field1 = $registerFormData('');
//            $field2 = $registerFormData('');
//            $field3 = $registerFormData('');
//            $field4 = $registerFormData('');
//            $field5 = $registerFormData('');
//            $field6 = $registerFormData('');
//            $field7 = $registerFormData('');
//            $field8 = $registerFormData('');
//            $field9 = $registerFormData('');
//            $field10 = $registerFormData('');


            $entityManager->persist($categorya);
            $entityManager->flush();

            $this->addFlash('success', 'Successfully Registered!');

            return $this->redirectToRoute('form_category');

        }

        return $this->render('category/category.html.twig', [
            'categoryForm' => $form->createView(),
            'user' => $user
        ]);
    }

    public function check_progress(Request $request, $id)
    {

        $repo = $this->getDoctrine()->getManager()->getRepository(CategoryA::class);
        $categorya = $repo->findAll();

        return $this->render("task/task_all.html.twig", [
//            'user' => $user,
            'category' => $categorya
        ]);
    }
}