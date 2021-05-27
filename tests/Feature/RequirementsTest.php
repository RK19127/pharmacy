<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class RequirementsTest extends TestCase
{
	/**
	 * Requirements
	 *
	 * @return void
	 */
	public function testRequirementsWithError()
	{
		$response = $this->json('GET', '/install/requirements', []);

		$response->assertStatus(400);

	}

	/**
	 * Requirements
	 *
	 * @return void
	 */
	public function testRequirements()
	{
		$response = $this->json('GET', '/install/requirements', []);

		$response->assertStatus(200);

	}

}
