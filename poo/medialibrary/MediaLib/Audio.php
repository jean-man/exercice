<?php

namespace MediaLib;


class Audio extends Media
{

    use Autoplay;

    /** @var bool $controls */
    private $controls;

    public function getHtml(): string
    {
        return "Audio HTML";
    }

    /**
     * @return bool
     */
    public function isControls(): bool
    {
        return $this->controls;
    }

    /**
     * @param bool $controls
     * @return Audio
     */
    public function setControls(bool $controls): Audio
    {
        $this->controls = $controls;
        return $this;
    }
}