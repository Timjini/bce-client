<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;
use App\Models\Page;

class AppLayout extends Component
{
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
         $pages = Page::with('category.section')->get();

            $megaMenu = [];

            foreach ($pages as $page) {
                if ($page->category && $page->category->section) {
                    $sectionName   = $page->category->section->name;
                    $categoryName  = $page->category->name;
        
                    $megaMenu[$sectionName][$categoryName][] = [
                        'name' => $page->name,
                        'slug' => $page->full_slug,
                    ];
                } else {
                   $megaMenu['Main']['Services'][] = [
                        'name' => $page->name,
                        'slug' => $page->full_slug,
                    ];
                }
            }
        return view('layouts.app', compact('megaMenu'));
    }
}
