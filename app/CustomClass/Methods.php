<?php
namespace App\CustomClass;
 
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\t_log;
use App\User;

class  Methods
{
    public static function get_path( $file)
    {
        //change here for path
        return public_path($file);
    }
    public static function img_enc_base64 ($filepath){  
        if (file_exists($filepath)){
    
            $filetype = pathinfo($filepath, PATHINFO_EXTENSION);
    
            if ($filetype==='svg'){
                $filetype .= '+xml';
            }
    
            $get_img = file_get_contents($filepath);
            return 'data:image/' . $filetype . ';base64,' . base64_encode($get_img );
        }
    }
}