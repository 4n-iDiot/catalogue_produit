<?php

namespace App\Form;

use App\Entity\Produit;
use App\Entity\Marque;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;

class SearchProductType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => false,
                'label' => 'Nom ou référence produit : ',
            ])
            ->add('marque', EntityType::class, [
                'required' => false,
                'class' => Marque::class,
                'choice_label' => 'nom',
                'label' => 'Marque : ',
                'placeholder' => "Choisissez une marque",
            ])
            ->add('prix', MoneyType::class, [
                'required' => false,
                'label' => 'Prix : ',
            ])
            /*
            ->add('date_mise_en_vente', DateType::class, [
                'required' => false,
                'label' => 'Date de mise en vente : ',
            ])
            */
            ->add('filtrer', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
