<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\userbook;
use Illuminate\support\facades\validator;
class StudViewController extends Controller {

public function index(Request $request){

$books = DB::select('select * from books where id IN (6, 30, 9, 12)' );
return view('welcome',['books'=>$books]);
$request->route('id');


}
    public function getPosts(Request $request , $id)
{
    
    $books = DB::select('select * from books  where id' );
return view('posts',['books'=>$books]);
}


public function create(){

    return view('userbook');
}


public function store(Request $request){

    $validator = Validator::make($request->all(),[

        'name'=>'required|max:100',
        'namebook'=>'required|max:100',
        'price'=>'required|numaric',
        'des'=>'required|max:250',

    ]);
    if($validator->fails()){
        return $validator->errors();
    };
    userbook::create([

        'name'=> $request->name ,
        'namebook'=>$request->namebook ,
        'price'=> $request->price ,
        'des'=>$request->des ,
      
       
    ]);
    return 'saved';
    
}
















public function show(){
    $books = DB::select('select * from books ' );

    return view('show',['books'=>$books]);
}
public function a(){
    $books = DB::select('select * from books where typebook="الاقتصاد والأعمال"' );

    return view('a',['books'=>$books]);
}
public function s(){
    $books = DB::select('select * from books where typebook="الكتب السياسية "' );

    return view('a',['books'=>$books]);
}
public function g(){
    $books = DB::select('select * from books where typebook="التاريخ والجغرافيا "' );

    return view('a',['books'=>$books]);
}
}
