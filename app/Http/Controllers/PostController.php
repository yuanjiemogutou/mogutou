<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/24
 * Time: 15:00
 */
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostController extends Controller {
    // 文章列表
    public function index(){
        $posts = [
            ["title" => "我的标题一"],
            ["title" => "我的标题二"],
            ["title" => "我的标题三"],
            ["title" => "我的标题四"]
        ];
        $arr = ["a" => "11111111111","b" => "2222222222","c" => "33333333","d" => "44444444"];
        extract($arr);
        return view("post/index",compact('posts','a','b','c','d'));
    }
    public function show(){
        return view("post/show",['title'=>'我的标题一','isShow'=>false]);
    }
    // 创建文章
    public function create(){
        return view("post/create");
    }
    public function store(){
        return;
    }
    // 编辑文章
    public function edit(){
        return view(view("post/edit"));
    }
    public function update(){
        return;
    }
    public function delete(){
        return;
    }

}