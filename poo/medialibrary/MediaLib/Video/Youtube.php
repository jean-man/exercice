<?php

namespace MediaLib\Video;


class Youtube extends Video
{

    public function getHtml(): string
    {
        return "Youtube HTML";
    }

    public function getCode(): string
    {
        $query = parse_url($this->getUrl(), PHP_URL_QUERY);
        parse_str($query, $params);
        return $params["v"];
    }
}