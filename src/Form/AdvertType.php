<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class AdvertType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('title',     TextType::class)
        ->add('author',    TextType::class)
        ->add('content',   TextareaType::class)
        ->add('image',     ImageType::class)
        ->add('categories', EntityType::class, array(
            'class'        => 'App\Entity\Category',
            'choice_label' => 'name',
            'multiple'     => true,
            'expanded'     => true,
          ))
        ->add('save',      SubmitType::class);
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => 'App\Entity\Advert'
        ]);
    }
}