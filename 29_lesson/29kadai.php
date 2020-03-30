<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Profiles;

class ProfileController extends Controller
{
    //追記
    public function add()
    {
      return view("admin.profile.create");
    }

    public function create(Request $request)
    {

#php laravel 15 課題追記　開始
$this->validate($request, Profiles::$rules);

      $news = new Profiles;
      $form = $request->all();

      // フォームから送信されてきた_tokenを削除する
      unset($form['_token']);
      // フォームから送信されてきたimageを削除する
      unset($form['image']);

      // データベースに保存する
      $news->fill($form);
      $news->save();
#php laravel 15 課題　終了

      return redirect("admin/profile/create");
    }

    public function edit()
    {
      return view("admin.profile.edit");
    }

    public function update()
    {
      return redirect("admin/profile/edit");
    }
}
?>
