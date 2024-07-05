<?php

namespace App\Form;

use App\Entity\FormEvent;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class FormEventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('LastName', TextType::class, [
                'attr' => ['placeholder' => 'Enter your lastname']
            ])
            ->add('FirstName', TextType::class, [
                'attr' => ['placeholder' => 'Enter your firsname']
            ])
            ->add('mail', EmailType::class, [
                'attr' => ['placeholder' => 'Enter your email address']
            ])
            ->add('SerialNumber', TextType::class, [
                'attr' => ['placeholder' => 'Enter the serial number of your shoes']
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => FormEvent::class,
        ]);
    }
}
