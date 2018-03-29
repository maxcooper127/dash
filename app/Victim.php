<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Victim extends Model
{
    public function worker()
    {
        return $this->$this->belongsTo(Worker::class);
    }

    public function country()
    {
        $res = file_get_contents('https://www.iplocate.io/api/lookup/'.$this->ip);


        $res = json_decode($res, true);

        return $res['country'];
    }


    public function flag()
    {
        $res = file_get_contents('https://www.iplocate.io/api/lookup/'.$this->ip);


        $res = json_decode($res, true);

        return strtolower($res['country_code']);
    }



}
