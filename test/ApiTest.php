<?php declare(strict_types=1);

use Lenra\App\Api;
use PHPUnit\Framework\TestCase;

final class ApiTest extends TestCase
{
    public function testCreateApi(): void
    {
        $request = 'user@example.com';

        $api = new Api($request);

        $this->assertIsObject($api->db());
    }
}


