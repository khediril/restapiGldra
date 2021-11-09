<?php

namespace App\Controller;

use App\Entity\Place;
use App\Repository\PlaceRepository;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\Routing\Annotation\Route;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\Get; // N'oublons pas d'inclure Get
use FOS\RestBundle\Serializer\JMSSerializerAdapter;

class PlaceController extends AbstractFOSRestController//AbstractController
{
    
    
    /**
     * @Get("/places",name="places")
     */
    public function getPlaces(PlaceRepository $repo)

    {

        $places = $repo->findAll();
        // transformer les objets en tableau  
        $formatted = [];
        foreach ($places as $place) {
            $formatted[] = [
                'id' => $place->getId(),
                'name' => $place->getName(),
                'address' => $place->getAdresse(),
            ];
        }

        return new JsonResponse($formatted);
    }

    
    /**
     * @Get("/api/places/{id}",name="place_id")
     * @View
     */
    public function getPlace(PlaceRepository $repo, $id)
    {
        $place = $repo->find($id);
        if (empty($place)) 
        {
            return new JsonResponse(['message' => 'Place not found'], Response::HTTP_NOT_FOUND);        
        } 
       // dd($p);
       // return $this->json($place);
       return $place;
    }

}
