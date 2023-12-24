<?php

namespace App\Services;

class GroupByOwnersService {
    public static function groupByOwners($files) {
        $result = [];

        foreach ($files as $file => $owner) {
            if (!isset($result[$owner])) {
                $result[$owner] = [];
            }

            $result[$owner][] = $file;
        }

        return $result;
    }
}
