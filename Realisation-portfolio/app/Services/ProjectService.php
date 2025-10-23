<?php

namespace App\Services;

class ProjectService {

    protected $TechnologiesService;
    public function __construct(TechnologiesService $TechnologiesService){
            $this->TechnologiesService = $TechnologiesService;
    }
    public function getProjects() {
        return [
            [
                'id' => '1',
                'img' => 'images/websiteapple.png',
                'title' => 'Website Apple',
                'des' => 'A modern replica of the Apple homepage with smooth animations, clean UI, and responsive design.',
                'Project-Overview' => 'This project recreates Apple’s iconic homepage using pure front-end technologies. It focuses on advanced layout structure, precise alignment, and professional animations for an authentic feel across all devices.',
                 'Duration' => 2 . ' Months',
                'tags' => $this->TechnologiesService->getTechnologiesById(1),
            ],
            [
                'id' => '2',
                'img' => 'images/websitenike.png',
                'title' => 'Website Nike',
                'des' => 'An interactive landing page inspired by Nike, featuring dynamic sliders and stylish layouts.',
                'Project-Overview' => 'The Nike website project emphasizes motion and interactivity. Using Swiper.js, it includes product showcases, smooth transitions, and modern aesthetics to deliver a dynamic brand-like experience.',
                'Duration' => 4 . ' Months',
                'tags' => $this->TechnologiesService->getTechnologiesById(2),
            ],
            [
                'id' => '3',
                'img' => 'images/dashboard.png',
                'title' => 'Dashboard Management - Flowers',
                'des' => 'A complete flower shop management dashboard built with PHP and MySQL, including analytics using Chart.js.',
                'Project-Overview' => 'This system enables administrators to manage flowers, clients, and sales efficiently. Built with PHP and MySQL, it features data visualization with Chart.js, CRUD functionality, and a secure login system for better management insights.',
                'Duration' => 4 . ' Months',
                'tags' => $this->TechnologiesService->getTechnologiesById(3),
            ],
            [
                'id' => '4',
                'img' => 'images/portfolio.png',
                'title' => 'Personal Portfolio Website',
                'des' => 'A clean and minimal portfolio to showcase projects and skills, designed with a responsive layout.',
                'Project-Overview' => 'This personal portfolio highlights front-end projects and skills with a minimalist design approach. It adapts seamlessly to all screen sizes and includes sections for projects, skills, and contact information.',
                'Duration' => 3 . ' Months',
                'tags' => $this->TechnologiesService->getTechnologiesById(1),
            ],
            [
                'id' => '5',
                'img' => 'images/coffeWebsite.png',
                'title' => 'Website Coffee Shop',
                'des' => 'A cozy coffee shop website with elegant visuals and a simple, user-friendly navigation experience.',
                'Project-Overview' => 'This project captures the warm and welcoming atmosphere of a coffee shop through modern visuals and elegant typography. It includes product sections, contact details, and a responsive layout for smooth browsing on all devices.',
                'Duration' => 3 . ' Months',
                'tags' => $this->TechnologiesService->getTechnologiesById(1),
            ],
            [
                'id' => '6',
                'img' => 'images/websiteapple.png',
                'title' => 'Mini Market Website',
                'des' => 'A mini-market online platform with product sections, clean layout, and smooth interactions.',
                'Project-Overview' => 'The mini-market website simulates an online shop experience with categorized products, add-to-cart interactions, and responsive sections. Designed for small businesses, it offers a user-friendly interface and structured layout for product management.',
                'Duration' => 4 . ' Months',
                'tags' => $this->TechnologiesService->getTechnologiesById(1),
            ]
        ];
    }
}
