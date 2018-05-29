<?php

namespace App\Controller;

use App\Entity\Task;
use App\Form\CreateTaskFormType;
use App\Form\EditTaskFormType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TaskController extends Controller
{

    private function compareDates($start, $end){
        if( $start > $end ){
            return false;
        } else {
            return true;
        }
    }

    private function setNewTask(array $formData){
        $task = new Task();
        $task->setEnd($formData['end']);
        $task->setStart($formData['start']);
        $task->setDescription($formData['description']);
        $task->setTitle($formData['title']);

        return $task;
    }

    /**
     * @Route("/tasks", name="tasks")
     */
    public function index(Request $request)
    {
        // User
        $user = $this->getUser();

        if( !$user ) {
            return $this->redirectToRoute('login');
        }

        // Repository and Tasks
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(Task::class);

        if( !$repo ){
            throw $this->createNotFoundException(
                'Not found searched repository: Task'
            );
        }
        $tasks = $repo->findAll();

        // Create Task Form
        $form = $this->createForm(CreateTaskFormType::class);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ){
            $formData = $form->getData();

            // if start date is after task's end - it does not happen - warning
            if( !$this->compareDates($formData['start'], $formData['end']) ){
                $this->addFlash('danger', 'Come on! End date can not be before the task starts, dude.');
                return $this->redirectToRoute('tasks');
            }

            $task = $this->setNewTask($formData);

            $entity->persist($task);
            $entity->flush();
            $this->addFlash('success', 'Task: ' . $formData['title'] . ' is created!');

            return $this->redirectToRoute('tasks');
        }

        return $this->render('task/index.html.twig', [
            'controller_name' => 'DefaultController',
            'user' => $user,
            'tasks' => $tasks,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/task_edit/{id}", name="task_edit")
     */
    public function edit_task(Request $request, $id){

        // user
        $user = $this->getUser();
        if( !$user ) {
            return $this->redirectToRoute('login');
        }

        // repo and task
        $entity = $this->getDoctrine()->getManager();
        $repo = $entity->getRepository(Task::class);
        $task = $repo->find($id);

        if( !$task ){
            throw $this->createNotFoundException(
                'No task found for id: ' . $id
            );
        }

        $form = $this->createForm(EditTaskFormType::class, $task);

        $form->handleRequest($request);

        if( $form->isSubmitted() && $form->isValid() ){
            $formData = $form->getData();

            // if start date is after task's end - it does not happen - warning
            if( !$this->compareDates($formData['start'], $formData['end']) ){
                $this->addFlash('danger', 'Come on! End date can not be before the task starts, dude.');
                return $this->redirectToRoute('task_edit');
            }

            $task->setTitle($formData->title);
            $task->setDescription($formData->description);
            $task->setStart($formData->start);
            $task->setEnd($formData->end);

            $entity->flush();
            $this->addFlash('success', 'Your task is updated!');
            return $this->redirectToRoute('tasks');
        }

        return $this->render('/task/edit_task.html.twig', [
            'user' => $user,
            'task' => $task,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/task_all", name="task_all", name="task_all")
     */
    public function task_all(){
        $user = $this->getUser();

        if( !$user ){
            $this->redirectToRoute('login');
        }

        $repo = $this->getDoctrine()->getManager()->getRepository(Task::class);
        $tasks = $repo->findAll();

        return $this->render("task/task_all.html.twig", [
            'user' => $user,
            'tasks' => $tasks
        ]);
    }

    /**
     * @Route("/remove_task/{id}", name="remove_task")
     */
    public function remove_task(Task $task){

        if( !$task ){
            throw $this->createNotFoundException('No Task found ');
        }

        $em = $this->getDoctrine()->getManager();
        $em->remove($task);
        $em->flush();
        $this->addFlash('danger', 'Your task has been removed.');

        return $this->redirectToRoute('tasks');
    }

}
