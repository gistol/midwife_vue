<?php

namespace App\Controller;

use App\Entity\CategoryA;
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

        $field1 = $this->countProgressSemester2Field1();
        $field2 = $this->countProgressSemester2Field2();
        $field3 = $this->countProgressSemester2Field3();
        $field4 = $this->countProgressSemester2Field4();
        $field5 = $this->countProgressSemester2Field5();
        $field6 = $this->countProgressSemester2Field6();
        $field7 = $this->countProgressSemester2Field7();
        $field8 = $this->countProgressSemester2Field8();
        $field9 = $this->countProgressSemester2Field9();
        $field10 = $this->countProgressSemester2Field10();

        $field1s4 = $this->countProgressSemester4Field1();
        $field2s4 = $this->countProgressSemester4Field2();
        $field3s4 = $this->countProgressSemester4Field3();
        $field4s4 = $this->countProgressSemester4Field4();
        $field5s4 = $this->countProgressSemester4Field5();
        $field6s4 = $this->countProgressSemester4Field6();
        $field7s4 = $this->countProgressSemester4Field7();
        $field8s4 = $this->countProgressSemester4Field8();
        $field9s4 = $this->countProgressSemester4Field9();
        $field10s4 = $this->countProgressSemester4Field10();

        $field1s6 = $this->countProgressSemester6Field1();
        $field2s6 = $this->countProgressSemester6Field2();
        $field3s6 = $this->countProgressSemester6Field3();
        $field4s6 = $this->countProgressSemester6Field4();
        $field5s6 = $this->countProgressSemester6Field5();
        $field6s6 = $this->countProgressSemester6Field6();
        $field7s6 = $this->countProgressSemester6Field7();
        $field8s6 = $this->countProgressSemester6Field8();
        $field9s6 = $this->countProgressSemester6Field9();
        $field10s6 = $this->countProgressSemester6Field10();

        $field1Gen = $this->countProgressField1General();
        $field2Gen = $this->countProgressField2General();
        $field3Gen = $this->countProgressField3General();
        $field4Gen = $this->countProgressField4General();
        $field5Gen = $this->countProgressField5General();
        $field6Gen = $this->countProgressField6General();
        $field7Gen = $this->countProgressField7General();
        $field8Gen = $this->countProgressField8General();
        $field9Gen = $this->countProgressField9General();
        $field10Gen = $this->countProgressField10General();

        return $this->render('progress/index.html.twig', [
            'user' => $user,
            'field1' => $field1,
            'field2' => $field2,
            'field3' => $field3,
            'field4' => $field4,
            'field5' => $field5,
            'field6' => $field6,
            'field7' => $field7,
            'field8' => $field8,
            'field9' => $field9,
            'field10' => $field10,
            'field1s4' => $field1s4,
            'field2s4' => $field2s4,
            'field3s4' => $field3s4,
            'field4s4' => $field4s4,
            'field5s4' => $field5s4,
            'field6s4' => $field6s4,
            'field7s4' => $field7s4,
            'field8s4' => $field8s4,
            'field9s4' => $field9s4,
            'field10s4' => $field10s4,
            'field1s6' => $field1s6,
            'field2s6' => $field2s6,
            'field3s6' => $field3s6,
            'field4s6' => $field4s6,
            'field5s6' => $field5s6,
            'field6s6' => $field6s6,
            'field7s6' => $field7s6,
            'field8s6' => $field8s6,
            'field9s6' => $field9s6,
            'field10s6' => $field10s6,
            'field1gen' => $field1Gen,
            'field2gen' => $field2Gen,
            'field3gen' => $field3Gen,
            'field4gen' => $field4Gen,
            'field5gen' => $field5Gen,
            'field6gen' => $field6Gen,
            'field7gen' => $field7Gen,
            'field8gen' => $field8Gen,
            'field9gen' => $field9Gen,
            'field10gen' => $field10Gen,
        ]);
    }

    public function countProgressSemester2Field1(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field1 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field2(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field2 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field3(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field3 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field4(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field4 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field5(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field5 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field6(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field6 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field7(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field7 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field8(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field8 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field9(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field9 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester2Field10(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 2,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field10 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field1(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field1 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field2(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field2 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field3(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field3 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field4(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field4 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field5(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field5 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field6(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field6 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field7(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field7 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field8(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field8 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field9(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field9 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester4Field10(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 4,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field10 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field1(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field1 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field2(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field2 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field3(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field3 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field4(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field4 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field5(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field5 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field6(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field6 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field7()
    {
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach ($datas as $data) {
            if ($data->field7 == true) {
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field8(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field8 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field9(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field9 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressSemester6Field10(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'semester' => 6,
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field10 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField1General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field1 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField2General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field2 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField3General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field3 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField4General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field4 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField5General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field5 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField6General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field6 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField7General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field7 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField8General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field8 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField9General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field9 == true ){
                $num++;
            }
        }
        return $num;
    }

    public function countProgressField10General(){
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(CategoryA::class);
        $datas = $repo->findBy([
            'user_id' => $this->getUser()->getId()
        ]);

        $num = 0;

        foreach($datas as $data){
            if( $data->field10 == true ){
                $num++;
            }
        }
        return $num;
    }
}
