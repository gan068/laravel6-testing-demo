<?php

namespace Tests\Feature\Command;

use App\Services\ApiService;
use App\Services\MemberService;
use Tests\TestCase;

class MemberInfoTest extends TestCase
{

    /**
     * @test
     *
     * @return void
     */
    public function member_command_can_mock_api_service()
    {
        $mock_response = 'getMockMemberInfoByApi';
        $mock_api_service = $this->partialMock(ApiService::class);
        $mock_api_service->shouldReceive('getMemberInfoByApi')
            ->once()
            ->andReturn($mock_response);

        $this->artisan('member:info')
            ->expectsOutput($mock_response);
    }

    /**
     * @test
     *
     * @return void
     */
    public function member_command_can_mock_member_service()
    {
        $mock_response = 'getMockMemberInfo';
        $mock_member_service = $this->partialMock(MemberService::class);
        $mock_member_service->shouldReceive('getMemberInfo')
            ->once()
            ->andReturn($mock_response);

        $this->artisan('member:info')
            ->expectsOutput($mock_response);
    }
    /**
     * @test
     *
     * @return void
     */
    public function member_command_without_any_mock()
    {
        $expected_response = 'getMemberInfoByApi';
        $this->artisan('member:info')
            ->expectsOutput($expected_response);
    }
}
