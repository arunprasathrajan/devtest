<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\StreamInterface as Stream;

class SiteController extends BaseController
{

    public function home(Request $request, Response $response)
    {
        $data = [
            'hero' => [
                'title' => 'Club Burrito',
                'image' => 'https://www.bestofengland.com/wp-content/uploads/2016/02/ClubBurrito-5.jpg'
            ],

            'cardmasonry' => [
                'cards' => [

                        ['image' => '/images/home/image1.jpg', 'title' => 'Title 1', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 1'],
                        ['image' => '/images/home/image2.jpg', 'title' => 'Title 2', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 2'],
                        ['image' => '/images/home/image3.jpg', 'title' => 'Title 3', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 3'],
                        ['image' => '/images/home/image4.jpg', 'title' => 'Title 4', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 4'],
                        ['image' => '/images/home/image5.jpg', 'title' => 'Title 5', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 5'], 
                        ['image' => '/images/home/image6.jpg', 'title' => 'Title 6', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 6']
                ]


            ],

            'callToAction' => [
                'text' => 'Know a great place to eat?',
                'button' => [
                    'text' => 'Suggest',
                    'href' => '#'
                ]
            ]
        ];

        $body = $response->getBody();
        $body->write($this->twig->render('templates/home.twig', $data));

        return $response;
    }


    public function places(Request $request, Response $response)
    {
        $data = [

            'cardmasonry' => [
                'cards' => [

                        ['image' => '/images/home/image1.jpg', 'title' => 'Title 1', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 1'],
                        ['image' => '/images/home/image2.jpg', 'title' => 'Title 2', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 2'],
                        ['image' => '/images/home/image3.jpg', 'title' => 'Title 3', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 3'],
                        ['image' => '/images/home/image4.jpg', 'title' => 'Title 4', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 4'],
                        ['image' => '/images/home/image5.jpg', 'title' => 'Title 5', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 5'], 
                        ['image' => '/images/home/image6.jpg', 'title' => 'Title 6', 'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.', 'button_text' => 'Call To Action 6']
                ]


            ]
        ];

        $body = $response->getBody();
        $body->write($this->twig->render('templates/place.twig', $data));

        return $response;
    }

}
