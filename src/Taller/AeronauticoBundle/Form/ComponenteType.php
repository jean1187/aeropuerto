<?php

namespace Taller\AeronauticoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ComponenteType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('descripcion')
            ->add('horastt')
            ->add('horastos')
            ->add('serial')
            ->add('ciclos')
            ->add('frecuenciaDate','date',array("widget"=>"single_text","format"=>"d-m-Y"))
            ->add('frecuenciaHours')
            ->add('aeronave', null, array('property' => 'siglasserial'))
            ->add('tipoComponente')
        ;
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Taller\AeronauticoBundle\Entity\Componente',
        );
    }
    
    public function getName()
    {
        return 'taller_aeronauticobundle_componentetype';
    }
}
