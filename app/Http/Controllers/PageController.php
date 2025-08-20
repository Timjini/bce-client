<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Page;
use App\Models\Section;
use Illuminate\View\View;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function show($sectionSlug, $categorySlug, $pageSlug)
    {
        $page = Page::where('slug', $pageSlug)
        ->whereHas('category', function ($q) use ($categorySlug, $sectionSlug) {
            $q->where('slug', $categorySlug)
              ->whereHas('section', function ($q) use ($sectionSlug) {
                  $q->where('slug', $sectionSlug);
              });
        })
        ->firstOrFail();

        return view('pages.show', compact('page'));
    }
    
    
    public function showCategory($sectionSlug, $categorySlug)
    {
        $section = Section::where('slug', $sectionSlug)->firstOrFail();
    
        $category = Category::where('slug', $categorySlug)
            ->where('section_id', $section->id)
            ->firstOrFail();
    
        $page = Page::where('category_id', $category->id)
        ->where('slug', $categorySlug)
        ->firstOrFail();

    
        return view('pages.category', compact('section', 'category', 'page'));
    }
    
    
    public function showSection($sectionSlug)
    {
       
        $section = Section::where('slug', $sectionSlug)->firstOrFail();
    
      
        $page = Page::where('section_id', $section->id)
                    ->whereNull('category_id')
                    ->first();
    
        return view('pages.section', compact('section', 'page'));
    }
    
      public function search(Request $request)
    {
        $query = $request->input('q');

        $pages = Page::where('title', 'like', "%{$query}%")
            ->orWhere('name', 'like', "%{$query}%")
            ->orWhere('slug', 'like', "%{$query}%")
            ->get();

        return view('pages.search-results', compact('pages', 'query'));
    }

    
}
