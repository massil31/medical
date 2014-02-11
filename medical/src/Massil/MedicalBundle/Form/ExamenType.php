<?php

namespace Massil\MedicalBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ExamenType extends AbstractType
{
	private $bilanGeneralparams;
	public function __construct($bilanGeneralParams)
	{
		$this->bilanGeneralparams=$bilanGeneralParams;
	}
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('bilanGeneralActive','hidden',array('data'=>'false'))
            ->add('bilangeneral',new BilanGeneralType($this->bilanGeneralparams))
        ;
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Massil\MedicalBundle\Entity\Examen'
        ));
    }

    public function getName()
    {
        return 'massil_medicalbundle_examentype';
    }
}
