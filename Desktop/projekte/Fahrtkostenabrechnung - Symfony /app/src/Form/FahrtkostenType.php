<?php

namespace App\Form;

use App\Entity\Fahrtkosten;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class FahrtkostenType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('vorname')
            ->add('Nachname')
            ->add('Abteilung')
            ->add('Datum_Reise', DateType::class , array(
                'years' => range(date(date('Y')), date('Y') - 3),
                'format' => 'dd-MMMM-yyyy',
            ))
            ->add('Reisestart')
            ->add('Reiseziel')
            ->add('Kilometer')
            ->add('Ausbezahlt')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Fahrtkosten::class,
        ]);
    }
}
