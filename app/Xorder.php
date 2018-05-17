<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Xorder extends Model
{
    public $timestamps = false;
    
    public function save(array $options = [])
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
          $this->ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
          $this->ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (!empty($_SERVER['REMOTE_ADDR'])) {
          $this->ip = $_SERVER['REMOTE_ADDR'];
        }
        
        return parent::save($options);
    }
}
