<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webconstroller extends Controller
{
    public function index(){
        return view('index');
    }

    public function process(Request $request)
    {
        $elements = explode(',', $request->input('elements'));

        // Call the function to find duplicates
        $duplicates = $this->findDuplicatesInArray($elements);

        // Output the result
        return response()->json(['duplicates' => $duplicates]);
    }

     private function findDuplicatesInArray($arr)
    {
        // Dictionary to store the frequency of each element
        $frequency = [];

        // List to store the elements occurring more than once
        $duplicates = [];

        foreach ($arr as $element) {
            // If the element is not in the dictionary, add it with a frequency of 1
            if (!isset($frequency[$element])) {
                $frequency[$element] = 1;
            } else {
                // If the element is already in the dictionary, increment its frequency
                $frequency[$element]++;

                // If the frequency becomes 2, add the element to the duplicates list
                if ($frequency[$element] == 2) {
                    $duplicates[] = $element;
                }
            }
        }

        return $duplicates;
    }
}
