<?php

namespace App\DataFixtures;

use App\Entity\Answer;
use App\Entity\Question;
use App\Entity\Tag;
use App\Factory\AnswerFactory;
use App\Factory\QuestionFactory;
use App\Factory\TagFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        UserFactory::createone([
            'email' => 'admin@example.com',
            'plainPassword' => 'admin',
            'roles'=> ['ROLE_ADMIN'],
        ]);

        UserFactory::createone([
            'email' => 'user@example.com',
            'plainPassword' => 'user',
        ]);

        UserFactory::createMany(10);

        TagFactory::createMany(100);

        $questions = QuestionFactory::new()->createMany(20, function() {
            return [
                'owner' => UserFactory::random(),
                'tags' => TagFactory::randomRange(0,5)
                ];
        });
        QuestionFactory::new()
            ->unpublished()
            ->createMany(5)
        ;

        AnswerFactory::createMany(100, function() {
            return[
                'question' => QuestionFactory::random()
            ];
        });

        //link answers only to the $questions
        AnswerFactory::createMany(10, function() use ($questions){
            return[
                'question' => $questions[array_rand($questions)],
            ];
        });

        AnswerFactory::new(function() use ($questions) {
            return[
                'question' => $questions[array_rand($questions)],
            ];
        })->needsApproval()->many(5)->create();

        $manager->flush();
    }
}
