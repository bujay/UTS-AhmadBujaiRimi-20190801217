<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    $response = Http::get('https://pddikti.kemdikbud.go.id/data_pt/0D1E63E9-CBFB-4546-A242-875C310083A5');
    $data=$response->json();
    return view('index',compact('data'));
}
