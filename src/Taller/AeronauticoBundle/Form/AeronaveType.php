<?php
namespace Taller\AeronauticoBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class AeronaveType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        
        $builder->add('tipoAeronave', 'entity', array(
                        'class'         => 'Taller\\AeronauticoBundle\\Entity\\TipoAeronave',
                        'query_builder' => function ($repositorio) {
                            return $repositorio->createQueryBuilder('ta')->orderBy('ta.nombre', 'ASC');
                        },"label"=>"Tipo")
                    );
        $builder->add('siglas');
        $builder->add('serial');
        $builder->add('certificado','date',array("widget"=>"single_text","format"=>"d-m-Y"));
        $builder->add('horastt');
        $builder->add('horametro');
        $builder->add('ciclos');
        $builder->add('cliente', 'entity', array(
            'class'         => 'Taller\\AeronauticoBundle\\Entity\\Cliente',
            
        ));
        /*$builder->add('idioma', 'choice', array(
            'choices' => array('es' => 'Español', 'en' => 'Inglés')
        ));
        $builder->add('ponente', 'entity', array(
            'class'         => 'Desymfony\\DesymfonyBundle\\Entity\\Ponente',
            'query_builder' => function ($repositorio) {
                return $repositorio->createQueryBuilder('p')->orderBy('p.nombre', 'ASC');
            },
        ));*/
    }

    public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'Taller\AeronauticoBundle\Entity\Aeronave',
        );
    }
    
    public function getName()
    {
        return 'Aeronave';
    }
}
