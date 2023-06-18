<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HelpController extends Controller
{
    protected function imageUploader($file)
    {
        $day = Carbon::now()->day;
        $month = Carbon::now()->month;
        $year = Carbon::now()->year;
        $imagePath = "/upload/image/products/{$year}/$month/$day/";
        $fileName = time() . "-" . $file->getClientOriginalName();

        $file->move(public_path($imagePath), $fileName);

        return "/upload/image/products/{$year}/$month/$day/" . $fileName;
    }
    public function getExcerptAttribute()
    {
        return str_limit(strip_tags($this->content),20);
    }
}
