<?php

namespace TagGenerator;

use MediaLib\Renderable;

class Tag implements Renderable
{

    /** @var string $name */
    private $name;
    /** @var array $attributes */
    private $attributes;

    /**
     * Tag constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->setName($name);
    }

    public function getHtml(): string
    {
        $tag = "<" . $this->getName();
        foreach ($this->getAttributes() as $key => $attribute) {
            $tag .= " $key=\"$attribute\"";
        }
        $tag .= ">";

        return $tag;
    }

    public function render(): void
    {
        echo $this->getHtml();
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tag
     */
    public function setName(string $name): Tag
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return array
     */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    /**
     * @param array $attributes
     * @return Tag
     */
    public function setAttributes(array $attributes): Tag
    {
        $this->attributes = $attributes;
        return $this;
    }

    public function addAttribute(string $key, string $value): Tag
    {
        $this->attributes[$key] = $value;
        return $this;
    }

}