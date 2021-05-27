<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AccountTest extends TestCase
{
	/**
	 * Account
	 *
	 * @return void
	 */
	public function testAccountWithError()
	{
		$response = $this->json('GET', '/account', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Account
	 *
	 * @return void
	 */
	public function testAccount()
	{
		$response = $this->json('GET', '/account', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Update
	 *
	 * @return void
	 */
	public function testUpdateWithError()
	{
		$response = $this->json('POST', '/account', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Update
	 *
	 * @return void
	 */
	public function testUpdate()
	{
		$response = $this->json('POST', '/account', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

}
