<?php

namespace App\Http\Controllers;
use App\Models\Devices\Maker;

use Illuminate\Http\Request;

class MakerController extends Controller
{
    // 管理者用
    public function showMakersList()
    {
        return view('makers.list');
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
    public function showMakerEditPage()
    {
        return view('makers.edit');
    }
    public function editMaker()
    {
        //
    }
}
