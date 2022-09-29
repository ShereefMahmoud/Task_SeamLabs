<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class partOneController extends Controller
{
    //
    public function countNumbers(int $startNumber, int $endNumber){
        if($startNumber < $endNumber ){
            $count = 0;
            for ($i = $startNumber ; $i <= $endNumber ; $i++){
                $i = (string)$i ;
                if(substr_count($i,'5') == 0){
                    $count++;
                }
                $i = (int)$i ;
            }

            return $count ;
        }else{
            return "Statr Number Should be Smaller Than End Numbers";
        }
    }

    public function IndexOfString(string $input_string){
        $input_string = str_split(strtoupper(stripcslashes(trim($input_string))),1);
        $sizeOfArray =count($input_string);

        switch ($sizeOfArray){

            case $sizeOfArray==1:
                $output = ord($input_string[0])-64;
                break;

            case $sizeOfArray==2:

                $output = ((ord($input_string[0])-64)*26)+(ord($input_string[1])-64) ;
                break;

            case $sizeOfArray==3:
                $output = ((ord($input_string[0])-64)*26*26)+((ord($input_string[1])-64)*26)+(ord($input_string[2])-64);
                break;

            default:
                return "You Should Enter 3 Char Only" ;
        }

        return $output ;
    }
}
