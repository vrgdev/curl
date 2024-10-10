<?php

namespace VrgDev\Curl;

class Curl
{
    private \CurlHandle $handle;

    public function __construct()
    {
        $this->init();
    }

    public function init(): void
    {
        $handle = curl_init();

        if ($handle === false) {
            throw new \Exception('Unable to initialize!');
        }

        $this->handle = $handle;
    }

    public function setOpt(int $option, mixed $value): void
    {
        $setOpt = curl_setopt($this->handle, $option, $value);

        if ($setOpt === false) {
            throw new \Exception('Unable to set option!');
        }
    }

    public function setOptArray(array $options): void
    {
        $setOpt = curl_setopt_array($this->handle, $options);

        if ($setOpt === false) {
            throw new \Exception('Unable to set options!');
        }
    }

    public function exec(): string
    {
        $response = curl_exec($this->handle);

        if ($response === false) {
            throw new \Exception('Unable to execute!');
        }

        return $response;
    }

    public function getInfo(?int $option = null): array|string
    {
        $info = curl_getinfo($this->handle, $option);

        if ($info === false) {
            throw new \Exception('Unable to get info!');
        }

        return $info;
    }

    public function errno(): int
    {
        return curl_errno($this->handle);
    }

    public function error(): string
    {
        return curl_error($this->handle);
    }

    public function reset(): void
    {
        curl_reset($this->handle);
    }

    public function __destruct()
    {
        curl_close($this->handle);
    }
}
