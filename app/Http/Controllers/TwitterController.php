<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;//add
use Illuminate\Http\Request;
use Laravel\Socialite\Contracts\Factory as Socialite;//add

class TwitterController extends Controller {

    /**
     * @var Socialite
     */
    protected $socialite;
 
    public function __construct(Socialite $socialite)
    {
        $this->socialite = $socialite;
    }
 
    public function getLogin()
    {
        return $this->socialite->driver('twitter')->redirect();
    }
 
    public function getCallback()
    {
    	//ユーザ情報の取得
        $userData = $this->socialite->driver('twitter')->user();

        // 取得したユーザ情報一覧表示(debug用)
        // dd($userData);

        // ユーザ情報をモデルに格納
        // $user = User::firstOrCreate([
        // 		'user_id' => $userData->id,
        // 		'user_name' => $userData->name,
        // 		'nick_name' => $userData->nickname,
        // 		'email' => $userData->email,
        // 		'avatar' => $userData->avatar,
        // ]);

        //認証
        // Auth::login($user);
        return redirect('home');
    }

}
