<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;

class LicenseController extends Controller
{
    public function check(Request $request)
    {

        $license = License::where("code", $request->license)->where('status', 0)->get();

        $count = is_array($license) ? count($license) : 0;

        if ($count != 0) {
            return response()->json([
                "success" => 0
            ]);
        } else {
            License::where("code", $request->license)->update([
                "status" => 1
            ]);
            return response()->json([
                "success" => 1
            ]);
        }
    }
}
