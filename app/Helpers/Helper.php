<?php
function isRequestMatchUrl($url, $returnValue)
{
    if (request()->fullUrl() == $url)
        return $returnValue;

    return null;
}
