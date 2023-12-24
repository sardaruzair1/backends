<?php

namespace Tests\Feature;

use App\Services\GroupByOwnersService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class GroupByOwnersServiceTest extends TestCase
{
   
    public function testGroupByOwners() {
        $files = [
            "insurance.txt" => "Company A",
            "letter.docx" => "Company A",
            "Contract.docx" => "Company B"
        ];

        $expectedResult = [
            "Company A" => ["insurance.txt", "letter.docx"],
            "Company B" => ["Contract.docx"]
        ];

        $result = GroupByOwnersService::groupByOwners($files);

        $this->assertEquals($expectedResult, $result);
    }
}
