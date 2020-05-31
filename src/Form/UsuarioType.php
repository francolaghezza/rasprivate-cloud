<?php

namespace App\Form;

use App\Entity\Usuarios;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsuarioType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class)
            ->add('usuario',TextType::class,[
                'attr' => ['pattern' => '.{5,}']
            ])
            ->add('password',PasswordType::class,[
                'attr' => ['pattern' => '.{8,}', 'placeholder' => 'Mínimo 8 caracteres'],
                'required' => true
            ])
            ->add('password_verify',PasswordType::class,[
                'attr' => ['pattern' => '.{8,}', 'placeholder' => 'Repita la contraseña'],
                'mapped' => false,
                'required' => true
            ])
            ->add('Registrar',SubmitType::class,[
                'attr' => ['class' => 'btn-dark'],
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Usuarios::class,
        ]);
    }
}
