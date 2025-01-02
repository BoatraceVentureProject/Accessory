<?php

declare(strict_types=1);

namespace Boatrace\Sakura\Stadiums;

/**
 * @author shimomo
 */
interface StadiumInterface
{
    /**
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return array
     */
    public function times(int $raceNumber, ?string $date = null): array;
}
