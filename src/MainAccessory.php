<?php

declare(strict_types=1);

namespace Boatrace\Venture\Project;

use Illuminate\Support\Collection;

/**
 * @author shimomo
 */
class MainAccessory
{
    /**
     * @return void
     */
    public function __construct()
    {
        Collection::macro('recursive', fn() => $this->map(fn($value) =>
            is_array($value) || is_object($value)
                ? collect($value)->recursive()
                : $value
        ));
    }

    /**
     * @param  int          $stadiumId
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return \Illuminate\Support\Collection
     */
    public function times(int $stadiumId, int $raceNumber, ?string $date = null): Collection
    {
        return collect(Accessory::getInstance(
            sprintf('Stadium%02d', $stadiumId)
        )->times($raceNumber, $date))->recursive();
    }

    /**
     * @param  int          $stadiumId
     * @param  int          $raceNumber
     * @param  string|null  $date
     * @return \Illuminate\Support\Collection
     */
    public function comments(int $stadiumId, int $raceNumber, ?string $date = null): Collection
    {
        return collect(Accessory::getInstance(
            sprintf('Stadium%02d', $stadiumId)
        )->comments($raceNumber, $date))->recursive();
    }
}
