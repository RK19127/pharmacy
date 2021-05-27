<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FinalTest extends TestCase
{
	/**
	 * Finish
	 *
	 * @return void
	 */
	public function testFinishWithError()
	{
		$response = $this->json('GET', '/install/final', []);

		$response->assertStatus(400);

	}

	/**
	 * Finish
	 *
	 * @return void
	 */
	public function testFinish()
	{
		$response = $this->json('GET', '/install/final', []);

		$response->assertStatus(200);

	}

}
