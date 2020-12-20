<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageCreated;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;
use MercurySeries\Flashy\Flashy;

class ContactsController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContactRequest $request)
    {
        $message = Message::create($request->only('name', 'email', 'message'));
        Mail::to(config('laracarte.admin_support_email'))->send(new ContactMessageCreated($message));
        Flashy::message('Nous vous répondrons dans les plus brefs délais!');
        return Redirect()->route('home');
    }
}
