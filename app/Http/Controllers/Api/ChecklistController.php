<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Checklist;

class ChecklistController extends Controller
{
    public function index(Request $request) {
        //echo 'hello123';

        $checklists = Checklist::all();
        //dd($checklists);

        return response()->json($checklists);
    }
}
