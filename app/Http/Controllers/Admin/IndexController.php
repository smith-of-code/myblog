<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return <<<php
    <h1>Точка входа для админа</h1>
    <p>текст</p>
    <a href="/">вернуться назад</a>
php;

    }

    public function test1()
    {
        return <<<php
    <h1>test1</h1>

php;

    }
    public function test2()
    {
        return <<<php
    <h1>test2</h1>

php;

    }
}
