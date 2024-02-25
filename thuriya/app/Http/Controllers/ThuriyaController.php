<?php

namespace App\Http\Controllers;

use App\Models\thuriya;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ThuriyaController extends Controller
{
 public function main(){
    return view('main');
 }
 public function home(){

    $data = thuriya::when(request('searchKey') , function ($query){
        $key = request('searchKey');
        $query->orWhere('title','like','%'.$key.'%')
            ->orWhere('description','like','%'.$key.'%')
            ->orWhere('name','like','%'.$key.'%');
    })->
    orderBy('created_at','desc')->paginate(3);
    // $data1 = ['status'=> $status];
    // dd($data);
    return view('create',compact('data'));
 }
 public function create(Request $request){
    $data =  $this->getCreateData($request);
    if($request->hasFile('image')){
        $fileName = uniqid() .$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$fileName);
        $data['image'] = $fileName;
    }
    $this->validation($request,'create');
    thuriya::create($data);
    return redirect('main/home')->with('status' , 'create');
 }
 public function delete($id){
    thuriya::where('id', $id)->delete();
    return redirect()->route('main#home')->with('status' , 'delete');
 }
 public function update($id){
    $data = thuriya::where('id', $id)->get();
    return view('update',compact('data'));
 }
 public function updateData(Request $request){
    $this->validation($request,'update');
    $oldImageName = thuriya::select('image')->where('id',$request->id)->get()->first()->toArray();

    Storage::delete('public/'.$oldImageName['image']);
    $data = thuriya::find($request->id);
    $data->name = $request->name;
    $data->title = $request->title;
    $data->description = $request->description;
    $data->image = $request->image;
    if($request->hasFile('image')){
        $fileName = uniqid() .$request->file('image')->getClientOriginalName();
        $request->file('image')->storeAs('public',$fileName);
        $data['image'] = $fileName;
    }
    $data->save();
    return redirect()->route('main#home')->with('status' , 'update');

 }
 public function seeMore($id){
    $data = thuriya::where('id', $id)->get();
    return view('seeMore',compact('data'));
 }
public function admin(){
    return view('admin');
}
  //the belows are the private function
 private function getCreateData ($request){
    $data = [
        'name' => $request->name,
        'title' =>$request->title,
        'description' => $request->description,
    ];
    return $data;
 }
 private function validation ($request, $status){
    $messages = [
        'name.required' => "name is necessary" ,
        'title.required' => "why don't you fill in the title" ,
        'description.required' => "tell us about your story" ,
        'image.required' => 'image is necessary' ,
        'name.unique' => "this name already exist" ,
        'title.unique' => "this title already exist" ,
        'description.unique' => "this description already exist" ,
    ];
    if($status == 'create'){
        $request->validate([
            'name' => 'required|string|max:255|unique:thuriyas,name',
            'title' => 'required|string|max:255|unique:thuriyas,title',
            'description' => 'required|string|min:8|max:2000|unique:thuriyas,description',
            'image' =>'required|image'
        ],$messages);
    }
    elseif($status == 'update') {
        $request->validate([
            'name' => 'required|string|max:255|unique:thuriyas,name,'.$request->id,
            'title' => 'required|string|max:255|unique:thuriyas,title,'.$request->id,
            'description' => 'required|string|min:8|max:2000|unique:thuriyas,description,'.$request->id,
        ],$messages);
    }
    return $request ;

}

}

