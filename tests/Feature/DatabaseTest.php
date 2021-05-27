<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class DatabaseTest extends TestCase
{
	/**
	 * Database
	 *
	 * @return void
	 */
	public function testDatabaseWithError()
	{
		$response = $this->json('GET', '/install/database', []);

		$response->assertStatus(400);

	}

	/**
	 * Database
	 *
	 * @return void
	 */
	public function testDatabase()
	{
		$response = $this->json('GET', '/install/database', []);

		$response->assertStatus(200);

	}

}
