<?php

/**
 * @param float $val1
 * @param float $val2
 * @return float Résultat de la multiplication
 */
function multiplication(float $val1, float $val2) : float {
    echo "Fonction multiplication";
    $resultat = abs($val1 * $val2);
    return $resultat;
}

function recursive(int $val) : int {
    echo "val = $val<br>";
    if ($val > 10) {
        return $val;
    } else {
        return recursive($val * 2);
    }
}

function bonjour(string $pseudo = "toi") : string {
    return "Bonjour " . $pseudo;
}

/**
 * Permet de debugger une variable
 * @author Pierre Jehan
 * @param mixed $val La variable à debugger
 * @param bool $die Permet de stoper l'execution du code
 */
function debug($val, bool $die = false) : void {
    echo "<pre>";
    print_r($val);
    echo "</pre>";
    if ($die) {
        die;
    }
}

function moyenne(array $tab) : float {
    if (count($tab) === 0) {
        return 0;
    }
    return array_sum($tab) / count($tab);
}

function faFileIcon(string $filename) : string {
    $info = new SplFileInfo($filename);
    switch ($info->getExtension()) {
        case "pdf":
            return "fa-file-pdf-o";
        case "doc":
        case "docx":
            return "fa-file-word-o";
        default:
            return "fa-file-o";
    }
}

function displayFaFileIcon(string $filename, float $version = 4.7, array $tunning = []) : void {
    if ($version >= 5) {
        $class = "fas ";
    } else {
        $class = "fa ";
    }
    $class .= faFileIcon($filename);
    $class .= " " . implode(" ", $tunning);
    echo '<span class="' . $class . '"></span>';
}

function getUrl() : string {
    return (isset($_SERVER["https"]) ? "https" : "http") . "://" . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
}

/**
 * Display iframe player for YouTube or Vimeo
 * @param string $url Video URL
 * @param array $attributes Attributes list to add to the iframe tag
 */
function displayPlayer(string $url, array $attributes = []) : void {
    $video_url = null;

    // Default attributes values
    $attributes["height"] = isset($attributes["height"]) ? $attributes["height"] : 300;
    $attributes["width"] = isset($attributes["width"]) ? $attributes["width"] : 500;

    $host = parse_url($url, PHP_URL_HOST);
    switch ($host) {
        case "vimeo.com":
        case "www.vimeo.com":
            $video_id = ltrim(parse_url($url, PHP_URL_PATH), "/");
            $video_url = "https://player.vimeo.com/video/" . $video_id;
            break;
        case "youtube.com":
        case "www.youtube.com":
            $query = parse_url($url, PHP_URL_QUERY);
            parse_str($query, $params);
            $video_id = $params["v"];
            $video_url = "https://www.youtube.com/embed/" . $video_id;
            break;
        default:
            echo "Service vidéo non supporté !";
    }

    $html_attributes = "";
    foreach ($attributes as $key => $attribute) {
        if ($attribute !== false) {
            $html_attributes .= "$key=\"$attribute\"";
        }
    }
    echo '<iframe src="' . $video_url . '" ' . $html_attributes . '></iframe>';
}










