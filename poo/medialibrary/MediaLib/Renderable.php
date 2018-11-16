<?php

namespace MediaLib;


interface Renderable
{

    public function getHtml(): string;
    public function render(): void;

}