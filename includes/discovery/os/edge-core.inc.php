<?php

if (!$os) {
    if (starts_with($sysObjectId, '.1.3.6.1.4.1.259.6.10.94')) {
        $os = 'edge-core';
    }
}
