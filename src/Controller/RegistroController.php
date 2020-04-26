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
				$em->persist($usuario);
				$em->flush();
				$this->addFlash('exito','Usuario registrado correctamente');
				return $this->redirectToRoute('registro');
		}
        return $this->render('registro/index.html.twig', [
            'formulario' => $form->createView()
        ]);
    }
}
