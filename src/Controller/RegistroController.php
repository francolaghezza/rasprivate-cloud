<?php

namespace App\Controller;
use App\Entity\Usuarios;
use App\Form\UsuarioType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class RegistroController extends AbstractController
{
    /**
     * @Route("/registro", name="registro")
     */
    public function index(Request $request,UserPasswordEncoderInterface $passwordEncoder)
    {
    	$usuario = new Usuarios();
    	$form = $this->createForm(UsuarioType::class,$usuario);
    	$form->handleRequest($request);

    	if($form->isSubmitted() && $form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$usuario->SetRoles(['ROLE_USER']);
				$usuario->setPassword($passwordEncoder->encodePassword(
					$usuario,
					$form['password']->getData()
				));
				$usuario->setAlmacenamiento(0);
				$nombre = $usuario->getUsername();
				$nombre_usuario = strip_tags($nombre);
				$usuario->setUsuario($nombre_usuario);
                mkdir('uploads/archivos/'.$nombre_usuario);
                $em->persist($usuario);
                $em->flush();
                return $this->redirectToRoute('app_login');
		}
        return $this->render('registro/index.html.twig', [
            'formulario' => $form->createView()
        ]);
    }
}