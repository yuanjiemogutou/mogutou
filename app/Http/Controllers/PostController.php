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
    public function index(){
        return view("post/index");
    }
    public function show(){
        return view("post/show");
    }
    public function create(){
        return view("post/create");
    }
    public function store(){
    }
    public function edit(){
    }
    public function update(){
    }
    public function delete(){
    }

}