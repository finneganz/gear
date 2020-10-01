<?php

namespace App\Http\Controllers;

use App\Models\Devices\Maker;
use App\Http\Requests\MakerNameRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MakerController extends BaseController
{
    // 管理者用
    public function showMakersList()
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $makers = Maker::orderBy('id', 'ASC')->take(10)->get();
            // 表示用に文字列を置き換え
            foreach($makers as $maker)
            {
                $maker->maker_name = str_replace('_', ' ', $maker->maker_name);
            }
            $isLoggedIn = $this->authCheck();
            return view('makers.list', compact('makers', 'isLoggedIn'));
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function showMakerAddPage()
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $isLoggedIn = $this->authCheck();
            return view('makers.add', compact('isLoggedIn'));
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function addMaker(MakerNameRequest $request)
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $maker = new Maker;
            $maker->maker_name = $request->input('makerName');
            $maker->save();
    
            return redirect()->action('UserController@showUserList');
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function showMakerEditPage(string $makername)
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $maker = Maker::where('maker_name', $makername)->first();
            $isLoggedIn = $this->authCheck();
            return view('makers.edit', compact('maker', 'isLoggedIn'));
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
    public function editMaker(string $makername, MakerNameRequest $request)
    {
        if(Auth::id() === 1 || Auth::id() === 2)
        {
            $maker = Maker::where('maker_name', $makername)->first();
            $maker->maker_name = $request->input('makerName');
            $maker->save();
            return redirect()->action('UserController@showUserList');
        }
        else
        {
            return redirect()->action('UserController@showUserList');
        }
    }
}
