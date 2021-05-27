<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeTest extends TestCase
{
	/**
	 * Welcome
	 *
	 * @return void
	 */
	public function testWelcomeWithError()
	{
		$response = $this->json('GET', '/install', []);

		$response->assertStatus(400);

	}

	/**
	 * Welcome
	 *
	 * @return void
	 */
	public function testWelcome()
	{
		$response = $this->json('GET', '/install', []);

		$response->assertStatus(200);

	}

}
