<?php

// src/Form/Type/ParticipantType.php
namespace App\Form\Type;

use App\Entity\Participant;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;

class ParticipantType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', TextType::class,array('label'=>"Nom",
            'attr' => [
        'class' => 'form-control input-inline',
],
    ));
        $builder->add('emailAddress', EmailType::class,array('label'=>"Email",
        'attr' => [
    'class' => 'form-control input-inline',
],
    ));
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Participant::class,
        ));
    }
}
