<?php

namespace App\Http\Controllers;

use App\Models\Members;
use Illuminate\Http\Request;

class MembersController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $data = Members::where('code', 'like', '%' .$request->search. '%')
                ->orwhere('nama', 'like', '%' .$request->search. '%')->paginate(10);
        }else{
            $data = Members::paginate(10);
        }

        return view('Members',compact('data'),[
            "title" => "Members"
        ]);
    }

    public function tambahdata(){
        return view('tambahdata',[
            "title" => "tambahdata"
        ]);
    }

    public function insertdata(Request $request){
        Members::create($request->all());
        return redirect()->route('members');
    }
}
