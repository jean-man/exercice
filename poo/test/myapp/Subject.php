<?php

namespace MyApp;


class Subject
{

    /** @var string $label */
    private $label;

    /**
     * Subject constructor.
     * @param string $label
     */
    public function __construct(string $label)
    {
        $this->label = $label;
    }

    /**
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }

    /**
     * @param string $label
     * @return Subject
     */
    public function setLabel(string $label): Subject
    {
        $this->label = $label;
        return $this;
    }

}
