<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{
   
    public function testHello(): void
    {
        $this->view('/login') -> assertSeeText("sihadir");
    }
}
