<?php 

namespace App\Services;


Class TechnologiesService{

    public function getToolsTechnologies() {
        return [
            #stack 1 ['HTML5', 'CSS3', 'JavaScript']
            [
                'id' => '1',
                'Technologies' => ['HTML5', 'CSS3', 'JavaScript'],
            ],
            #stack 2 ['HTML5', 'CSS3', 'JavaScript', 'Swiper.js']
            [
                'id' => '2',
                'Technologies' => ['HTML5', 'CSS3', 'JavaScript', 'Swiper.js'],
            ],
            #stack 3 ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL', 'Chart.js']
            [
                'id' => '3',
                'Technologies' => ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL', 'Chart.js'],
            ],
           
        ];
    }

    public function getTechnologiesById($id) {
        foreach ($this->getToolsTechnologies() as $tech) {
            if ($tech['id'] == $id) {
                return $tech['Technologies'];
            }
        }

       
        return [];
    }
}