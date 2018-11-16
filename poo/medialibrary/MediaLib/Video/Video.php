<?php

namespace MediaLib\Video;

use MediaLib\Autoplay;
use MediaLib\Media;

abstract class Video extends Media
{

    use Autoplay;

    /** @var int $frameBorder */
    private $frameBorder;
    /** @var bool $allowFullscreen */
    private $allowFullscreen;

    public abstract function getCode(): string;

    /**
     * @return int
     */
    public function getFrameBorder(): int
    {
        return $this->frameBorder;
    }

    /**
     * @param int $frameBorder
     * @return Video
     */
    public function setFrameBorder(int $frameBorder): Video
    {
        $this->frameBorder = $frameBorder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowFullscreen(): bool
    {
        return $this->allowFullscreen;
    }

    /**
     * @param bool $allowFullscreen
     * @return Video
     */
    public function setAllowFullscreen(bool $allowFullscreen): Video
    {
        $this->allowFullscreen = $allowFullscreen;
        return $this;
    }

}