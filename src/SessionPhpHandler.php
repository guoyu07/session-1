<?php
/**
 * @author    jan huang <bboyjanhuang@gmail.com>
 * @copyright 2016
 *
 * @link      https://www.github.com/janhuang
 * @link      http://www.fast-d.cn/
 */

namespace FastD\Session;

/**
 * Class SessionPhpHandler
 *
 * @package FastD\Session
 */
class SessionPhpHandler extends SessionHandler
{
    /**
     * @param $savePath
     * @return mixed
     */
    public function open($savePath)
    {
        session_start();

        return true;
    }

    /**
     * @return mixed
     */
    public function close()
    {
        return true;
    }

    /**
     * @return mixed
     */
    public function destroy()
    {
        return true;
    }

    /**
     * @param $key
     * @param null $value
     * @return mixed
     */
    public function set($key, $value = null)
    {
        $_SESSION[$key] = $value;

        return true;
    }

    /**
     * @param null $key
     * @return mixed
     */
    public function get($key = null)
    {
        if (null === $key) {
            return $_SESSION;
        }

        return isset($_SESSION[$key]) ? $_SESSION[$key] : false;
    }

    /**
     * @return mixed
     */
    public function clear()
    {
        $_SESSION = [];

        return true;
    }
}