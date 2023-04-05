<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
{
    /**
     * @Route("/")
     */
    public function homepage(){
        return new Response('Hello there !');
    }

    /**
     * @Route("/questions/{slugulusErecto}")
     */
    public function show($slugulusErecto)
    {
        return new Response(sprintf('%s Feur :)',ucwords(str_replace('-', ' ', $slugulusErecto))));
    }
}