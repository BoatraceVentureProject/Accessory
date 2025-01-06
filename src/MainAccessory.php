<?php

declare(strict_types=1);

namespace Boatrace\Sakura;

/**
 * @author shimomo
 */
class MainAccessory
{
    /**
     * @param  int          $stadiumId
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $stadiumId, int $raceNumber, ?string $date = null): array
    {
        return Accessory::getInstance(
            sprintf('Stadium%02d', $stadiumId)
        )->times($raceNumber, $date);
    }

    /**
     * @param  int          $stadiumId
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function comments(int $stadiumId, int $raceNumber, ?string $date = null): array
    {
        $name = sprintf('Stadium%02d', $stadiumId);
        $arguments = [$raceNumber, $date];
        return Accessory::getInstance($name)->comments(...$arguments);
    }
}
