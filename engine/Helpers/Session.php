<?php

namespace Engine\Helpers;

class Session
{
    /**
     * Start the session if not already start.
     *
     * @return void
     */
    public function __construct()
    {
        //if (session_status() === PHP_SESSION_NONE) {
        // session_start();
        // }
    }


    public function StartSession()
    {
        session_start();
    }

    /**
     *Check if session is already set with specific name.
     *
     * @param $name (string) name of session e.g users
     *
     * @return boolean
     */
    public function Check($name)
    {

        return (isset($_SESSION[$name])) ?: false;

    }

    /**
     * Get the session value by providing session name.
     *
     * @param $name (string) name of session e.g users
     *
     * @return string
     */
    public function Get($name)
    {
        return ($this->Check($name) === true) ? $_SESSION[$name] : [];

    }

    /**
     * Set/store value in session.
     *
     * @param $params (array)
     * 'name' => name of session e.g users
     * 'value' => value store in session e.g user token
     *
     * @return string
     */
    public function Set($params)
    {
        if (is_array($params)) {
            foreach ($params as $key => $val) {
                $_SESSION[$key] = $val;
            }
        }

    }

    /**
     * Delete/unset the session.
     *
     * @param $name (string) name of session e.g users
     *
     * @return boolean
     */
    public function UnsetSession($name)
    {
        if ($this->Check($name) === true) {
            unset($_SESSION[$name]);

            return true;
        } else {
            return false;
        }
    }


    public function Session_Destroy()
    {
        session_destroy();
    }


    public function setFlash($data, $value = null)
    {

        if (is_array($data)) {
            foreach ($data as $key => &$value) {
                $_SESSION['flash'][$key] = $value;
            }

            return;
        }

        $_SESSION['flash'][$data] = $value;

    }
}