<?php


namespace App\Adaptors;

use App\Models\User;
//use SocialiteProviders\Manager\OAuth2\User as UserOAuth;
use Laravel\Socialite\Two\User as UserOAuth;
use tests\Mockery\Adapter\Phpunit\EmptyTestCase;

class Adaptor
{

    public function getUserBySocId(UserOAuth $user, string $socName){
        $userInSystem = User::query()
            ->where('id_in_soc',$user->id)
            ->where('type_auth', $socName)
            ->first();
        if (is_null($userInSystem)){
            $userInSystem = new User();
            $userInSystem->fill([
               'name' => !empty($user->getName())? $user->getName(): '',
               'email' => $user->email,
                'password' => '',
                'id_in_soc'=> !empty($user->getId())? $user->getId(): '',
                'type_auth'=>$socName,
                'avatar'=>!empty($user->getAvatar())? $user->getAvatar(): '',
            ]);
            $userInSystem->save();
        }
            return $userInSystem;
    }


}
