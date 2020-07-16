<?php

namespace App\Console\Commands;

use App\Services\ApiService;
use App\Services\MemberService;
use Illuminate\Console\Command;

class MemberInfo extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'member:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'get member info';

    protected $memberService;
    protected $apiService;

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(MemberService $memberService)
    {
        $this->memberService = $memberService;
        $info = $this->memberService->getMemberInfo();
        $this->line($info);
    }
}
