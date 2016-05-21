<?php

namespace PC\FundationBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\FormError;

use PC\FundationBundle\Entity\Event;
use PC\FundationBundle\Entity\Appuser;
use PC\FundationBundle\Entity\Apppet;
use PC\FundationBundle\Form\EventType;



class ServiceController extends Controller
{
    
    /**
     * servicio web que devuelve el listado actual de eventos a realizarse.
     */
    
    public function serviceAction($data)
    {
        $events = $this->getDoctrine()->getRepository('PCFundationBundle:Event')->findAll();
        
        $arreglo[] = array();
        
        $i = 0;
        foreach ($events as $event) 
        {
            $arreglo[$i]['name'] = $event->getName();
            $arreglo[$i]['address'] = $event->getAddress();
            $arreglo[$i]['dateAt'] = $event->getDateAt();
            $arreglo[$i]['description'] = $event->getDescription();
            $i++;
        }
        
        $salida["status"]="200";
        $salida["events"]=$arreglo;
        $salida["parametro"]=$i;
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * servicio web que permite registrar la mascota en la app móvil asociada a un
     * usuario en específico.
     */
    public function registerPetAction($nomM, $espM, $genM, $razM, $edaM, $colM, $code)
    {
        if(is_string($nomM) && ctype_alpha($nomM) && is_string($espM) && ctype_alpha($espM) && is_string($razM) && ctype_alpha($razM) && is_string($genM) && ctype_alpha($genM) && is_numeric($edaM) && ctype_digit($edaM) && is_string($colM) && ctype_alpha($colM) && is_numeric($code) && ctype_digit($code))
        {
            if(($genM == "M" || $genM == "F") && ($espM == "G" || $espM == "P"))
            {
                $user = $this->getDoctrine()->getrepository('PCFundationBundle:Appuser')->find($code);
                if($user)
                {
                    $em = $this->getDoctrine()->getManager();
            
                    $pet = new Apppet();
                    
                    $pet->setName($nomM);
                    if($espM == "G")
                    {
                        $pet->setSpecies("FELINE");
                    }
                    else
                    {
                        $pet->setSpecies("CANINE");
                    }
                    if($genM == "M")
                    {
                        $pet->setGender("MALE");
                    }
                    else
                    {
                        $pet->setGender("FEMALE");
                    }
                    $pet->setRace($razM);
                    $pet->setAge($edaM);
                    $pet->setColour($colM);
                    $pet->setAppuser($user);
                
                    $em->persist($pet);
                    $em->flush();
                    
                    
                    $salida["status"]="200";
                    $salida["message"]="ok - registro correcto";
                    $salida["code"]=$user->getId();
                }
                else
                {
                    $salida["status"]="404";
                    $salida["message"]="not found - no se encuentra un usuario con las credenciales ingresadas";
                }
            }
            else
            {
                $salida["status"]="400";
                $salida["message"]="bad request - datos de genero y/o especie incorrectos";
            }
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * servicio web que permite registrar un usuario desde la app móvil en la base
     * de datos.
     */
    public function registerAction($nomUs, $apllUs, $dirUs, $telUs, $emailUs, $passUs)
    {
        
        if(is_string($nomUs) && ctype_alpha($nomUs) && is_string($apllUs) && ctype_alpha($apllUs) && is_string($dirUs) && is_numeric($telUs) && ctype_digit($telUs) && is_string($emailUs) && is_string($passUs))
        {
            
            $em = $this->getDoctrine()->getManager();
        
            $user = new Appuser();
            
            $user->setName($nomUs);
            $user->setLastName($apllUs);
            $user->setAddress($dirUs);
            $user->setPhoneNumber($telUs);
            $user->setEmail($emailUs);
            $user->setPassword($passUs);
            
            $em->persist($user);
            $em->flush();
            
            
            $salida["status"]="200";
            $salida["message"]="ok - registro correcto";
            $salida["code"]=$user->getId();
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * servicio web destinado al login de usuario en la applicación. verifica si
     * este existe en la base de datos y devuelve una respuesta dependiendo del
     * resultado.
     */
    public function loginAction($emailUs, $passUs)
    {
        if(is_string($emailUs) && is_string($passUs))
        {
            $user = $this->getDoctrine()->getRepository('PCFundationBundle:Appuser')->findOneBy(array("email" => $emailUs, "password" => $passUs));
            if($user)
            {
                $salida["status"]="200";
                $salida["message"]="ok - login correcto";
                $salida["code"]=$user->getId();
                $salida["username"]=$user->getName();
            }
            else
            {
                $salida["status"]="404";
                $salida["message"]="not found - no se encuentra un usuario con las credenciales ingresadas";
            }
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * servicio web que permite ingresar las cordenadas asociadas a un reporte de pérdida
     * 
     */ 
    public function addReportAction($pet, $user, $long, $lat)
    {
        if(is_numeric($pet) && ctype_digit($pet) && is_numeric($user) && ctype_digit($pet) && is_numeric($long) && is_numeric($lat))
        {
            
        }
    }
}

