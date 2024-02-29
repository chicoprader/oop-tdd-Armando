<?php

namespace App;

class Ajax {

    private $url;
    private $successCallback;

    public function __construct(array $options)
    {
        if (!isset($options['url'])) {
            throw new \InvalidArgumentException('The "url" option is required.');
        }

        $this->url = $options['url'];
        $this->successCallback = $options['success'] ?? null;
    }

    public static function create(array $items)
    {
        return new self($items);
    }

    public function getData()
    {
        $json = $this->fetchDataFromUrl($this->url);

        if (is_callable($this->successCallback)) {
            call_user_func($this->successCallback, $json);
        }

        return $json;
    }

    private function fetchDataFromUrl($url)
    {
        $data = file_get_contents($url);
        var_dump($data);

        if ($data === false) {
            throw new \RuntimeException('Failed to fetch data from the URL.');
        }

        return json_decode($data, true);
}

}
