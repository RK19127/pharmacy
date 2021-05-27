<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class SettingTest extends TestCase
{
	/**
	 * Lt
	 *
	 * @return void
	 */
	public function testLtWithError()
	{
		$response = $this->json('GET', '/setting/lt', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Lt
	 *
	 * @return void
	 */
	public function testLt()
	{
		$response = $this->json('GET', '/setting/lt', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Printer
	 *
	 * @return void
	 */
	public function testPrinterWithError()
	{
		$response = $this->json('GET', '/setting/printer', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Printer
	 *
	 * @return void
	 */
	public function testPrinter()
	{
		$response = $this->json('GET', '/setting/printer', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Other
	 *
	 * @return void
	 */
	public function testOtherWithError()
	{
		$response = $this->json('GET', '/setting/other', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Other
	 *
	 * @return void
	 */
	public function testOther()
	{
		$response = $this->json('GET', '/setting/other', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * LtUpdate
	 *
	 * @return void
	 */
	public function testLtUpdateWithError()
	{
		$response = $this->json('PUT', '/setting/lt/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * LtUpdate
	 *
	 * @return void
	 */
	public function testLtUpdate()
	{
		$response = $this->json('PUT', '/setting/lt/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * LtUpdate
	 *
	 * @return void
	 */
	public function testLtUpdateWithError()
	{
		$response = $this->json('PATCH', '/setting/lt/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * LtUpdate
	 *
	 * @return void
	 */
	public function testLtUpdate()
	{
		$response = $this->json('PATCH', '/setting/lt/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * PrinterUpdate
	 *
	 * @return void
	 */
	public function testPrinterUpdateWithError()
	{
		$response = $this->json('PUT', '/setting/printer/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * PrinterUpdate
	 *
	 * @return void
	 */
	public function testPrinterUpdate()
	{
		$response = $this->json('PUT', '/setting/printer/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * PrinterUpdate
	 *
	 * @return void
	 */
	public function testPrinterUpdateWithError()
	{
		$response = $this->json('PATCH', '/setting/printer/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * PrinterUpdate
	 *
	 * @return void
	 */
	public function testPrinterUpdate()
	{
		$response = $this->json('PATCH', '/setting/printer/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * OtherUpdate
	 *
	 * @return void
	 */
	public function testOtherUpdateWithError()
	{
		$response = $this->json('PUT', '/setting/other/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * OtherUpdate
	 *
	 * @return void
	 */
	public function testOtherUpdate()
	{
		$response = $this->json('PUT', '/setting/other/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * OtherUpdate
	 *
	 * @return void
	 */
	public function testOtherUpdateWithError()
	{
		$response = $this->json('PATCH', '/setting/other/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * OtherUpdate
	 *
	 * @return void
	 */
	public function testOtherUpdate()
	{
		$response = $this->json('PATCH', '/setting/other/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

}
