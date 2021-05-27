<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AnalysisTest extends TestCase
{
	/**
	 * Index
	 *
	 * @return void
	 */
	public function testIndexWithError()
	{
		$response = $this->json('GET', '/analysis', [], [
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
		$response = $this->json('GET', '/analysis', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Sales
	 *
	 * @return void
	 */
	public function testSalesWithError()
	{
		$response = $this->json('GET', '/analysis/sales', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Sales
	 *
	 * @return void
	 */
	public function testSales()
	{
		$response = $this->json('GET', '/analysis/sales', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Purchases
	 *
	 * @return void
	 */
	public function testPurchasesWithError()
	{
		$response = $this->json('GET', '/analysis/purchases', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Purchases
	 *
	 * @return void
	 */
	public function testPurchases()
	{
		$response = $this->json('GET', '/analysis/purchases', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Customers
	 *
	 * @return void
	 */
	public function testCustomersWithError()
	{
		$response = $this->json('GET', '/analysis/customers', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Customers
	 *
	 * @return void
	 */
	public function testCustomers()
	{
		$response = $this->json('GET', '/analysis/customers', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

}
