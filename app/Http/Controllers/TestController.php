<?php

namespace App\Http\Controllers;

use App\Data\UserRegisteringData;

class TestController extends Controller
{
    public function test()
    {
//        $data = $data = new UserRegisteringData(
//            name: 12,
//            email: 'asdfasdf@gmail.com',
//            password: '1244',
//        );

        $data = UserRegisteringData::validate([
            'name' => 12,
            'email' => 'asdfasdf@gmail.com',
            'password' => '123456',
        ]);

        return 123;
    }
}
