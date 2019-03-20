<?php

namespace App\Http\Controllers\api\admin\setup;

use App\about;
use App\Http\Requests\api\admin\setup\aboutRequest;
use App\Http\Resources\about\getAboutResource;
use App\Http\Resources\about\icoAboutResource;
use App\Http\Resources\about\imgAboutResource;
use App\Http\Resources\about\updateAboutResource;
use App\PDO\common;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class aboutController extends Controller
{
    use common;

    private $about;

    public function index()
    {
        $this->setData();
        return new getAboutResource($this->about);
    }

    public function update(Request $r)
    {
        $rules = [
            'company_name' => 'min:3|max:50',
            'quote' => 'min:6|max:60',
            'short_info' => 'min:10|max:191',
            'history' => 'min:10|max:1500',
            'intro' => 'min:10|max:1500',
            'vision' => 'min:10|max:1500',
            'mission' => 'min:10|max:1500',
        ];

        if ($error = self::validates($r->toArray(), $rules, [])) {
            return $error;
        }

        $this->setData();

        $this->about->update([
//            'company_img' => $r->img ? $r->img : $this->about->company_img,
//            'company_logo' => $r->logo ? $r->logo : $this->about->company_logo,
            'company_name' => $r->company_name ? $r->company_name : $this->about->company_name,
            'company_quote' => $r->quote ? $r->quote : $this->about->company_quote,
            'company_short_info' => $r->short_info ? $r->short_info : $this->about->company_short_info,
            'company_history' => $r->history ? $r->history : $this->about->company_history,
            'company_intro' => $r->intro ? $r->intro : $this->about->company_intro,
            'company_vision' => $r->vision ? $r->vision : $this->about->company_vision,
            'company_mission' => $r->mission ? $r->mission : $this->about->company_mission
        ]);

        return new updateAboutResource($this->about);
    }

    public function img(Request $r)
    {
        $rules = [
            'img' => 'required|mimes:jpeg,jpg,png | max:500'
        ];

        if ($error = self::validates($r->toArray(), $rules, [])) {
            return $error;
        }
        $this->setData();
        $this->about->update([
            'company_img' => $r->img ? $r->img : $this->about->company_img,
        ]);
        return new imgAboutResource($this->about);
    }

    public function logo(Request $r)
    {
        $rules = [
            'logo' => 'required|image|max:100'
        ];

        if ($error = self::validates($r->toArray(), $rules, [])) {
            return $error;
        }
        $this->setData();
        $this->about->update([
            'company_logo' => $r->logo ? $r->logo : $this->about->company_logo,
        ]);
        return new icoAboutResource($this->about);
    }

    private function setData()
    {
        return $this->about = about::orderBy('created_at', 'asc')->first();

    }
}
