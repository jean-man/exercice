<?php

namespace MediaLib;

class Picture extends Media
{

    /** @var string $alt */
    private $alt;

    public function getHtml(): string
    {
/*
        $tag = new Tag("img");
        $tag->addAttribute("src", "img.jpg");
        $tag->addAttribute("alt", "texte alternatif");
        $tag->render();
*/
        return '<img src="' . $this->getUrl() . '" alt="' . $this->getAlt() .'">';
    }

    /**
     * @return string
     */
    public function getAlt(): ?string
    {
        return $this->alt;
    }

    /**
     * @param string $alt
     * @return Picture
     */
    public function setAlt(string $alt): Picture
    {
        $this->alt = $alt;
        return $this;
    }

}