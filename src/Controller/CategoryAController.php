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


        $form = $this->createForm(CategoryFormType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $entityManager = $this->getDoctrine()->getManager();
            $categorya = new CategoryA();

            if ($data->getField1() === "Yes") {
                $categorya->setField1(true);
            } else {
                $categorya->setField1(false);
            }
            if ($data->getField2() === "Yes") {
                $categorya->setField2(true);
            } else {
                $categorya->setField2(false);
            }
            if ($data->getField3() === "Yes") {
                $categorya->setField3(true);
            } else {
                $categorya->setField3(false);
            }
            if ($data->getField4() === "Yes") {
                $categorya->setField4(true);
            } else {
                $categorya->setField4(false);
            }
            if ($data->getField5() === "Yes") {
                $categorya->setField5(true);
            } else {
                $categorya->setField5(false);
            }
            if ($data->getField6() === "Yes") {
                $categorya->setField6(true);
            } else {
                $categorya->setField6(false);
            }
            if ($data->getField7() === "Yes") {
                $categorya->setField7(true);
            } else {
                $categorya->setField7(false);
            }
            if ($data->getField8() === "Yes") {
                $categorya->setField8(true);
            } else {
                $categorya->setField8(false);
            }
            if ($data->getField9() === "Yes") {
                $categorya->setField9(true);
            } else {
                $categorya->setField9(false);
            }
            if ($data->getField10() === "Yes") {
                $categorya->setField10(true);
            } else {
                $categorya->setField10(false);
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

            return $this->redirectToRoute('login');


        }

        return $this->render('category/category.html.twig', [
            'categoryForm' => $form->createView()
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