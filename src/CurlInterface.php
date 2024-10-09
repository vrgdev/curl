<?php

namespace VrgDev\Curl;

interface CurlInterface
{
    public function __construct();

    public function init(): void;

    public function setOpt(int $option, mixed $value): void;

    public function setOptArray(array $options): void;

    public function exec(): string;

    public function getInfo(?int $option): array|string;

    public function errno(): int;

    public function error(): string;

    public function reset(): void;

    public function __destruct();
}
