<?php

namespace App\Config;

class CorsDomains
{
    public static function getDomains()
    {
        $domainsFinals = [];

        $listpredomain = [
            "portfolio.webprized.com"
        ];

        $patternDomain = [
            "https://",
            "http://",
            "https://www.",
            "http://www."
        ];

        foreach ($listpredomain as $domain) {
            foreach ($patternDomain as $patterts) {
                array_push($domainsFinals, $patterts . $domain);
            }
        }

        return $domainsFinals;
    }
}
