<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BackupTest extends TestCase
{
	/**
	 * BackupDownload
	 *
	 * @return void
	 */
	public function testBackupDownloadWithError()
	{
		$response = $this->json('GET', '/setting/backup/get/{filename}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * BackupDownload
	 *
	 * @return void
	 */
	public function testBackupDownload()
	{
		$response = $this->json('GET', '/setting/backup/get/{filename}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * Backup
	 *
	 * @return void
	 */
	public function testBackupWithError()
	{
		$response = $this->json('GET', '/setting/backup', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * Backup
	 *
	 * @return void
	 */
	public function testBackup()
	{
		$response = $this->json('GET', '/setting/backup', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * BackupStore
	 *
	 * @return void
	 */
	public function testBackupStoreWithError()
	{
		$response = $this->json('POST', '/setting', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * BackupStore
	 *
	 * @return void
	 */
	public function testBackupStore()
	{
		$response = $this->json('POST', '/setting', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

	/**
	 * BackupDestroy
	 *
	 * @return void
	 */
	public function testBackupDestroyWithError()
	{
		$response = $this->json('DELETE', '/setting/backups/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(400);

	}

	/**
	 * BackupDestroy
	 *
	 * @return void
	 */
	public function testBackupDestroy()
	{
		$response = $this->json('DELETE', '/setting/backups/{setting}', [], [
			'Authorization' => 'Bearer '
		]);

		$response->assertStatus(200);

	}

}
