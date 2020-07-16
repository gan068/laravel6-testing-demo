<?php
namespace App\Services;

use Log;

class ApiService
{
    public function getMemberInfoByApi()
    {
        $class = __CLASS__;
        $function = __FUNCTION__;
        Log::info("{$class}@{$function}");
        return $function;
    }
}
