<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends AbstractController
{

    public function index(Request $request, \App\Services\ServiceInterface $thirdService)
    {
        return $this->json([
            'hello' => 'world',
            'request' => $request->get('rr'),
            'serviceParam' => $thirdService->get()
        ]);
    }

}