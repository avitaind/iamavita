<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Support\Facades\Mail;


use App\Http\Requests;
use App\Models\Entry;

class EntryController extends Controller
{
    //
    public function saveData(Request $request){

        $this->validate($request, [
            'name' =>  'required',
            'email' =>  'required',
            'url' =>  'required',
    
            ]);
     
        $entry = new Entry([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'url' => $request->get('url'),
        ]);

        $entry->save();

        // \Mail::send('emails.entry',
        // array(
        //     'name' => $request->get('name'),
         
        // ), function ($message) use ($request)
        // {
        //     $email = $request->input('email');
        //     $name = $request->input('name');
        //     $message->from('contact@avita-india.com','entry Ambassador Program');
        //     $message->to($email, $name)->subject('entry Ambassador Program');
        //     $message->to('avitaentryambassador@gmail.com', 'AVITA entry Ambassador Program');
        //     $message->replyTo('avitaentryambassador@gmail.com', 'AVITA entry Ambassador Program');
        //     $message->replyTo('contact@avita-india.com', 'AVITA INDIA');
        // });
     
        return redirect()->back()->with('message', 'Thank you for your submission. You shall receive a confirmation mail shortly!');

    }

     



}
