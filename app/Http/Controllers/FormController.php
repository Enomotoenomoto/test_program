<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;   //Formモデルを使う

class FormController extends Controller
{
    public function postpage (Request $request){
    return view ('form');
    }

    public function savenew (Request $request){
		
		//新規でFormテーブル書き込み
		//title(タイトルを)をtitleカラムに、main（本文）をmainカラムに保存する
        $post = new Form;
		$post->title = $request->title;
		$post->main = $request->main;
		$post->save();
		
		return redirect('/index')
	}
	
	public function index (Request $request){
		
		/* $data = Form::all(); */
		//全投稿を新着順に1ページ、3つ取り出して表示する
		$data = Form::orderBy('created_at', 'desc')->paginate(3);
		
		return view('post')->with(['data' => $data]);
	}
	
	/* return redirect ('/create');  //その後、/createにリダイレクト
    } */
	
	//function show ( )の中にRequest, $requestではなく、「$id」なのは
	//今回はフォームに入力された値ではなく、URLの{ }の部分(パラメーター)を$id(変数)として受け取るので、($id)としています。
	public function show ($id){    
	
		$data = Form::where('id', $id)->first();
		
		return view('show')->with(['data' => $data]);
	}

    public function wys (){
    return view ('wysiwyg');
	}

}
