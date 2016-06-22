<?php
/**
 * @version   $Id: cache.class.php 61624 2016-01-05 17:46:05Z jakub $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2016 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 *
 *
 *
 * Original Author and Licence
 * @author    Mateusz 'MatheW' Wójcik, <mat.wojcik@gmail.com>
 * @link      http://mwojcik.pl
 * @version   1.0
 * @license   GPL
 */

require_once 'cacheDriver.interface.php';

/**
 * @throws CacheException
 */
class GantryCacheLib
{

	/**
	 * Array of driver strategies
	 *
	 * @var array
	 */
	protected $drivers = array();

	/**
	 * Name of default driver
	 *
	 * @var string
	 */
	protected $defaultDriver = 'NULL';

	/**
	 * Default cache lifetime in seconds
	 *
	 * @var int
	 */
	protected $defaultLifeTime = 300;

	/**
	 * Specifies if debug mode is on
	 *
	 * @var boolean
	 */
	protected $debugMode = false;

	/**
	 * Constructor
	 *
	 * @param int $defaultLifeTime Default cache lifetime in seconds
	 *
	 * @return void
	 */
	public function __construct($defaultLifeTime = 0)
	{
		if (is_numeric($defaultLifeTime) && $defaultLifeTime > 0) $this->defaultLifeTime = $defaultLifeTime;
	}

	/**
	 * Short description of method addDriver
	 *
	 * @param string      $name    Name of driver strategy
	 * @param CacheDriver $driver  Driver strategy
	 * @param boolean     $default Default strategy
	 *
	 * @return boolean
	 */
	public function addDriver($name, GantryCacheLibDriver &$driver, $default = TRUE)
	{
		if (isset($this->drivers[$name])) return false;

		$this->drivers[$name] = $driver;
		if ($default) $this->defaultDriver = $name;
		return true;
	}

	/**
	 * Gets driver strategy
	 *
	 * @param string $name Name of driver strategy
	 *
	 * @throws CacheException
	 * @return CacheDriver
	 */
	protected function getDriver($name = NULL)
	{
		if (empty($name) || !array_key_exists($name, $this->drivers)) $name = $this->defaultDriver; else return $this->drivers[$name];

		if (empty($name) || !array_key_exists($name, $this->drivers)) foreach ($this->drivers as $drvName => $driver) {
			return $this->drivers[$drvName];
		} else return $this->drivers[$name];
		throw new CacheException('No driver strategy set!');
	}

	/**
	 * Save data to cache
	 *
	 * @param string $groupName  Name of group of cache
	 * @param string $identifier Identifier of data - it should be unique in group
	 * @param mixed  $data       Data
	 * @param string $driver     Driver strategy
	 *
	 * @throws CacheException
	 * @return boolean
	 */
	public function set($groupName, $identifier, $data, $driver = NULL)
	{
		try {
			return $this->getDriver($driver)->set($groupName, $identifier, base64_encode(serialize($data)));
		} catch (CacheException $e) {
			if ($this->debugMode) throw $e; else return false;
		}
	}

	/**
	 * Gets data from cache
	 *
	 * @param string $groupName  Name of group
	 * @param string $identifier Identifier of data
	 * @param string $driver     Driver strategy
	 *
	 * @throws CacheException
	 * @return mixed
	 */
	public function get($groupName, $identifier, $driver = NULL)
	{
		try {
			$drv = $this->getDriver($driver);
			if (!$drv->exists($groupName, $identifier)) return false;
			$data = $drv->get($groupName, $identifier);
			if ($data === false) return false;
			if (base64_decode($data) !== false) {
				return unserialize(base64_decode($data));
			}
			return unserialize($data);
		} catch (CacheException $e) {
			if ($this->debugMode) throw $e; else return false;
		}
	}

	/**
	 * Clears all cache generated by this class with one/all drivers
	 *
	 * @param string $driver Name of driver strategy
	 *
	 * @return boolean
	 */
	public function clearAllCache($driver = NULL)
	{
		try {
			if (empty($driver) || !array_key_exists($driver, $this->drivers)) {
				foreach ($this->drivers as $drv) $drv->clearAllCache();
				return true;
			}
			return $this->drivers[$driver]->clearAllCache();
		} catch (CacheException $e) {
			if ($this->debugMode) throw $e; else return false;
		}
	}


	/**
	 * Sets the lifetime
	 *
	 * @param string $driver Name of driver strategy
	 *
	 * @return boolean
	 */
	public function setLifeTime($lifetime, $driver = NULL)
	{
		try {
			if (empty($driver) || !array_key_exists($driver, $this->drivers)) {
				foreach ($this->drivers as $drv) $drv->setLifeTime($lifetime);
				return true;
			}
			return $this->drivers[$driver]->setLifeTime($lifetime);
		} catch (CacheException $e) {
			if ($this->debugMode) throw $e; else return false;
		}
	}

	/**
	 * Clears cache of specified group  with one/all drivers
	 *
	 * @param string $groupName Name of group
	 * @param string $driver    Name of driver strategy
	 *
	 * @return boolean
	 */
	public function clearGroupCache($groupName, $driver = NULL)
	{
		try {
			if (empty($driver) || !array_key_exists($driver, $this->drivers)) {
				foreach ($this->drivers as $drv) $drv->clearGroupCache($groupName);
				return true;
			}
			return $this->drivers[$driver]->clearGroupCache($groupName);
		} catch (CacheException $e) {
			if ($this->debugMode) throw $e; else return false;
		}
	}

	/**
	 * Clears cache of specified identifier of group  with one/all drivers
	 *
	 * @param string $groupName  Name of group
	 * @param string $identifier Identifier
	 * @param string $driver     Name of driver strategy
	 *
	 * @return boolean
	 */
	public function clearCache($groupName, $identifier, $driver = NULL)
	{
		try {
			if (empty($driver) || !array_key_exists($driver, $this->drivers)) {
				foreach ($this->drivers as $drv) $drv->clearCache($groupName, $identifier);
				return true;
			}
			return $this->drivers[$driver]->clearCache($groupName, $identifier);
		} catch (CacheException $e) {
			if ($this->debugMode) throw $e; else return false;
		}
	}

	/**
	 * Turns debug mode on. Exceptions will be thrown
	 *
	 */
	public function debugModeOn()
	{
		$this->debugMode = true;
	}

	/**
	 * Turns debug mode off. No exceptions will be thrown
	 *
	 */
	public function debugModeOff()
	{
		$this->debugMode = false;
	}

} /* end of class Cache */

class CacheException extends Exception
{

}
