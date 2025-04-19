<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\View\View;

class WelcomeController extends Controller
{
    public function index(): View
    {
        $collections = Collection::where('is_featured', true)
            ->take(3)
            ->get()
            ->map(function ($collection) {
                // If no image is set, use a placeholder
                if (!$collection->image) {
                    $collection->image = 'images/placeholder.jpg';
                }
                return $collection;
            });

        return view('welcome', compact('collections'));
    }
} 