<?php

namespace Vagrant\Geo\PackageGeoInterface;

/**
 * @package thereisnospoon/package-geo-interface v1.0
 */
interface GeoServiceInterface
{
    public function getIsoCode(): ?string;

    public function getCountry(): ?string;

    public function parse(string $ip): void;
}
