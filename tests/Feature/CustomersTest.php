<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CustomersTest extends TestCase
{
	/**
	 * Pdf
	 *
	 * @return void
	 */
	public function testPdfWithError()
	{
		$response = $this->json('GET', '/customers/pdf/{customers}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Pdf
	 *
	 * @return void
	 */
	public function testPdf()
	{
		$response = $this->json('GET', '/customers/pdf/{customers}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Index
	 *
	 * @return void
	 */
	public function testIndexWithError()
	{
		$response = $this->json('GET', '/customers', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Index
	 *
	 * @return void
	 */
	public function testIndex()
	{
		$response = $this->json('GET', '/customers', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Create
	 *
	 * @return void
	 */
	public function testCreateWithError()
	{
		$response = $this->json('GET', '/customers/create', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Create
	 *
	 * @return void
	 */
	public function testCreate()
	{
		$response = $this->json('GET', '/customers/create', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Store
	 *
	 * @return void
	 */
	public function testStoreWithError()
	{
		$response = $this->json('POST', '/customers', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Store
	 *
	 * @return void
	 */
	public function testStore()
	{
		$response = $this->json('POST', '/customers', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Show
	 *
	 * @return void
	 */
	public function testShowWithError()
	{
		$response = $this->json('GET', '/customers/{customer}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Show
	 *
	 * @return void
	 */
	public function testShow()
	{
		$response = $this->json('GET', '/customers/{customer}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Edit
	 *
	 * @return void
	 */
	public function testEditWithError()
	{
		$response = $this->json('GET', '/customers/{customer}/edit', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Edit
	 *
	 * @return void
	 */
	public function testEdit()
	{
		$response = $this->json('GET', '/customers/{customer}/edit', [], [
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
		$response = $this->json('PUT', '/customers/{customer}', [], [
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
		$response = $this->json('PUT', '/customers/{customer}', [], [
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
		$response = $this->json('PATCH', '/customers/{customer}', [], [
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
		$response = $this->json('PATCH', '/customers/{customer}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Destroy
	 *
	 * @return void
	 */
	public function testDestroyWithError()
	{
		$response = $this->json('DELETE', '/customers/{customer}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Destroy
	 *
	 * @return void
	 */
	public function testDestroy()
	{
		$response = $this->json('DELETE', '/customers/{customer}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Search
	 *
	 * @return void
	 */
	public function testSearchWithError()
	{
		$response = $this->json('POST', '/customers/search', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Search
	 *
	 * @return void
	 */
	public function testSearch()
	{
		$response = $this->json('POST', '/customers/search', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

}
