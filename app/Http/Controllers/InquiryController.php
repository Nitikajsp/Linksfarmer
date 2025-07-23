<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyMail;

class InquiryController extends Controller
{
    public function submit(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'country' => 'required',
            'phone' => 'required',
            'website' => 'required|url',
            'message' => 'required',
        ]);

        $adminMailData = array_merge($data, [
            'from_name' => $data['name'],
            'mailaddress' => $data['email'],
            'subject' => 'New Inquiry from ' . $data['name'],
        ]);

        // ✅ Send mail to admin
        Mail::to('deepkanani@jspinfotech.com')->send(new MyMail($adminMailData));

        // ✅ Send confirmation mail to user
        $userMailData = array_merge($data, [
            'from_name' => 'Links Farmer',
            'mailaddress' => 'no-reply@linksfarmer.com',
            'subject' => 'Thanks for your inquiry!',
        ]);
        Mail::to($data['email'])->send(new MyMail($userMailData));

        return redirect()->route('thankyou');
    }
}
