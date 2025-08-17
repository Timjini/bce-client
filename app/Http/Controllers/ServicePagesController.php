<?php
namespace App\Http\Controllers;

use Illuminate\View\View;

class ServicePagesController extends Controller
{
    public function index(): View
    {
        return view('services.index');
    }

    public function maintenance(): View
    {
        return view('services.maintenance');
    }
    public function installation(): View
    {
        return view('services.installation');
    }
}
