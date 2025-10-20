<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use App\Models\Review;
use Illuminate\Http\Request;

class PlantController extends Controller
{
    // Show list of plants with category filters
    public function index(Request $request)
    {
        $query = Plant::where('isAvailable', true);

        $currentCategory = $request->get('category');

        if ($currentCategory) {
            $query->where('category', $currentCategory);
        }

        $plants = $query->paginate(12);

        // Example plant categories
        $categories = [
            'FLYTRAP'   => 'Venus Flytraps',
            'PITCHER'   => 'Pitcher Plants',
            'SUNDEW'    => 'Sundews',
            'OTHER'     => 'Other Carnivorous Species',
        ];

        return view('plants.index', compact('plants', 'categories', 'currentCategory'));
    }

    // Show details for a single plant
    public function show($id)
    {
        $plant = Plant::with(['reviews.user'])->findOrFail($id);
        $reviews = $plant->reviews;
        $averageRating = round($reviews->avg('rate'), 1);
        $reviewCount = $reviews->count();
        $latestReviews = $reviews->sortByDesc('created_at')->take(2);

        $suggestedPlants = Plant::where('id', '!=', $plant->id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('plants.show', compact('plant', 'averageRating', 'reviewCount', 'latestReviews', 'suggestedPlants'));
    }

    // Show all reviews for a plant
    public function reviews($id)
    {
        $plant = Plant::with(['reviews.user'])->findOrFail($id);
        $reviews = $plant->reviews->sortByDesc('created_at');
        $averageRating = round($reviews->avg('rate'), 1);
        $reviewCount = $reviews->count();

        return view('plants.reviews', compact('plant', 'reviews', 'averageRating', 'reviewCount'));
    }
}
