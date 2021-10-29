<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;

class ShortLinkController extends Controller
{
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'url' => ['required', 'url'],
        ]);
        
        if($validator->fails()){
            return response(['status' => false, 'errors' => $validator->errors()], 400)->withHeaders(['Content-Type' => ['application/json']]); 
        }
        
        $shortLink = ShortLink::where('link', request('url'))->first();
        
        if (!$shortLink) {
            $unique = false;
            while (!$unique) {
                $code = Str::random(6);
                if (!ShortLink::where('code', $code)->exists()) {
                    $unique = true;    
                }
            }
            $shortLink = ShortLink::create([
                'link' => request('url'),
                'code' => $code,
            ]);
        }

        return response(['status' => true, 'shortLink' => $shortLink], 200)->withHeaders(['Content-Type' => ['application/json']]); 
    }

    public function redirectLink($code)
    {
        $shortLink = ShortLink::where('code', $code)->firstOrFail();

        return redirect($shortLink->link);
    }
}
