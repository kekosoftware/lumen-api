<?php

use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class PlayerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $this->get('api/v1/players')
        ->seeStatusCode(200)
        ->seeJsonStructure([
            '*' => [
                'id',
                'name',
                'age',
                'nationality',
                'club',
                'gender',
                'created_at',
                'updated_at',
            ]
        ]);
    }
}
