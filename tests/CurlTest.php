<?php

use PHPUnit\Framework\TestCase;
use VrgDev\Curl\Curl;

class CurlTest extends TestCase
{
    private Curl $curl;

    protected function setUp(): void
    {
        $this->curl = new Curl();
    }

    public function testInit(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->init();
    }

    public function testSetOpt(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->setOpt(CURLOPT_URL, 'https://example.com');
    }

    public function testSetOptArray(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->setOptArray([CURLOPT_URL => 'https://example.com']);
    }

    public function testExec(): void
    {
        $this->expectException(\Exception::class);

        $this->curl->exec();
    }

    public function testGetInfo(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->getInfo();

        $this->curl->getInfo(CURLINFO_EFFECTIVE_URL);
    }

    public function testErrno(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->errno();
    }

    public function testError(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->error();
    }

    public function testReset(): void
    {
        $this->expectNotToPerformAssertions();

        $this->curl->reset();
    }
}
