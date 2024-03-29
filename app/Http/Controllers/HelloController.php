<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

// global $head, $style, $body, $end;
// $head = '<html><head>';
// $style = <<<EOF
// <style>
//   body{ font-size:16px; color:#999; }
//   h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
// </style>
// EOF;

// $body = '</head><body>';
// $end = '</head><head>';
// function tag($tag, $txt){
//   return "<{$tag}>" . $txt  . "</{$tag}>";
// }

class HelloController extends Controller
{

  public function index(){
    return view('hello.index', ['message'=>'hello']);
  }
  // public function index(){
  //   $data = [
  //     ['name'=>'山田太郎', 'mail'=>'taro@yamada'],
  //     ['name'=>'田中はなこ', 'mail'=>'tanaka@hana'],
  //     ['name'=>'鈴木さちこ', 'mail'=>'suzu@sati']
  //   ];
  //   return view('hello.index', ['data'=>$data]);
  // }

  // public function index(){
  //   $data = ['one', 'two', 'three'];
  //   return view('hello.index', ['data'=>$data]);
  // }

  public function post(Request $request){

    return view('hello.index', ['msg'=>$request->msg]);
  }
  // public function index(Request $request, Response $response){
  //   $html = <<<EOF
  //   <html>
  //   <head>
  //   <title>Hello/Index</title>
  //   <style>
  //     body{ font-size:16px; color:#999; }
  //     h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
  //   </style>
  //   </head>
  //   <body>
  //     <h1>Hello</h1>
  //     <h3>Request</h3>
  //     <pre>{$request}</pre>
  //     <h3>Response</h3>
  //     <pre>{$response}</pre>
  //   </body>
  //   </html>
  //   EOF;

  //     $response->setContent($html);
  //     return $response;
  // }
  
  // public function __invoke() {
  //     return <<<EOF
  //   <html>
  //   <head>
  //   <title>Hello</title>
  //   <style>
  //     body{ font-size:16px; color:#999; }
  //     h1 { font-size:100pt; text-align:right; color:#eee; margin:-40px 0px -50px 0px;}
  //   </style>
  //   </head>
  //   <body>
  //     <h1>Single Action</h1>
  //     <p>シングルアクションコントローラー</p>
  //   </body>
  //   </html>
  //   EOF;
  // }
}


// class HelloController extends Controller
// {
//     //
//     public function index() {
//       global $head, $style, $body, $end;

//       $html = $head . tag('title', 'Hello/Index') .$style .
//               $body
//               . tag('h1', 'Index') .tag('p', 'this is Index Page')
//               . '<a href="/hello/other"> go to Other Page</a>'
//               . $end;
//       return $html;
//     }

//     public function other() {
//       global $head, $style, $body, $end;

//       $html = $head . tag('title', 'Hello/Other') .$style .
//               $body
//               . tag('h1', 'Other') .tag('p', 'this is Other Page')
//               . $end;
//       return $html;
//     }
// }
