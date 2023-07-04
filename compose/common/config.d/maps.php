<?php
$map_latitude = '-7.169894184970272';
$map_longitude = '-36.771712633496584';
$map_zoom = '7';

return [
    'maps.includeGoogleLayers' => true,
    'maps.center' => array($map_latitude, $map_longitude),
    'maps.zoom.default' => $map_zoom,
];