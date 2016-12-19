<?php

namespace SoftUniBlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {     $builder
            ->add('content', TextType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class' => 'SoftUniBlogBundle\Entity\Comment'));
    }

    public function getName()
    {
        return 'soft_uni_blog_bundle_comment_type';
    }
}
