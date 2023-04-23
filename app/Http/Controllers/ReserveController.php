<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReserveController extends Controller
{
    // 予約画面TOP
    public function top()
    {
        return view('reserve.index');
    }

    // 利用者情報入力
    public function user()
    {
        return view('reserve.user');
    }

    // 確認画面
    public function confirm()
    {
        return view('reserve.confirm');
    }

    // 完了画面
    public function complete()
    {
        return view('reserve.complete');
    }
}
