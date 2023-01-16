<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // Show all listings
    public function index() {
        return view('listings.index', [
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get()
        ]);
    }

    // Show single listing
    public function show($id) { 
        $listing = Listing::find($id);

        if ($listing) {
            return view('listings.show', [
                'listing' => $listing
            ]);
        } else {
            abort('404');
        }
    }

    // Show Create Form
    public function create() {
        return view('listings.create');
    }
}
