<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EnvironmentTest extends TestCase
{
	/**
	 * EnvironmentMenu
	 *
	 * @return void
	 */
	public function testEnvironmentMenuWithError()
	{
		$response = $this->json('GET', '/install/environment', []);

		$response->assertStatus(400);

	}

	/**
	 * EnvironmentMenu
	 *
	 * @return void
	 */
	public function testEnvironmentMenu()
	{
		$response = $this->json('GET', '/install/environment', []);

		$response->assertStatus(200);

	}

	/**
	 * EnvironmentWizard
	 *
	 * @return void
	 */
	public function testEnvironmentWizardWithError()
	{
		$response = $this->json('GET', '/install/environment/wizard', []);

		$response->assertStatus(400);

	}

	/**
	 * EnvironmentWizard
	 *
	 * @return void
	 */
	public function testEnvironmentWizard()
	{
		$response = $this->json('GET', '/install/environment/wizard', []);

		$response->assertStatus(200);

	}

	/**
	 * SaveWizard
	 *
	 * @return void
	 */
	public function testSaveWizardWithError()
	{
		$response = $this->json('POST', '/install/environment/saveWizard', []);

		$response->assertStatus(400);

	}

	/**
	 * SaveWizard
	 *
	 * @return void
	 */
	public function testSaveWizard()
	{
		$response = $this->json('POST', '/install/environment/saveWizard', []);

		$response->assertStatus(200);

	}

	/**
	 * EnvironmentClassic
	 *
	 * @return void
	 */
	public function testEnvironmentClassicWithError()
	{
		$response = $this->json('GET', '/install/environment/classic', []);

		$response->assertStatus(400);

	}

	/**
	 * EnvironmentClassic
	 *
	 * @return void
	 */
	public function testEnvironmentClassic()
	{
		$response = $this->json('GET', '/install/environment/classic', []);

		$response->assertStatus(200);

	}

	/**
	 * SaveClassic
	 *
	 * @return void
	 */
	public function testSaveClassicWithError()
	{
		$response = $this->json('POST', '/install/environment/saveClassic', []);

		$response->assertStatus(400);

	}

	/**
	 * SaveClassic
	 *
	 * @return void
	 */
	public function testSaveClassic()
	{
		$response = $this->json('POST', '/install/environment/saveClassic', []);

		$response->assertStatus(200);

	}

}
