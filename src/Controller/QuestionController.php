<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(Environment $twigEnvironment){

        //Using twig service directly
        $html = $twigEnvironment->render('question/homepage.html.twig');
        return new Response($html);
        //Using twig Recipe
        #return $this ->render('question/homepage.html.twig');
        //Using hardcoded HTML
        #return new Response('Hello there !');
    }

    /**
     * @Route("/questions/{slugulusErecto}", name="app_question_show")
     */
    public function show($slugulusErecto)
    {
        $answers = [
            'Agagak',
            'agagougouk',
            'Ougougagak',
        ];

        dump($this);

        return $this->render('question/show.html.twig',
            [   'question' => ucwords(str_replace('-', ' ', $slugulusErecto)),
                'answers' => $answers,
            ]);
        #return new Response(sprintf('%s Feur :)',ucwords(str_replace('-', ' ', $slugulusErecto))));
    }
}