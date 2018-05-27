<?php


namespace App\Controller;

use App\Entity\CategoryA;
use App\Form\CategoryFormType;
use App\Form\TestFormType;
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

        // Creating first form for Category A
        $form = $this->createForm(CategoryFormType::class);
        $form->handleRequest($request);

        // Creating second form for Test Form
        // The same way you create forms for other cateogires
        // They just have to have DIFFERENT variable names !!!

        // You do not have to worry about submitting chosen form
        // While putting forms in the view, each of them has its own submit button which will make job for you
        // you just have to check which is submitted by chosing right variable name as it is below
        $form2 = $this->createForm(TestFormType::class);
        $form2->handleRequest($request);

        // submitting Test form
        if( $form2->isSubmitted() && $form2->isValid() ){
            $data2 = $form2->getData();
            dump($data2);
        }

        // Submitting Form for Category A
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $data->setUserId($this->getUser()->getId());

            $entityManager = $this->getDoctrine()->getManager();
//            $categorya = new CategoryA();

//            if( $data->getSemester() == 2){
//                $categorya->setSemester(2);
//            } elseif( $data->getSemester() == 4){
//                $categorya->setSemester(4);
//            } else {
//                $categorya->setSemester(6);
//            }
//
//            $date = $data->getDate();
//            $categorya->setDate($date);
//
//            if ($data->getField1() == true) {
//                $categorya->setField1(1);
//            } else {
//                $categorya->setField1(0);
//            }
//
//            if ($data->getField2() === true) {
//                $categorya->setField2(1);
//            } else {
//                $categorya->setField2(0);
//            }
//
//            if ($data->getField3() === true) {
//                $categorya->setField3(1);
//            } else {
//                $categorya->setField3(0);
//            }
//
//            if ($data->getField4() === true) {
//                $categorya->setField4(1);
//            } else {
//                $categorya->setField4(0);
//            }
//
//            if ($data->getField5() === true) {
//                $categorya->setField5(1);
//            } else {
//                $categorya->setField5(0);
//            }
//
//            if ($data->getField6() === true) {
//                $categorya->setField6(1);
//            } else {
//                $categorya->setField6(0);
//            }
//
//            if ($data->getField7() === true) {
//                $categorya->setField7(1);
//            } else {
//                $categorya->setField7(0);
//            }
//
//            if ($data->getField8() === true) {
//                $categorya->setField8(1);
//            } else {
//                $categorya->setField8(0);
//            }
//
//            if ($data->getField9() === true) {
//                $categorya->setField9(1);
//            } else {
//                $categorya->setField9(0);
//            }
//
//            if ($data->getField10() === true) {
//                $categorya->setField10(1);
//            } else {
//                $categorya->setField10(0);
//            }

            dump($data);

            // No idea why data is returning Category Object, that is even funny
            // will get into this one when i have more time
            // right now it works fine so let's leave it as it is
            // for other forms that you are about to make - i am not sure how it will work
            // you have to make dump($data) and see in profiler if you have array or object
            // if object - use this as instance, if array - you have to make that huge list which is right above
            // but the difference is you can use if( $data['field1'] == false ) {} instead of $data->getField1() !!!
            $entityManager->persist($data);
            $entityManager->flush();

            $this->addFlash('success', 'Successfully Registered!');

            return $this->redirectToRoute('form_category');

        }

        return $this->render('category/category.html.twig', [
            'categoryForm' => $form->createView(),
            'user' => $user,
            'testForm' => $form2->createView()
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