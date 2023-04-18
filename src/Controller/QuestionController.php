<?php

namespace App\Controller;

use App\Repository\QuestionRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;
use App\Entity\Question;

class QuestionController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(QuestionRepository $repository){
    #public function homepage(Environment $twigEnvironment, EntityManagerInterface $entityManager){
        //On peut utiliser entityManager pour l'autowiring, ou appeler directement le bon repository
        #$repository = $entityManager->getRepository(Question::class);

        $questions = $repository->findAllAskedOrderedByNewest();
        #$questions = $repository->findBy([], ['askedAt' => 'DESC']);
        #$questions = $repository->findAll();
        return $this->render('question/homepage.html.twig', [
            'questions' => $questions,
        ]);

        //Using twig service directly
        #$html = $twigEnvironment->render('question/homepage.html.twig');
        #return new Response($html);
        //Using twig Recipe
        #return $this ->render('question/homepage.html.twig');
        //Using hardcoded HTML
        #return new Response('Hello there !');
    }

    /**
     * @Route("/questions/new")
     */
    public function new(EntityManagerInterface $entityManager){
        $this->denyAccessUnlessGranted('Role_User');

        return new Response('Sounds like a GREAT feature dor V2!');
        /*$question = new Question();
        $question->setName('Missing pants')
            ->setSlug('missing-pants-'.rand(0, 1000))
            ->setQuestion(<<<EOF
Hi! So... I'm having a *weird* day. Yesterday, I cast a spell
to make my dishes wash themselves. But while I was casting it,
I slipped a little and I think `I also hit my pants with the spell`.
When I woke up this morning, I caught a quick glimpse of my pants
opening the front door and walking out! I've been out all afternoon
(with no pants mind you) searching for them.
Does anyone have a spell to call your pants back?
EOF
            );
        if (rand(1, 10) > 2) {
            $question->setAskedAt(new \DateTime(sprintf('-%d days', rand(1, 100))));
        }
        $question->setVotes(rand(-20,50));

        $entityManager->persist($question);
        $entityManager->flush();
        return new Response(sprintf(
            'Well hallo! The shiny new question is id #%d, slug: %s',
            $question->getId(),
            $question->getSlug()
        ));return new response('Time for some Doctrine magic!');
        */
    }

    /**
     * @Route("/questions/{slugulusErecto}", name="app_question_show")
     */
    public function show($slugulusErecto, EntityManagerInterface $entityManager){
        $repository = $entityManager->getRepository(Question::class);
        /** @var Question|null $question */
        $question = $repository->findOneBy(['slug' => $slugulusErecto]);

        if (!$question) {
            throw $this->createNotFoundException(sprintf('no question found for slug "%s"', $slugulusErecto));
        }

        $answers = [
            'Agagak',
            'agagougouk',
            'Ougougagak',
        ];

        return $this->render('question/show.html.twig', [
            'question' => $question,
            'answers' => $answers,
        ]);

        /*return $this->render('question/show.html.twig',
            [   'question' => ucwords(str_replace('-', ' ', $slugulusErecto)),
                'answers' => $answers,
            ]);*/
        #return new Response(sprintf('%s Feur :)',ucwords(str_replace('-', ' ', $slugulusErecto))));
    }

    /**
     * @Route("/questions/{slugulusErecto}/vote", name="app_question_vote", methods="POST")
     */
    #if an endpoint changes data on the server, it should not allow GET requests.
    public function questionVote(Request $request,$slugulusErecto, EntityManagerInterface $entityManager)
    {
        $repository = $entityManager->getRepository(Question::class);
        $question = $repository->findOneBy(['slug' => $slugulusErecto]);
        $direction = $request->request->get('direction');

        if ($direction === 'up') {
            $question->upVote();
            #$question->setVotes($question->getVotes() + 1);
        } elseif ($direction === 'down') {
            $question->downVote();
            #$question->setVotes($question->getVotes() - 1);
        }

        $entityManager->persist($question);
        $entityManager->flush();

        return $this->redirectToRoute('app_question_show', [
            'slugulusErecto' => $question->getSlug()
        ]);
    }

    /**
     * @Route("/questions/edit/{slugulusErecto}", name="app_question_edit")
     */
    public function edit($slugulusErecto, EntityManagerInterface $entityManager){
        $repository = $entityManager->getRepository(Question::class);
        /** @var Question|null $question */
        $question = $repository->findOneBy(['slug' => $slugulusErecto]);

        if (!$question) {
            throw $this->createNotFoundException(sprintf('no question found for slug "%s"', $slugulusErecto));
        }

        $this->denyAccessUnlessGranted('EDIT', $question);

        /*$this->denyAccessUnlessGranted('IS_AUTHENTICATED_REMEMBERED');

        if ($question->getOwner() !== $this->getUser()){
            throw $this->createAccessDeniedException("You are not the owner");
        }*/


        return $this->render('question/edit.html.twig', [
            'question' => $question,
        ]);
    }
}