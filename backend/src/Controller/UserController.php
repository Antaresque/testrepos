<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse; 
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller 
{
    /**
     * @Route("/api/user/inserttest")
     */
    public function inserttest(){
        $entityManager = $this->getDoctrine()->getManager();

        $user = new User("test", "test2", "test@test.com");
        $entityManager->persist($user);
        $entityManager->flush();

        return new Response("DODANO NOWEGO CIECIA O ID: ".$user->getID());
    }

    /**
     * @Route("/api/user/select")
     */
    public function select(){
        $repository = $this->getDoctrine()->getRepository(User::class);

        $users = $repository->findAll();

        return new JsonResponse($users);
    }
}