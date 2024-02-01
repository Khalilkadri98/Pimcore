<?php
// src/Controller/TeamController.php

namespace App\Controller;

use Pimcore\Controller\FrontendController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Pimcore\Controller\Attribute\ResponseHeader;
use Pimcore\Model\DataObject;
use Pimcore\Model\Team;
use Pimcore\Model\DataObject\Team\Listing;
use Symfony\Component\Routing\Annotation\Route;


class TeamController extends FrontendController
{

    public function listingAction(): Response
    {
        // Fetch all teams
        $teams = new Listing();


        // Render a template to display teams
        return $this->render('team/list.html.twig', [
            'teams' => $teams
        ]);
    }
    #[Route('/teams/{team}')]
   public function detailAction(DataObject\Team $team)
   {
       return $this->render('team/detail.html.twig', [
        'team' => $team
    ]);
   }
}

