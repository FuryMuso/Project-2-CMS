<?php

use PHPUnit\Framework\TestCase;

require ('../functions.php');

class StackTest extends TestCase
{

    public function testfindSectionSuccess()
    {

        $caseid = 1;
        $casedata = [['id' => 1]];
        $section = findSection($caseid, $casedata);

        $this->assertTrue(is_array($section));
    }

    public function testfindSectionFailure()
    {

        $caseid = 2;
        $casedata = [['id' => 1]];
        $section = findSection($caseid, $casedata);

        $this->assertEmpty($section);
    }

    public function testfindSectionMalformed()
    {
        $this->expectException(TypeError::class);

        $caseid = 1;
        $casedata = 'mike has admirers';
        findSection($caseid, $casedata);

    }



}


