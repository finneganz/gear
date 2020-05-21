<?php

namespace App\Http\Controllers;

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
    public function addMaker()
    {
        //
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
