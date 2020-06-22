<?php

namespace App\Http\Controllers;

use App\Models\Devices\Maker;
use App\Http\Requests\EditMakerRequest;
use Illuminate\Http\Request;

class MakerController extends Controller
{
    // 管理者用
    public function showMakersList()
    {
        $makers = Maker::orderBy('id', 'ASC')->take(10)->get();
        // 表示用に文字列を置き換え
        foreach($makers as $maker)
        {
            $maker->maker_name = str_replace('_', ' ', $maker->maker_name);
        }

        return view('makers.list', compact('makers'));
    }
    public function showMakerAddPage()
    {
        return view('makers.add');
    }
    public function addMaker(Request $request)
    {
        $maker = new Maker;
        $maker->maker_name = $request->input('makerName');
        $maker->save();

        return view('makers.list');
    }
    public function showMakerEditPage(string $makername)
    {
        $maker = Maker::where('maker_name', $makername)->first();
        // 表示用に文字列を置き換え
        $maker->maker_name = str_replace('_', ' ', $maker->maker_name);
        
        return view('makers.edit', compact('maker'));
    }
    public function editMaker(string $makername, EditMakerRequest $request)
    {
        $maker = Maker::where('maker_name', $makername)->first();
        $maker->maker_name = $request->input('makerName');
        $maker->save();

        return view('makers.list');
    }
}
