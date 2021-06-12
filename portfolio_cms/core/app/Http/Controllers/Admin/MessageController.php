<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Message;
use Session;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(){

        $messages = Message::orderBy('id', 'desc')->get();

        return view('admin.message.index', compact('messages'));
    }

    public function view($id){

        $message = Message::findOrFail($id);

        return view('admin.message.view', compact('message'));
    }
    public function delete($id){

        $message = Message::findOrFail($id);
        $message->delete();

        Session::flash('success', 'Message Deleted Successfully');
        return redirect()->back();
    }
    public function deleteall(){


        $messages = Message::all();

        foreach($messages as $data){
            $data->delete();
        }

        Session::flash('success', 'Message Deleted Successfully');
        return redirect()->back();
    }

}
