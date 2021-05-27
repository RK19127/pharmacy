<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ToolsTest extends TestCase
{
	/**
	 * Discount
	 *
	 * @return void
	 */
	public function testDiscountWithError()
	{
		$response = $this->json('GET', '/tools/discount', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Discount
	 *
	 * @return void
	 */
	public function testDiscount()
	{
		$response = $this->json('GET', '/tools/discount', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Dsearch
	 *
	 * @return void
	 */
	public function testDsearchWithError()
	{
		$response = $this->json('GET', '/tools/dsearch', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Dsearch
	 *
	 * @return void
	 */
	public function testDsearch()
	{
		$response = $this->json('GET', '/tools/dsearch', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Note
	 *
	 * @return void
	 */
	public function testNoteWithError()
	{
		$response = $this->json('GET', '/tools/note', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Note
	 *
	 * @return void
	 */
	public function testNote()
	{
		$response = $this->json('GET', '/tools/note', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * NoteStore
	 *
	 * @return void
	 */
	public function testNoteStoreWithError()
	{
		$response = $this->json('POST', '/tools', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * NoteStore
	 *
	 * @return void
	 */
	public function testNoteStore()
	{
		$response = $this->json('POST', '/tools', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * NoteUpdate
	 *
	 * @return void
	 */
	public function testNoteUpdateWithError()
	{
		$response = $this->json('PUT', '/tools/note/{note}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * NoteUpdate
	 *
	 * @return void
	 */
	public function testNoteUpdate()
	{
		$response = $this->json('PUT', '/tools/note/{note}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * NoteUpdate
	 *
	 * @return void
	 */
	public function testNoteUpdateWithError()
	{
		$response = $this->json('PATCH', '/tools/note/{note}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * NoteUpdate
	 *
	 * @return void
	 */
	public function testNoteUpdate()
	{
		$response = $this->json('PATCH', '/tools/note/{note}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * NoteDestroy
	 *
	 * @return void
	 */
	public function testNoteDestroyWithError()
	{
		$response = $this->json('DELETE', '/tools/note/{note}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * NoteDestroy
	 *
	 * @return void
	 */
	public function testNoteDestroy()
	{
		$response = $this->json('DELETE', '/tools/note/{note}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

}
