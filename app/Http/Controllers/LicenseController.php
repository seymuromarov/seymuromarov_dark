<?php

namespace App\Http\Controllers;

use App\License;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LicenseController extends Controller
{
    public function check(Request $request)
    {

        $license = License::where("code", $request->code)->where('status', 0)->get();

        $count = count($license);

        if ($count == 0) {
            return response()->json([
                "success" => 0
            ]);
        } else {
            DB::table('licenses')->where("code", $request->code)
                ->update([
                    "status" => 1
                ]);
            return response()->json([
                "success" => 1,
            ]);
        }
    }
}
