<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    //
    public function index()
    {
        // Get current date
        $currentDate = Carbon::now();
        
        // Format the date as "Day, D Month YYYY"
        $formattedDate = $currentDate->format('D, j F Y');
        $dateList = [$currentDate];

        for ($i = 1; $i <= 6; $i++) {
            $new = $currentDate->addDays(1)->copy();
            array_push($dateList, $new);
        }

        usort($dateList, function ($a, $b) {
            return $a <=> $b;
        });

        // You can then use $formattedDate in your application
        return view('schedule', ['dateList' => $dateList]);
    }
}
