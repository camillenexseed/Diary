<?php

namespace App\Http\Controllers;

use App\Diary; // App/Diaryクラスを使用する宣言
use Illuminate\Http\Request;

class DiaryController extends Controller
{
    // 追加
    public function index()
    {
        // return 'Hello World';

        //diariesテーブルのデータを全件取得
        //useしてるDiaryのallメソッドを実施
        //all()はテーブルのデータを全て取得するメソッド
        $diaries = Diary::all();

        dd($diaries);  //var_dump()とdie()を合わせたメソッド。変数の確認 + 処理のストップ
    }
}
