<?php

namespace Nano\FifaBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TournoisType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('designation')->add('nbrEquipe')->add('coordonnees')->add('dateDebut')->add('dateFin')->add('etat')->add('type')->add('type_tournois')->add('type_ligue')->add('niveau1')->add('niveau2')->add('niveau3')->add('niveau4')->add('niveau5')->add('etat_ligue')->add('regions')->add('charge')->add('point');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Nano\FifaBundle\Entity\Tournois',
            'csrf_protection' => false,
            'allow_extra_fields' => true
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'nano_fifabundle_tournois';
    }


}
