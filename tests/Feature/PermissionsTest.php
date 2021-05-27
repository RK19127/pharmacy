<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PermissionsTest extends TestCase
{
	/**
	 * Permissions
	 *
	 * @return void
	 */
	public function testPermissionsWithError()
	{
		$response = $this->json('GET', '/install/permissions', []);

		$response->assertStatus(400);

	}

	/**
	 * Permissions
	 *
	 * @return void
	 */
	public function testPermissions()
	{
		$response = $this->json('GET', '/install/permissions', []);

		$response->assertStatus(200);

	}

}
