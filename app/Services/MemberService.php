<?php
namespace App\Services;

use Log;

class MemberService
{
    protected $apiService;
    public function __construct(ApiService $apiService)
    {
        $this->apiService = $apiService;
    }
    public function getMemberInfo()
    {
        $class = __CLASS__;
        $function = __FUNCTION__;
        Log::info("{$class}@{$function}");
        $result = $this->apiService->getMemberInfoByApi();
        return $result;
    }
}
