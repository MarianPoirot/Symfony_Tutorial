<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
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
        $answers = [
            'Agagak',
            'agagougouk',
            'Ougougagak',
        ];

        return $this->render('question/show.html.twig',
            [   'question' => ucwords(str_replace('-', ' ', $slugulusErecto)),
                'answers' => $answers,
            ]);
        #return new Response(sprintf('%s Feur :)',ucwords(str_replace('-', ' ', $slugulusErecto))));
    }
}