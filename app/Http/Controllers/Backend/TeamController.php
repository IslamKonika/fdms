<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TeamController extends Controller
{
    public function team()
    {
        return view('backend.team');
    }

    public function form()
    {
        return view('backend.team-form');
    }

    public function store(Request $request)
    {


        $validation = Validator::make($request->all(), [

            'name' => 'required|string',
            'team_amount' => 'required|numeric',

        ]);

        // return $request;

           if($validation->fails())
                {
                    dd($validation->getMessageBag());
                    flash()->error('input field empty.');
                }

        // return redirect()->back();


        Team::create([
            'team_name' => $request->name,
            'amount' => $request->team_amount,
        ]);

        flash()->success('Succssfully added.');
        return redirect()->back();
    }
}
