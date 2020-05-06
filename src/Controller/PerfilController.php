<?php

namespace App\Controller;

use App\Entity\Archivos;
use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PerfilController extends AbstractController
{
    /**
     * @Route("/perfil", name="perfil")
     */
    public function index()
    {
        return $this->render('perfil/index.html.twig', [
            'controller_name' => 'PerfilController',
        ]);
    }

    /**
     * @Route("/email", options={"expose"=true}, name="email")
     */
    public function email(Request $request){
        if ($request->isXmlHttpRequest()){
            $em = $this->getDoctrine()->getManager();
            $usuario = $this->getUser();
            $email = $request->request->get('email');
            $em->getRepository(Usuarios::class)->find($email);
            $usuario->setEmail($email);
            $em->flush();
            return new JsonResponse(['email'=> $email]);
        }
        else{
            throw new \Exception("No puedes cambiar tu email");
        }
    }
}
