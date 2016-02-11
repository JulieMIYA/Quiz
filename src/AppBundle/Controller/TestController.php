<?php

// src/AppBundle/Controller/TestController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class TestController extends Controller
{
    static $questions=array(
        1=>array(
            "content"=>"Comment vous appelez-vous?",
            "choices"=>array(
                "A"=>"Bingbing",
                "B"=>"John",
                "C"=>"Amelie",
                "D"=>"YOUTUBE"
            )
        ),
        2=>array(
            "content"=>"Quel age avez-vous?",
            "choices"=>array(
                "A"=>"24",
                "B"=>"76",
                "C"=>"88",
                "D"=>"100"
            )
        ),
        3=>array(
            "content"=>"Quelle est votre nationalité? ",
            "choices"=>array(
                "A"=>"Japonaise",
                "B"=>"Français",
                "C"=>"Chinoise"
            )
        ),
        4=>array(
            "content"=>"Que faites-vous dans la vie? ",
            "choices"=>array(
                "A"=>"Chanteur",
                "B"=>"Professeur",
                "C"=>"Docteur",
                "D"=>"Vendeur"
            )
        ),
        5=>array(
            "content"=>"Quels sont vos passe-temps préférés? ",
            "choices"=>array(
                "A"=>"Cinéma",
                "B"=>"Natation",
                "C"=>"Theatre"
            )
        )
    );
    /**
     * @Route("/questions/{index}", defaults={"index" = 1}, name="blog_show")
     */
    public function showAction($index)

    {   if($index == sizeof(self::$questions))
            return $this->render(
                'test/question.html.twig',
                array('question' => self::$questions[$index],'index'=> $index,'isEnd'=>true)
            );
        else
            return $this->render(
                'test/question.html.twig',
                array('question' => self::$questions[$index],'index'=> $index,'isEnd'=>false )
            );
    }
}