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
                   $salida["status"]="409";
                    $salida["message"]="conflict - el usuario no está registrado o no se encuentra en la base de datos."; 
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
    
    
    
    
    
    
    
    public function registerAction($nomUs, $apllUs, $dirUs, $telUs, $emailUs, $passUs)
    {
        
        if(is_string($nomUs) && ctype_alpha($nomUs) && is_string($apllUs) && ctype_alpha($apllUs) && is_string($dirUs) && is_numeric($telUs) && ctype_digit($telUs) && is_string($dirUs) && is_string($passUs))
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
}
