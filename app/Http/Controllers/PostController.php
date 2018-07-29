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
        return view("post/index");
    }
    public function show(){
        return view("post/show",['title'=>'我的标题']);
    }
    // 创建文章
    public function create(){
        return view("post/create");
    }
    public function store(){
    }
    // 编辑文章
    public function edit(){
        return view(view("post/edit"));
    }
    public function update(){
    }
    public function delete(){
    }

}