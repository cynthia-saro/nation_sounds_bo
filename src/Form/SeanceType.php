<?php

namespace App\Form;

use App\Entity\Seance;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class SeanceType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('artist',ChoiceType::class,array(
                'label'=>'Artiste',
                'choices'=>$options['nameArtist'],
                'choice_label' => 'name'
            ))
            ->add('beginning')
            ->add('ending')
            ->add('date')
            
            ->add('idScene',ChoiceType::class,array(
                'label'=>'Scene',
                'choices'=>$options['nameScene'],
                'choice_label'=>'name'
            ))
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Seance::class,
            'nameArtist' => null,
            'nameScene' => null
        ]);
    }
}
