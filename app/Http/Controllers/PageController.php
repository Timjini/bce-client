<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Section;
use Illuminate\View\View;

class PageController extends Controller
{
     public function show($sectionSlug, $categorySlug, $pageSlug)
    {
        // Find section
        $section = Section::where('slug', $sectionSlug)->firstOrFail();

        // Find category within that section
        $category = Category::where('slug', $categorySlug)
            ->where('section_id', $section->id)
            ->firstOrFail();

        // Find page within that category
        $page = Page::where('slug', $pageSlug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        return view('pages.show', compact('section', 'category', 'page'));
    }
    
}
