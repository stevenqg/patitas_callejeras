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
use PC\FundationBundle\Entity\Report;



class ServiceController extends Controller
{
    /**
     * servicio web que devuelve el listado actual de eventos a realizarse.
     */
    public function serviceAction()
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
                    $pet->setStatus("FOUND");
                
                    $em->persist($pet);
                    $em->flush();
                    
                    
                    $salida["status"]="200";
                    $salida["message"]="ok - registro correcto.";
                    $salida["code"]=$user->getId();
                }
                else
                {
                    $salida["status"]="404";
                    $salida["message"]="not found - no se encuentra un usuario con las credenciales ingresadas.";
                }
            }
            else
            {
                $salida["status"]="400";
                $salida["message"]="bad request - datos de genero y/o especie incorrectos.";
            }
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos.";
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
            $salida["message"]="ok - registro correcto.";
            $salida["code"]=$user->getId();
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos.";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * servicio web destinado al login de usuario en la aplicación. verifica si
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
                $salida["message"]="ok - login correcto.";
                $salida["code"]=$user->getId();
                $salida["username"]=$user->getName();
            }
            else
            {
                $salida["email"]=$emailUs;
                $salida["password"]=$emailUs;
                $salida["status"]="404";
                $salida["message"]="not found - no se encuentra un usuario con las credenciales ingresadas.";
            }
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos.";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * servicio web que permite ingresar las coordenadas asociadas a un reporte de pérdida.
     * 
     */ 
    public function addReportAction($pet, $user, $longitude, $latitude, $status)
    {
        if(is_numeric($pet) && ctype_digit($pet) && is_numeric($user) && ctype_digit($user) && is_numeric($longitude) && is_numeric($latitude) && is_numeric($status) && ctype_digit($status) && ($status == 1))
        {
            $user = $this->getDoctrine()->getRepository('PCFundationBundle:Appuser')->find($user);
            
            if($user)
            {
               $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Apppet')->findOneBy(array('id' => $pet, 'appuser' => $user)); 
               if($pet)
                {
                    
                    
                    $em = $this->getDoctrine()->getManager();
                    $report = new Report();
                    $report->setApppet($pet);
                    $report->setAppuser($user);
                    $report->setLongitude($longitude);
                    $report->setLatitude($latitude);
                    $report->setStatus("ACTIVE");
                    $em->persist($report);
                    $em->flush();
                    
                    $pet->setStatus("LOST");
                    $em->flush();
                    
                    
                    $salida["status"]="200";
                    $salida["message"]="ok - registro correcto";
                }
                else
                {
                    $salida["status"]="404";
                    $salida["message"]="not found - el usuario no tiene una mascota asociada con el nombre dado.";
                }
            }
            else
            {
                $salida["status"]="404";
                $salida["message"]="not found - no se encuentra el usuario asociado al reporte.";
            }
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos.";
        }
        
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    
    /**
     * servicio web que permite cambiar el estado de un reporte a CLOSED 
     */
     public function closeReportAction($petId, $userId)
     {
         if(is_numeric($petId) && ctype_digit($petId) && is_numeric($userId) && ctype_digit($userId))
         {
             $pet = $this->getDoctrine()->getRepository('PCFundationBundle:Apppet')->find($petId);
             $user = $this->getDoctrine()->getRepository('PCFundationBundle:Appuser')->find($userId);
             $report = $this->getDoctrine()->getRepository('PCFundationBundle:Report')->findOneBy(array('apppet' => $pet, 'appuser' => $user));
             
             if($report && $report->getStatus()=="ACTIVE")
             {
                 $em = $this->getDoctrine()->getManager();
                 $report->setStatus("CLOSED");
                 $em->flush();
                 
                $salida["status"]="200";
                $salida["message"]="ok - se cambio correctamente el estado del reporte ".$report->getId()." a CLOSED.";
             }
             else
             {
                 $salida["status"]="404";
                $salida["message"]="not found - no se encuentra un reporte activo asociado a esta llave de usuario-mascota.";
             }
         }
         else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos.";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
     }
     
    /**
     * Servicio web que devuelve el listado actual reportes cerrados.
     */ 
    public function viewClosedReportsAction()
    {
        $reports = $this->getDoctrine()->getRepository('PCFundationBundle:Report')->findByStatus('CLOSED');
        
        $arreglo[] = array();
        
        $i = 0;
        foreach ($reports as $report) 
        {
            $arreglo[$i]['petName'] = $report->getAppPet()->getName();
            $arreglo[$i]['petRace'] = $report->getAppPet()->getRace();
            $arreglo[$i]['petSpecie'] = $report->getAppPet()->getSpecies();
            $arreglo[$i]['petAge'] = $report->getAppPet()->getAge();
            $arreglo[$i]['petColor'] = $report->getAppPet()->getColour();
            $arreglo[$i]['userName'] = $report->getAppUser()->getName();
            $arreglo[$i]['userTel'] = $report->getAppUser()->getPhoneNumber();
            $arreglo[$i]['userEmail'] = $report->getAppUser()->GetEmail();
            $arreglo[$i]['longitude'] = $report->GetLongitude();
            $arreglo[$i]['latitude'] = $report->GetLatitude();
            
            $i++;
        }
        
        $salida["status"]="200";
        $salida["reports"]=$arreglo;
        $salida["parametro"]=$i;
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    /**
     * Servicio web que devuelve el listado actual reportes activos.
     */ 
    public function viewActiveReportsAction()
    {
        $reports = $this->getDoctrine()->getRepository('PCFundationBundle:Report')->findByStatus('ACTIVE');
        
        $arreglo[] = array();
        
        $i = 0;
        foreach ($reports as $report) 
        {
            $arreglo[$i]['petName'] = $report->getAppPet()->getName();
            $arreglo[$i]['petRace'] = $report->getAppPet()->getRace();
            $arreglo[$i]['petSpecie'] = $report->getAppPet()->getSpecies();
            $arreglo[$i]['petAge'] = $report->getAppPet()->getAge();
            $arreglo[$i]['petColor'] = $report->getAppPet()->getColour();
            $arreglo[$i]['userName'] = $report->getAppUser()->getName();
            $arreglo[$i]['userTel'] = $report->getAppUser()->getPhoneNumber();
            $arreglo[$i]['userEmail'] = $report->getAppUser()->GetEmail();
            $arreglo[$i]['longitude'] = $report->GetLongitude();
            $arreglo[$i]['latitude'] = $report->GetLatitude();
            
            $i++;
        }
        
        $salida["status"]="200";
        $salida["reports"]=$arreglo;
        $salida["parametro"]=$i;
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
     
    /**
     * servicio web que permite visualizar las mascotas asociadas a un usuario dado.
     */
    public function viewPetsAction($user)
    {
        if(is_numeric($user) && ctype_digit($user))
        {
            $owner = $this->getDoctrine()->getRepository('PCFundationBundle:Appuser')->find($user);
            
            if($owner)
            {
                $pets = $this->getDoctrine()->getRepository('PCFundationBundle:Apppet')->findByAppuser($owner);
                $arreglo[] = array();
                
                $i = 0;
                foreach ($pets as $pet) 
                {
                    $arreglo[$i]['id'] = $pet->getid();
                    $arreglo[$i]['name'] = $pet->getName();
                    $arreglo[$i]['age'] = $pet->getAge();
                    
                    if($pet->getSpecies() == "FELINE")
                    {
                        $arreglo[$i]['specie'] = "felino";    
                    }
                    else
                    {
                        $arreglo[$i]['specie'] = "canino";    
                    }
                    
                    $arreglo[$i]['race'] = $pet->getRace();
                    $arreglo[$i]['colour'] = $pet->getColour();
                    
                    if($pet->getGender() == "MALE")
                    {
                        $arreglo[$i]['gender'] = "macho";    
                    }
                    else
                    {
                        $arreglo[$i]['gender'] = "hembra";    
                    }
                    $arreglo[$i]['status'] = $pet->getStatus();
                    
                    $i++;
                }
                
                $salida["status"]="200";
                $salida["message"]="ok - busqueda exitosa.";
                $salida["pets"]=$arreglo;
                $salida["parametro"]=$i; 
            }
            else
            {
                $salida["status"]="404";
                $salida["message"]="not found - no se encuentra el usuario.";
            }
        }
        else
        {
            $salida["status"]="400";
            $salida["message"]="bad request - datos incorrectos.";
        }
        echo($_GET["callback"]."(".json_encode($salida).")");
        return $this->render('PCFundationBundle:Admin:empty.html.twig');
    }
    
    
    
    
}

