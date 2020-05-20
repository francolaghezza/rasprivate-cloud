<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class NuevaPassController extends AbstractController
{
    /**
     * @Route("/nuevapass", name="nueva_pass")
     */
    public function index(Request $request)
    {
        $token = $request->query->get("token");

        $usuario = $this->getDoctrine()
            ->getRepository(Usuarios::class)
            ->getToken($token);

        if(!$usuario){
            return $this->redirectToRoute('index');
        }
        else{


            return $this->render('nueva_pass/index.html.twig', [
                'controller_name' => 'NuevaPassController',
                'token' => $token
            ]);
        }

    }

    /**
     * @Route("/newpass", options={"expose"=true}, name="newpass")
     */
    public function newPass(Request $request){
        if ($request->isXmlHttpRequest()){

            $pass1 = $request->request->get('pass1');
            $pass2 = $request->request->get('pass2');
            $token = $request->request->get('token');

            if($pass1 === $pass2 && $token){
                $usuario = $this->getDoctrine()
                    ->getRepository(Usuarios::class)
                    ->getToken($token);
                $nombre_usuario = $usuario[0]["usuario"];
                $coste = [
                    'cost' => 12,
                ];
                $hash = password_hash($pass1, PASSWORD_BCRYPT, $coste);
                $this->getDoctrine()
                    ->getRepository(Usuarios::class)
                    ->setPass($nombre_usuario,$hash);
                return new JsonResponse(['pass'=> 'ok']);
            }
            else{
                return new JsonResponse(['pass'=> 0]);
            }
        }
        else{
            return new JsonResponse(['pass'=> 0]);
        }
    }
}