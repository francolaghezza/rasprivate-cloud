<?php

namespace App\Form;

use App\Entity\Archivos;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class ArchivosType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nombre',FileType::class,[
            'mapped' => false,
            'required' => true
            ])
            ->add('Subir',SubmitType::class,[
            'attr' => ['class' => 'btn-outline-light']
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Archivos::class,
        ]);
    }
}
