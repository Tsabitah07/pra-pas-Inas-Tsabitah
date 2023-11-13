<?php

namespace App\Models;

class About
{
    public static function all()
    {
        $about = new \stdClass();
        $about->id = 7;
        $about->nis = "05009";
        $about->nama = "Inas Tsabitah Dien";
        $about->kelas = "11 PPLG 2";
        $about->image = "image/profile.jpeg";

        return $about;
    }
}
