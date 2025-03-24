<?php
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase {

    public function test_soma_simples() {
        $this->assertEquals(4, 2 + 2);
    }

    public function test_plugin_esta_ativo() {
        $this->assertTrue(true, 'O plugin deve estar ativo.');
    }
}