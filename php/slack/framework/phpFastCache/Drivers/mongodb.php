<?php
/**
 *
 * This file is part of phpFastCache.
 *
 * @license MIT License (MIT)
 *
 * For full copyright and license information, please see the docs/CREDITS.txt file.
 *
 * @author Khoa Bui (khoaofgod)  <khoaofgod@gmail.com> http://www.phpfastcache.com
 * @author Georges.L (Geolim4)  <contact@geolim4.com>
 *
 */

namespace phpFastCache\Drivers;

use phpFastCache\Core\DriverAbstract;
use phpFastCache\Exceptions\phpFastCacheDriverException;

/**
 * Class mongodb
 * @package phpFastCache\Drivers
 */
class mongodb extends DriverAbstract
{
    /**
     * phpFastCache constructor.
     * @param array $config
     */
    public function __construct($config = array())
    {
        $this->setup($config);
        if (!$this->checkdriver() && !isset($config[ 'skipError' ])) {
            throw new phpFastCacheDriverException("Can't use this driver for your website!");
        }

    }

    /**
     * @return bool
     */
    public function checkdriver()
    {
        // return true;
        return false;
    }

    /**
     *
     */
    public function connectServer()
    {

    }

    /**
     * @param $keyword
     * @param string $value
     * @param int $time
     * @param array $option
     */
    public function driver_set($keyword, $value = '', $time = 300, $option = array())
    {
        if (isset($option[ 'skipExisting' ]) && $option[ 'skipExisting' ] == true) {
            // skip driver
        } else {
            // add driver
        }

    }

    /**
     * @param $keyword
     * @param array $option
     * @return null
     */
    public function driver_get($keyword, $option = array())
    {
        // return null if no caching
        // return value if in caching

        return null;
    }

    /**
     * @param $keyword
     * @param array $option
     */
    public function driver_delete($keyword, $option = array())
    {

    }

    /**
     * @param array $option
     * @return array
     */
    public function driver_stats($option = array())
    {
        $res = array(
          'info' => '',
          'size' => '',
          'data' => '',
        );

        return $res;
    }

    /**
     * @param array $option
     */
    public function driver_clean($option = array())
    {

    }

    /**
     * @param $keyword
     */
    public function driver_isExisting($keyword)
    {

    }
}