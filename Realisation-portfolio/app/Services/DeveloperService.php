<?php

namespace App\Services;


Class DeveloperService{
   
    public function getHerosection(){

        return  [
            'name' => 'Mehdi Bentaleb',
            'roule' => 'Web developer',
            'bio' => 'I’m Mehdy Bentaleb, a Fullstack Developer building intuitive and responsive websites.
             I turn ideas into clean, functional, and engaging digital experiences.'
        ];
    }

    public function getAboutsection(){

        return  [

            'name' => 'Mehdi Bentaleb',
            'roule' => 'Web developer',
            'img' => 'images/profile.png',
            'bio' => '
            <p class="text-lg text-gray-600 leading-relaxed">
                I’m passionate Fullstack Developer from <span class="text-blue-600 font-semibold">Tangier, Morocco</span>.
            </p>
            <p class="text-lg text-gray-600 leading-relaxed">
                I specialize in <span class="font-semibold text-gray-800">HTML, CSS, JavaScript, PHP, Laravel, React, and TailwindCSS </span>,
                crafting responsive and elegant websites and web applications. 
            </p>
            <p class="text-lg text-gray-600 leading-relaxed"> 
                I love clean design,
                smooth animations, and intuitive UX. I enjoy turning ideas into functional digital
                experiences and constantly exploring new tools to improve my craft
            </p>',
            
        ];
    }

    public function getSocialmediaContact(){
       return [
            [
                'iconApp' => 'fab fa-instagram',
                'link' => 'https://www.instagram.com/bn_mehdy/'
            ],
            [
                'iconApp' => 'fab fa-linkedin',
                'link' => 'https://www.linkedin.com/in/mehdi-bentaleb/'
            ],
            [
                'iconApp' => 'fab fa-github',
                'link' => 'https://github.com/BenTaleb-Mehdi'
            ]
        ];
    }
    





}