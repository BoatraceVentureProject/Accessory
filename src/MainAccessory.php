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
        $name = sprintf('Stadium%02d', $stadiumId);
        $callback = [Accessory::getInstance($name), 'times'];
        $arguments = [$raceNumber, $date];
        return call_user_func_array($callback, $arguments);
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
        $callback = [Accessory::getInstance($name), 'comments'];
        $arguments = [$raceNumber, $date];
        return call_user_func_array($callback, $arguments);
    }
}
