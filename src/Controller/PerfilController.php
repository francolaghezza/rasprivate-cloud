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
    public function buscarEmail(Request $request){
        if ($request->isXmlHttpRequest()){
            $email = $request->request->get('email');
            $buscar = $this->getDoctrine()
                ->getRepository(Usuarios::class)
                ->email($email);
            if (!$buscar){
                return new JsonResponse(['email'=> $email]);
            }
            else{
                return new JsonResponse(['email'=> 0]);
            }
        }
        else{
            throw new \Exception("No puedes cambiar tu email");
        }
    }

    /**
     * @Route("/c_email", options={"expose"=true}, name="c_email")
     */
    public function cambiarEmail(Request $request){
        $email = $request->request->get('email');
        $em = $this->getDoctrine()->getManager();
        $usuario = $this->getUser();
        $usuario->setEmail($email);
        $em->flush();
        return new JsonResponse(['email'=> $email]);
    }
}
