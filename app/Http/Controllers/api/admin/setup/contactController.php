<?php

namespace App\Http\Controllers\api\admin\setup;

use App\contact;
use App\Http\Resources\contact\getContactResource;
use App\PDO\common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class contactController extends Controller
{
    use common;
    private $contact;

    public function index()
    {
        $this->contact = contact::orderBy('created_at', 'asc')->first();

        return new getContactResource($this->contact);
    }

    public function update(Request $r)
    {
        $rules = [
            'address' => 'required|min:6|max:100',
            'email' => 'required|email|max:30',
            'phone' => 'required|regex:/[0-9]/|max:16',
            'facebook' => 'url|max:50',
            'twitter' => 'url|max:50',
            'instagram' => 'url|max:50',
            'linkedin' => 'url|max:50',
            'pinterest' => 'url|max:50',
            'google_plus' => 'url|max:50',
        ];

        if ($error = self::validates($r->toArray(), $rules, [
            'phone.regex' => 'Phone Number Invalid'
        ])) {
            return $error;
        }

        $this->contact = contact::orderBy('created_at', 'asc')->first();

        $this->contact->update([
            'contact_address' => $r->address ? $r->address : $this->contact->contact_address,
            'contact_email' => $r->email ? $r->email : $this->contact->contact_email,
            'contact_phone' => $r->phone ? $r->phone : $this->contact->contact_phone,
            'contact_facebook' => $r->facebook ? $r->facebook : $this->contact->contact_facebook,
            'contact_twitter' => $r->twitter ? $r->twitter : $this->contact->contact_twitter,
            'contact_instagram' => $r->instagram ? $r->instagram : $this->contact->contact_instagram,
            'contact_linkedin' => $r->linkedin ? $r->linkedin : $this->contact->contact_linkedin,
            'contact_pinterest' => $r->pinterest ? $r->pinterest : $this->contact->contact_pinterest,
            'contact_google_plus' => $r->google_plus ? $r->google_plus : $this->contact->contact_google_plus,
        ]);

        return new getContactResource($this->contact);
    }
}
