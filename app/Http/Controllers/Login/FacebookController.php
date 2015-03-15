<?php namespace App\Http\Controllers\Login;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;//add
use App\Http\Controllers\Auth;//add
use Illuminate\Http\Request;
use Laravel\Socialite\Contracts\Factory as Socialite;//add


class FacebookController extends Controller {

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
        return $this->socialite->driver('facebook')->redirect();
    }

    public function getCallback()
    {
    	//ユーザ情報の取得
        $userData = $this->socialite->driver('facebook')->user();

        // 取得したユーザ情報一覧表示(debug用)
        // dd($userData);

        // ユーザ情報をモデルに格納
        // $user = User::firstOrCreate([
        // 		'id' => $userData->id,
        // 		'name' => $userData->name,
        // 		'email' => $userData->email,
        		// 'avatar' => $userData->avatar,
        // ]);

        //認証
        // Auth::login($user);
        return redirect('home');
    }
}
