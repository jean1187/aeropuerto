<?php
namespace Taller\AeronauticoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Taller\AeronauticoBundle\Resources\util\Util;

class LoadInicial extends AbstractFixture implements OrderedFixtureInterface
{

    protected $manager;
    protected $cantidad_componentes_a_insertar;

    public function load($manager)
    {
        $this->manager = $manager;
        $this->cantidad_componentes_a_insertar=30;
      
         //fuente :  http://www.fav-club.com/index.php?option=com_content&view=article&id=255:el-avion-m28-skytruck-en-el-ejercito-de-venezuela-&catid=25:fuerzas-aereas-y-sistemas-aeronauticos-&Itemid=24
          $tipo_aeronave_array=array("Aerostato"=>array("Globo aerostático","Dirigible"),
                                     "Aerodino->Aeronave-de-alas-fijas"=>array("Avión","Planeador","Ala delta","Parapente","Paramotor","Ultraligero","Cometa"),
                                     "Aerodino->Aeronave-de-alas-giratorias"=>array("Helicóptero","Autogiro","Convertiplano","Girodino","Combinado")
          );
          //fuente :  http://www.fortunecity.com/olympia/jordan/568/registro.html
          $aeronaves_array=array(
              1=>array(
                  "siglas"=>"EV9960",
                  "certificado"=>new \DateTime('2010-07-02'),
                  "serial"=>"AJE001-19",
                  "horastt"=>52,
                  "horametro"=>569225.25,
                  "ciclos"=>45,
                  "createAt"=>new \DateTime('2011-08-05')
              ),
              2=>array(
                  "siglas"=>"EV0069",
                  "certificado"=>new \DateTime('2009-06-28'),
                  "serial"=>"AJE002-08",
                  "horastt"=>"",
                  "horametro"=>632.25,
                  "ciclos"=>"",
                  "createAt"=>new \DateTime('2011-08-05')
              ),
              3=>array(
                  "siglas"=>"EV0064",
                  "certificado"=>new \DateTime('2008-01-09'),
                  "serial"=>"AJE002-03",
                  "horastt"=>78,
                  "horametro"=>855.25,
                  "ciclos"=>"",
                  "createAt"=>new \DateTime('2011-08-05')
              ),
              4=>array(
                  "siglas"=>"EV0066",
                  "certificado"=>new \DateTime('2000-12-15'),
                  "serial"=>"AJE002-05",
                  "horastt"=>56,
                  "horametro"=>255.32,
                  "ciclos"=>633,
                  "createAt"=>new \DateTime('2011-08-05')
              ),
              5=>array(
                  "siglas"=>"EV0068",
                  "certificado"=>new \DateTime('2002-09-25'),
                  "serial"=>"AJE002-07",
                  "horastt"=>36,
                  "horametro"=>652,
                  "ciclos"=>47,
                  "createAt"=>new \DateTime('2011-08-05')
              ),
              6=>array(
                  "siglas"=>"EV0062",
                  "certificado"=>new \DateTime('2000-04-30'),
                  "serial"=>"AJE002-01",
                  "horastt"=>345,
                  "horametro"=>"",
                  "ciclos"=>742,
                  "createAt"=>new \DateTime('2011-08-05')
              )
          );
          
         $empresa_array=array(
                            1=>array(
                                "nombre"=>"Línea Aeropostal Venezolana",
                                "direccion"=>"Av.  boyaca @38",
                                "rif"=>"j-2356963",
                                "tlf"=>"0416-7432523",
                                "email"=>"Aeropostal@email.ve",
                                "createAt"=>new \DateTime('2011-07-01')        
                            ),
                            2=>array(
                                "nombre"=>"Mene Grande Oíl Co",
                                "direccion"=>"Av.  Constitucion @38",
                                "rif"=>"j-28552",
                                "tlf"=>"0426-6335411",
                                "email"=>"Mene@email.ve",
                                "createAt"=>new \DateTime('2011-07-01')        
                            ),
                           3=>array(
                                "nombre"=>"Nicholás Ord Watson",
                                "direccion"=>"Av.  Bolivar @38",
                                "rif"=>"j-533664",
                                "tlf"=>"0414-584411",
                                "email"=>"nicholas@email.ve",
                                "createAt"=>new \DateTime('2011-07-01')        
                            )
             );

         $cat_status_array=array("usuario","Cliente");
         
         $status_array=array(
                        0=>array("Activo","Inactivo"),
                        1=>array("Moroso","Solvente")
                       );
         
         //fuente : http://html.rincondelvago.com/aviones_1.html
         //otra informacion de la cual no estoy seguro : http://es.wikipedia.org/wiki/Categor%C3%ADa:Componentes_de_aeronaves
         $cat_componentes=array("Fuselaje","Alas","Empenaje de cola","Tren de aterrizaje","Controles de vuelo","Mandos de vuelo","Instrumentos","Propulsión","Motores de pistón","Motores de reacción","Sin Categoria");
         
         //fuente : http://es.wikipedia.org/wiki/Motor_de_reacci%C3%B3n
         
         $tipo_componentes_array=array(
                                        "motores-de-reaccion"=>array("Motor de agua","Termorreactor","Turborreactor","Motor de detonación de pulso"),
                                        "tren-de-aterrizaje"=>array(4=>"Trenes fijos",5=>"Trenes retráctiles"),
                                        "sin-categoria"=>array(6=>"Flotador",7=>"Borde de ataque",8=>"Borde de salida",9=>"Superficie alar",10=>"Carlinga",11=>"Dispositivo de punta alar",12=>"Dispositivo hipersustentador",13=>"Cola (avión)")
         );
         
         $det_componentes=array(
                            //5 Descripciones
                            "descripcion"=>array("esta es la descripcion 1 que puedes llegar a ser un pelo larga","Este articulo tiene por mision agilizar le manejo en la aeronave","una descripcion puede llegar a ser muy larga todo depende del componente","Sin mas, este componente es fenomenal","Mas detalles de este producto en la pagina oficial","Keyla descripcion ...."),
                            //11 horastt
                            "horasTT"=>array(22.6,4823.6,8265.41,22214,null,863.45,111,522,742.244,96342.4,124.85),
                            //15 horasTOS
                            "horasTOS"=>array(14,32,952.4,856,76,54,62.1,563,444,866,36.2,701,3014,4422,null),
                            //13 ciclos
                            "ciclos"=>array(45,52,50,40,3120,5.01,961,null,02,523.120,855,96.5),
                            //6 frecuencia_date
                            "frecuencia_date"=>array(new \DateTime('2012-06-14'),new \DateTime('2007-02-06'),new \DateTime('1987-07-11'),new \DateTime('2010-03-13'),null,new \DateTime('2009-08-30')),
                            //8 frecuencia_hours
                            "frecuencia_hours"=>array(301,613.2,780,6149.38,94,6,3,4506)
         );
         //echo Util::slugify("Sin Categoria");
         
        // -- Cargar TipoAeronaves ----------------------------------------
        foreach ($tipo_aeronave_array as $tipos=>$datos)
        {
            foreach($datos as $key=>$nombres)
            {
                $tipo_aeronave=new \Taller\AeronauticoBundle\Entity\TipoAeronave();
                $tipo_aeronave->setNombre($nombres);
                $this->addReference("TA_".$tipos."_".$key, $tipo_aeronave);
                $manager->persist($tipo_aeronave);
            }
        }

        // -- Cargar CategoriaStatus ----------------------------------------
        foreach ($cat_status_array as $key=>$nombre)
        {
                $cat_status=new \Taller\AeronauticoBundle\Entity\CategoriaStatus();
                $cat_status->setNombre($nombre);                
                $this->addReference("cat_status".$key, $cat_status);                
                $manager->persist($cat_status);
        }
        
        // -- Cargar Status ----------------------------------------
 
        foreach ($status_array as $key=>$datos)
        {
            foreach ($datos as $clave=>$nombre)
            {
                $status=new \Taller\AeronauticoBundle\Entity\Status();
                $status->setNombre($nombre);
                $status->setCategoria($manager->merge($this->getReference("cat_status".$key)));
                $this->addReference("status".$clave.$key, $status);
                $manager->persist($status);
            }
        }

        // -- Cargar Empresas ----------------------------------------
 
        foreach ($empresa_array as $key=>$datos)
        {
            $empresa=new \Taller\AeronauticoBundle\Entity\Empresa;
            foreach ($datos as $campo=>$valor)
                $empresa->{'set'.ucfirst($campo)}($valor);
            $this->addReference("empresa".$key, $empresa);
            $manager->persist($empresa);
        }
        
        // -- Cargar Usuarios ----------------------------------------
        
        for($i=1;$i<=3;$i++)
        {
            $user=new \Taller\AeronauticoBundle\Entity\Usuario();
            $user->setUser("user"+$i);
            $user->setPassword("123");
            $user->setStatus($manager->merge($this->getReference("status00")));
            $this->addReference("user".$i, $user);
            $manager->persist($user);
        }
        
        // -- Cargar Clientes ----------------------------------------
        
      
        for($i=1;$i<=3;$i++)
        {
            $cliente=new \Taller\AeronauticoBundle\Entity\Cliente();
            $cliente->setEmpresa($manager->merge($this->getReference("empresa".$i)));
            $cliente->setStatus($manager->merge($this->getReference("status11")));
            $cliente->setUsuario($manager->merge($this->getReference("user".$i)));
            $this->addReference("cliente".$i, $cliente);
            $manager->persist($cliente);
        }http://es.wikipedia.org/wiki/Categor%C3%ADa:Componentes_de_aeronaves
               
        // -- Cargar Aeronaves ----------------------------------------
        
        foreach ($aeronaves_array as $key=>$datos)
        {
            $aeronave=new \Taller\AeronauticoBundle\Entity\Aeronave();
            foreach ($datos as $campo=>$valor)
                $aeronave->{'set'.ucfirst($campo)}($valor);

            $aeronave->setTipoAeronave($manager->merge($this->getReference($this->getReferenciaTipoAeronave())));
            $aeronave->setCliente($manager->merge($this->getReference("cliente".rand(1,3))));
            
            $this->addReference("aeronave".$key, $aeronave);
            
            $manager->persist($aeronave);
            
        }//fin for parent
            
        // -- Cargar CategoriaComponentes ----------------------------------------
        
        foreach ($cat_componentes as $key=>$valor)
        {
            $cat_componente=new \Taller\AeronauticoBundle\Entity\CategoriaComponente();
            $cat_componente->setNombre($valor);
            $this->addReference(Util::slugify($valor), $cat_componente);
            $manager->persist($cat_componente);
        }
    
        // -- Cargar TipoComponentes ----------------------------------------
        foreach ($tipo_componentes_array as $key_tipo=>$tipo)
        {
            foreach ($tipo as $key=>$dato)
            {
                $tipo_componente=new \Taller\AeronauticoBundle\Entity\TipoComponente();
                $tipo_componente->setNombre($dato);
                $tipo_componente->setIdParte(substr(Util::slugify($dato), 0, 4));
                $tipo_componente->setCategoriaComponente($this->getReference($key_tipo));
                $this->addReference("tipo_componente_".$key, $tipo_componente);
                $manager->persist($tipo_componente);
            }
        
        }
        //este flush lo hago para que me tome en cuenta los tipos de componentes ya que luego le hago una consulta y necesito que este en la bd
        $manager->flush();   
        
        // -- Cargar Componentes ----------------------------------------

        for($i=1;$i<=$this->cantidad_componentes_a_insertar;$i++)
        {
            $asistentes = array();
            
            $id_tipo_componente=rand(0,( (count($tipo_componentes_array["motores-de-reaccion"])-1) + (count($tipo_componentes_array["tren-de-aterrizaje"])-1) + (count($tipo_componentes_array["sin-categoria"])-1) ));
            
            $componente=new \Taller\AeronauticoBundle\Entity\Componente();
            $componente->setDescripcion($det_componentes["descripcion"][rand(0,count($det_componentes["descripcion"])-1)]);
            $componente->setHorastt($det_componentes["horasTT"][rand(0,count($det_componentes["horasTT"])-1)]);
            $componente->setHorastos($det_componentes["horasTOS"][rand(0,count($det_componentes["horasTOS"])-1)]);
            $componente->setCiclos($det_componentes["ciclos"][rand(0,count($det_componentes["ciclos"])-1)]);
            $componente->setFrecuenciaDate($det_componentes["frecuencia_date"][rand(0,count($det_componentes["frecuencia_date"])-1)]);
            $componente->setFrecuenciaHours($det_componentes["frecuencia_hours"][rand(0,count($det_componentes["frecuencia_hours"])-1)]);
            $componente->setAeronave($this->getReference("aeronave".rand(1,count($aeronaves_array))));
            $componente->setTipoComponente($this->getReference("tipo_componente_".$id_tipo_componente));
            
            $tipo_comp = $this->manager->getRepository('AeronauticoBundle:TipoComponente')->findOneById($id_tipo_componente+1);
            
            $componente->setSerial($tipo_comp->getIdParte());
            
            $this->addReference("componentes_".$i, $componente);
            
            $manager->persist($componente);
        }
        


        // -- Cargar Cambios ----------------------------------------
            $cambio1=new \Taller\AeronauticoBundle\Entity\Cambio();
            $cambio1->setMotivo("Se Realizo este cambio para un mejor desempeño de la aeronave");
            $cambio1->setCreateAt(new \DateTime('now'));
            $cambio1->setComponenteNuevo($this->getReference("componentes_4"));
            $cambio1->setComponenteRemovido($this->getReference("componentes_6"));
            $manager->persist($cambio1);

            $cambio2=new \Taller\AeronauticoBundle\Entity\Cambio();
            $cambio2->setMotivo("Reacomodando el tren de aterrizaje");
            $cambio2->setCreateAt(new \DateTime('now'));
            $cambio2->setComponenteNuevo($this->getReference("componentes_8"));
            $cambio2->setComponenteRemovido($this->getReference("componentes_4"));
            $manager->persist($cambio2);


            $cambio3=new \Taller\AeronauticoBundle\Entity\Cambio();
            $cambio3->setMotivo("mejoria de la cabina de vuelo");
            $cambio3->setCreateAt(new \DateTime('2012-12-01'));
            $cambio3->setComponenteNuevo($this->getReference("componentes_7"));
            $cambio3->setComponenteRemovido($this->getReference("componentes_11"));
            $manager->persist($cambio3);


    //finalmente se cargan los datos
            $manager->flush();
   }//fin load

    
    
    
    
     /**
     * Get ReferenciaTipoAeronave
     * @descripcion crear una referencia a una aeronave aleatoriamente
     * @return string 
     */
    
    public  function getReferenciaTipoAeronave(){
        switch(rand(1,3)){
            case 1: return "TA_Aerostato_".rand(0,1);
            case 2: return "TA_Aerodino->Aeronave-de-alas-fijas_".rand(0,6);
            case 3: return "TA_Aerodino->Aeronave-de-alas-giratorias_".rand(0,4);      
        }
    }
    
    
    public function getOrder()
    {
        return 1;
    }
    
}//fin class
