<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Http;

class MyController extends Controller
{
    public function index()
    {
        $name="this is abdur rahim";
        // return view("myview",["name"=>$name]);
        return view("myview",compact("name"));
    }

    public function getHi(Request $request, $name="John Smith")
    {
        $geet  = $name;
        $abc= $request->all();
        return view("myview",compact("geet","abc"));
    }

    public function getWeatherDetails($name)
    {
        $weatherDetails = Http::get("https://wttr.in/${name}?format=j1")->json();
        $temperature = $weatherDetails["current_condition"][0]['temp_C'];
        $weatherSituation = $weatherDetails['current_condition'][0]['weatherDesc'][0]['value'];
        return view('lc',compact('name','temperature','weatherSituation'));
    }

    public function getData()
    {
        return view('form');
    }

    public function postData(Request $request)
    {
        $data = $request->input('name');
        return $data;
    }

    ////Parameters and Dependency Injection
    public function getParams(Request $request, int $id)
    {
        $data = $request->all();
        return 'User '.$id;
    }

    public function getPost(string $postId, string $commentId)
    {
        return $postId.''.$commentId;
    }

    public function getUserName(?string $name=null)
    {
        if($name)
        {
            return 'User Name '.$name;
        } else {
            return 'Not Found ';
        }
    }

    public function show()
    {
        //Name route mainly used to generating a url
        $url = route('profile');
        return $url;
    }

    public function show1()
    {
        $url = route('test', ['id'=> 1, 'photos'=>'yes']);
        return $url;
    }

    public function myTry()
    {
        return 'this from controller structure';
    }
}
