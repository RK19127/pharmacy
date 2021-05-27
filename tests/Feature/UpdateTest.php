<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UpdateTest extends TestCase
{
	/**
	 * Welcome
	 *
	 * @return void
	 */
	public function testWelcomeWithError()
	{
		$response = $this->json('GET', '/update', []);

		$response->assertStatus(400);

	}

	/**
	 * Welcome
	 *
	 * @return void
	 */
	public function testWelcome()
	{
		$response = $this->json('GET', '/update', []);

		$response->assertStatus(200);

	}

	/**
	 * Overview
	 *
	 * @return void
	 */
	public function testOverviewWithError()
	{
		$response = $this->json('GET', '/update/overview', []);

		$response->assertStatus(400);

	}

	/**
	 * Overview
	 *
	 * @return void
	 */
	public function testOverview()
	{
		$response = $this->json('GET', '/update/overview', []);

		$response->assertStatus(200);

	}

	/**
	 * Database
	 *
	 * @return void
	 */
	public function testDatabaseWithError()
	{
		$response = $this->json('GET', '/update/database', []);

		$response->assertStatus(400);

	}

	/**
	 * Database
	 *
	 * @return void
	 */
	public function testDatabase()
	{
		$response = $this->json('GET', '/update/database', []);

		$response->assertStatus(200);

	}

	/**
	 * Finish
	 *
	 * @return void
	 */
	public function testFinishWithError()
	{
		$response = $this->json('GET', '/update/final', []);

		$response->assertStatus(400);

	}

	/**
	 * Finish
	 *
	 * @return void
	 */
	public function testFinish()
	{
		$response = $this->json('GET', '/update/final', []);

		$response->assertStatus(200);

	}

}
