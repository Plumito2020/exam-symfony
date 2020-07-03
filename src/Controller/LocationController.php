<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Location;

class LocationController extends Controller
{


    /**
     * @Route("/", name="location")
     */

    public function index() // c est une action
    {

        return $this->render('location/index.html.twig');

    }

    /**
     * @Route("/location/create", methods={"GET" , "POST"})
     */

    public function create(Request $request) 
    {
        
        if($request->isMethod('POST')){
            $data = $request->request->all();
        }

        //Entity Manager
        $em = $this->getDoctrine()->getManager();

        //Acceder a le repo et fetcher tous les locations
        $repo = $em->getRepository(Location::class);
        $locations = $repo->findAll();

        //Selectionner les locations avec le meme numero de chambre
        $locationsWHERE = array();
        foreach ($locations as $value) {
           if ($value->getIdChambre() == $data['idChambre']) {
            array_push($locationsWHERE,$value);
           }
        }
        

        //Creer l objet Location
        $location = new Location ;
        $location->setIdChambre($data['idChambre']);
        $location->setNomLocataire($data['nom']);
        $location->setPrenomLocataire($data['prenom']);
        $location->setTelephone($data['telephone']);
        $location->setDateDeb($data['dateDeb']);
        $location->setDateFin($data['dateFin']);

        $dispo = true ;
        //Si la liste est vide donc pas de location pr cette chambre alors elle est est dispo
        if(empty($locationsWHERE)){
           $dispo = true ;
        }
        //Sinon on doit verifer 
        else{
            foreach ($locationsWHERE as $value) {
                if (intval(substr($value->getDateFin(),8,9)) >= intval(substr($data['dateDeb'],8,9)) ) {
                    $dispo = false ; 
                    break ;
                }
                    
             } 
        }

        if($dispo == true){
            $em->persist($location);
            $em->flush();// GO tu peux persister
        }

        return $this->render('location/create.html.twig');

    }
}
