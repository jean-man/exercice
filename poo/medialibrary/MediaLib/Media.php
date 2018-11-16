<?php

namespace MediaLib;

abstract class Media implements Renderable
{

    /** @var string $url */
    private $url;

    /**
     * Media constructor.
     * @param string $url
     */
    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public function render(): void
    {
        echo $this->getHtml();
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return Media
     */
    public function setUrl(string $url): Media
    {
        $this->url = $url;
        return $this;
    }



}