<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    /**
     * @Route("/{reactRouting}", name="home", defaults={"reactRouting": null})
     */
    public function index()
    {
        return $this->render('index/index.html.twig');
    }

    /**
     * @Route("/api/employee", name="employee")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getEmployees()
    {
        $employees = [
            [
                'id' => 1,
                'firstname' => 'rakoto',
                'lastname' => 'randria',
                'age' => '12'
            ],
            [
                'id' => 2,
                'firstname' => 'rakoto',
                'lastname' => 'randria',
                'age' => '12'
            ],
            [
                'id' => 3,
                'firstname' => 'rakoto',
                'lastname' => 'randria',
                'age' => '12'
            ],
            [
                'id' => 4,
                'firstname' => 'rakoto',
                'lastname' => 'randria',
                'age' => '12'
            ],
            [
                'id' => 5,
                'firstname' => 'rakoto',
                'lastname' => 'randria',
                'age' => '12'
            ]
        ];

        $response = new Response();

        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');

        $response->setContent(json_encode($employees));

        return $response;
    }
}
