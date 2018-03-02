<?php namespace Bantenprov\CakupanPuskesmas\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Bantenprov\CakupanPuskesmas\Facades\CakupanPuskesmas;
use Bantenprov\CakupanPuskesmas\Models\CakupanPuskesmasModel;

/**
 * The CakupanPuskesmasController class.
 *
 * @package Bantenprov\CakupanPuskesmas
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class CakupanPuskesmasController extends Controller
{
    public function demo()
    {
        return CakupanPuskesmas::welcome();
    }
}
