<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\Http\Controllers\ListingController;


class ListingController extends Controller
{
    //

    public function get_listing_api(Listing $listing) {
        return $listing->toJson();

    }


}


