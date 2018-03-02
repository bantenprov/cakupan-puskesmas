<?php namespace Bantenprov\CakupanPuskesmas\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * The CakupanPuskesmas facade.
 *
 * @package Bantenprov\CakupanPuskesmas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CakupanPuskesmas extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'cakupan-puskesmas';
    }
}
