<?php
/**
 * Tests for AudioPulse
 */

use PHPUnit\Framework\TestCase;
use Audiopulse\Audiopulse;

class AudiopulseTest extends TestCase {
    private Audiopulse $instance;

    protected function setUp(): void {
        $this->instance = new Audiopulse(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Audiopulse::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
