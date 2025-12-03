<?php
namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Page;

class HomePageController extends Controller
{
    public function index(): View
    {
        
        $iconBoxes = $this->getIconBoxes();
        $pages = Page::with('category.section')->get();

        $megaMenu = [];
    
        foreach ($pages as $page) {
            $sectionName   = $page->category?->section?->name ?? 'Uncategorized';
            $categoryName  = $page->category?->name ?? 'Other';
            
            $megaMenu[$sectionName][$categoryName][] = [
                'name' => $page->name,
                'slug' => $page->full_slug,
            ];
        }

        return view('pages.home', compact('iconBoxes', 'megaMenu'));
    }
    
    private function getIconBoxes(): array
    {
        return [
            [
                'title' => 'ASME Code Vessels',
        'description' => 'Pressure vessels designed and fabricated to ASME boiler and pressure vessel code standards.',
                'icon' => 'engineering',
                'bgColor' => 'bg-white',
                'titleColor' => 'text-bce-steel',
                'iconColor' => 'text-bce-blue',
                'padding' => 'p-6',
                'shadow' => 'shadow-md',
                'iconSize' => 'h-12 w-12'
            ],
            [
                'title' => 'Dust Collection Systems',
        'description' => 'High-efficiency dust collectors for industrial applications with fire/explosion protection.',
                'icon' => 'box',
                'bgColor' => 'bg-blue-50',
                'titleColor' => 'text-blue-800',
                'iconColor' => 'text-blue-600',
                'padding' => 'p-8',
                'shadow' => 'shadow-lg',
                'iconSize' => 'h-10 w-10'
            ],
            [
                'title' => 'Coal-Fired Boiler Solutions',
        'description' => 'Complete pollution control systems for SO₂, NOₓ, and particulate emissions.',
                'icon' => 'maintenance',
                'bgColor' => 'bg-white',
                'titleColor' => 'text-blue-800',
                'iconColor' => 'text-blue-600',
                'padding' => 'p-8',
                'shadow' => 'shadow-lg',
                'iconSize' => 'h-10 w-10'
            ],
            [
                'title' => 'Food Processing Air Solutions',
        'description' => 'Specialized systems for food grade applications with hygienic design.',
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

