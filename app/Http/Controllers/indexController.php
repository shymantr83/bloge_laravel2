<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\category;
use App\Models\comment;
use App\Models\post_media;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\validator;
//use validator;
class indexController extends Controller
{
//

    public function index()
    {
        $categories=category::get()->all();
        $posts= post::with( 'category','user','media')
            ->whereHas('category', function ($query) {
                $query->whereStatus(1);
            })
            ->whereHas('user', function ($query) {
                $query->whereStatus(1);
            })
            ->wherePostType('post')->whereStatus(1)->orderBy('id', 'desc')->paginate(5);
        return view('frontend/index',compact('posts','categories'));
    }
    // public function categories(){

    //     dd( $categories);
    //     return view('partial.frontend.header',compact(''));
    // }
    public function category($id){
        $categories=category::get()->all();
        $posts= post::with( 'category','user','media')
        ->whereCategory_id($id)
        ->whereHas('user', function ($query) {
            $query->whereStatus(1);
        })
        ->wherePostType('post')->whereStatus(1)->orderBy('id', 'desc')->paginate(5);
    return view('frontend.index',compact('posts','categories'));
    }
    public function post_show($id)
    {  $categories=category::get()->all();
        $post=post::with('category','user','comments','media','aproved_comments')->whereId($id)->first();
        if($post){
    return view('frontend.post',compact('post','categories'));
        }
        else
       return redirect()->back();
        }
public function Add_comment(Request $request,$slug)
{
//    dd($request);
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'comment'=>'required',
        'url'=>'nullable',
]);
       $post=post::whereSlug($slug)->wherePostType('post')->whereStatus(1)->first();

       if($post){
$user_id=Auth::check()?auth()->id():null;

           $data['name']=$request->name;
           $data['email']=$request->email;
            $data['comment']=$request->comment;
            $data['url']=$request->url;
            $data['ip_address']=$request->ip();
            $data['post_id']=$post->id;
            $data['user_id']=$user_id;
//           dd($data);
            comment::create($data);
            return redirect()->back()->with([
                'message'=>'comment Add successfully',
                'alert_type'=>'success'
            ]);
       }
       else{
           return redirect()->back()->with([
               'message'=>'Something is wrong',
               'alert_type'=>'danger'
           ]);
       }

   }

public function contact()
{ $categories=category::get()->all();
    return view('frontend.contact',compact('categories'));
}
public function do_contact(Request $request)
{
}
    public function show_page($slug)
    {$categories=category::get()->all();
        $page=post::with(['user','media']);
       $page=$page->whereSlug($slug);
        $page=$page->wherePostType('page')->whereStatus(1)->first();
//        dd($page);
        if($page)
            return view('frontend.page',compact('page','categories'));
        else
            return redirect()->route('frontend.index');
    }
}
