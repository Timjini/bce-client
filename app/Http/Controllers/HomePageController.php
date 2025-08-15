<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index(): View
    {
        $iconBoxes = $this->getIconBoxes();

        return view('pages.home', compact('iconBoxes'));
    }
    
    private function getIconBoxes(): array
    {
        return [
            [
                'title' => 'Systems Engineering & Design',
                'description' => 'Custom engineered solutions tailored to your specific operational requirements.',
                'icon' => 'engineering',
                'bgColor' => 'bg-white',
                'titleColor' => 'text-bce-steel',
                'iconColor' => 'text-bce-blue',
                'padding' => 'p-6',
                'shadow' => 'shadow-md',
                'iconSize' => 'h-12 w-12'
            ],
            [
                'title' => 'Custom Manufacturing & Fabrication',
                'description' => 'High-precision fabrication with ASME-certified quality standards.',
                'icon' => 'box',
                'bgColor' => 'bg-blue-50',
                'titleColor' => 'text-blue-800',
                'iconColor' => 'text-blue-600',
                'padding' => 'p-8',
                'shadow' => 'shadow-lg',
                'iconSize' => 'h-10 w-10'
            ],
            [
                'title' => 'Predictive Maintenance & Repairs',
                'description' => 'Proactive maintenance programs to maximize equipment lifespan.',
                'icon' => 'maintenance',
                'bgColor' => 'bg-white',
                'titleColor' => 'text-blue-800',
                'iconColor' => 'text-blue-600',
                'padding' => 'p-8',
                'shadow' => 'shadow-lg',
                'iconSize' => 'h-10 w-10'
            ],
            [
                'title' => 'Control Panels & HMI Development',
                'description' => 'Advanced human-machine interfaces for optimal system control.',
                'icon' => 'control-panel',
                'bgColor' => 'bg-blue-50',
                'titleColor' => 'text-blue-800',
                'iconColor' => 'text-blue-600',
                'padding' => 'p-8',
                'shadow' => 'shadow-lg',
                'iconSize' => 'h-10 w-10'
            ]
        ];
    }
}
