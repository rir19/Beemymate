<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class ContactFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('nom', TextType::class, [
                'required' => true,
                'label' => "Ton nom",
                'constraints' => [
                    new NotBlank([
                      'message' => 'Renseigne ton nom'
                    ]),
                  ]])
            ->add('prenom', TextType::class, [
                'required' => true,
                'label' => "Ton prénom",
                'constraints' => [
                    new NotBlank([
                      'message' => 'Renseigne ton prénom'
                    ]),
                  ]])

            ->add('email', EmailType::class, [
                'required' => true,
                'label' => "Ton adresse e-mail",
                'constraints' => [
                    new NotBlank([
                      'message' => 'Renseigne ton e-mail'
                    ]),
                  ]])
            ->add('objet')

            ->add('message', TextareaType::class, [
                'required' => true,
                'label' => "Écris nous ton message",
                'constraints' => [
                    new NotBlank([
                      'message' => 'Renseigne ton message'
                    ]),
                  ]])
            
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
