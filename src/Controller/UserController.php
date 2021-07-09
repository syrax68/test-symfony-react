<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/api/employee", name="employee")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getEmployees()
    {
        $employees = [
            [
                'id' => 1,
                'firstname' => 'Olususi Oluyemi',
                'lastname' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'age' => '12'
            ],
            [
                'id' => 2,
                'firstname' => 'Olususi Oluyemi',
                'lastname' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'age' => '12'
            ],
            [
                'id' => 3,
                'firstname' => 'Olususi Oluyemi',
                'lastname' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'age' => '12'
            ],
            [
                'id' => 4,
                'firstname' => 'Olususi Oluyemi',
                'lastname' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
                'age' => '12'
            ],
            [
                'id' => 5,
                'firstname' => 'Olususi Oluyemi',
                'lastname' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation',
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
