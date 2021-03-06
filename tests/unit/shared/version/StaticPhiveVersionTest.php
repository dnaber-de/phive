<?php declare(strict_types = 1);
namespace PharIo\Phive;

use PHPUnit\Framework\TestCase;

/**
 * @covers \PharIo\Phive\StaticPhiveVersion
 * @covers \PharIo\Phive\PhiveVersion
 */
class StaticPhiveVersionTest extends TestCase {
    public function testGetVersionString(): void {
        $version = new StaticPhiveVersion('4.2.1');

        $this->assertStringContainsString('4.2.1', $version->getVersionString());
    }

    public function testGetVersion(): void {
        $version = new StaticPhiveVersion('0.3.1');

        $this->assertSame('0.3.1', $version->getVersion());
    }
}
