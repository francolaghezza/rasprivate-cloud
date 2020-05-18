<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/reset", name="reset")
     */
    public function sendEmail(Request $request,MailerInterface $mailer)
    {
        //
        $defaultData = array('message' => 'Escribe un mensaje aquí');
        $form = $this->createFormBuilder($defaultData)

            ->add('email', EmailType::class)
            ->add('Enviar', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $direccion_email = $form->get('email')->getData();

            if($direccion_email){
                $email = (new Email())
                    ->from('rasprivatecloud@gmail.com')
                    ->to($direccion_email)
                    //->cc('cc@example.com')
                    //->bcc('bcc@example.com')
                    //->replyTo('fabien@example.com')
                    //->priority(Email::PRIORITY_HIGH)
                    ->subject('Time for Symfony Mailer!')
                    ->text('Sending emails is fun again!')
                    ->html('<p>See Twig integration for better HTML integration!</p>');
                $mailer->send($email);
            }
        }
        return $this->render('reset_password/index.html.twig', [
            'formulario' => $form->createView()
        ]);





    }
}
