<?php

namespace App\Controller;

use App\Entity\Usuarios;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset", name="reset")
     */
    public function sendEmail(Request $request,MailerInterface $mailer)
    {

        $defaultData = array('message' => 'Recupera tu contraseña');
        $form = $this->createFormBuilder($defaultData)

            ->add('email', EmailType::class)
            ->add('Enviar', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $direccion_email = $form->get('email')->getData();

            if($direccion_email){

                $comprueba_email = $this->getDoctrine()
                    ->getRepository(Usuarios::class)
                    ->email($direccion_email);

                if($comprueba_email){

                    $usuario = $this->getDoctrine()
                        ->getRepository(Usuarios::class)
                        ->obtenUsuario($direccion_email);
                    $nombre_usuario = $usuario[0]["usuario"];

                   $email = (new TemplatedEmail())
                    ->from('rasprivatecloud@gmail.com')
                    ->to(new Address($direccion_email))
                    ->subject('Tu nueva contraseña')
                    ->htmlTemplate('email/email.html.twig')
                    ->context([
                        'usuario' => $nombre_usuario,
                    ]);
                   $mailer->send($email);
                   $this->addFlash(
                        'enviado',
                        'Se ha enviado un email a esta dirección'
                   );
                   return $this->redirectToRoute('reset');
                }
                //El email no está registrado en la base de datos
                else{
                    $this->addFlash(
                        'no_enviado',
                        'Por favor, introduzca una dirección válida'
                    );
                    return $this->redirectToRoute('reset');
                }
            }
        }
        return $this->render('reset_password/index.html.twig', [
            'formulario' => $form->createView()
        ]);

    }
}
