<?php
namespace App\Http\Controllers;
use PDF;
use App\User;
use Illuminate\Http\Request;
class adminController extends Controller
{
    public function index(){
        $user = User::all();
        return view('admin.user', compact('user'));
    }
    public function delete($id){
        $user = User::find($id);
        $pdf = PDF::loadview('user-pdf', ['user'=>$user]);
        return $pdf->stream();
        //ddd($user);
    }
}
