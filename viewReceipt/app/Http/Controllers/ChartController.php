<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; // Assuming your User model is in the App\Models namespace

class ChartController extends Controller
{
    public function userChart(){
        $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();

        $labels=[];
        $data=[];
        $colors = ['#FF5733', '#3498DB', '#2ECC71', '#F1C40F', '#FF5733', '#000000', '#8E44AD', '#FFC0CB', '#00FFFF', '#FF00FF', '#A52A2A', '#008080'];


        for ($i=1; $i <= 12; $i++) {
            $month = date('F', mktime(0, 0, 0, $i, 1));
            $count = 0;

            foreach($users as $user){
                if($user->month == $i){
                    $count = $user->count;
                    break;
                }
            }

            array_push($labels, $month);
            array_push($data, $count);
        }

        $datasets = [
            [
                'label'=> 'Users',
                'data'=> $data,
                'backgroundColor' => $colors
            ]
        ];

        return view('clientChart', compact('datasets', 'labels'));
    }
}
