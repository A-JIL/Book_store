<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public function checkPhonenum($Phonenum){
    	$user=User::all();
    	foreach ($user as $u) {
    		if($u->id==$Phonenum){
    			return true;
    		}
    	}
    }
}
