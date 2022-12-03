<?php


namespace Source\Core;

/**
 * Description of Session
 *
 * @author pedrojr
 */
class Session
{
    /**
     * @param $name
     * @return null
     */
    public function __construct()
    {
        if (!session_id()) {
            session_save_path('CONF_SES_PATH');
            session_start();
        }
    }
    
    /**
     * @param [type] $name
     * @return null
     */
    public function __get($name)
    {
        if (!empty($_SESSION[$name])) {
            return $_SESSION[$name];
        }
        return null;
    }
    
    /**
     * @param [type] $name
     * @return boolean
     */
    public function __isset($name): bool
    {
        $this->has($name);
    }
 
    /**
     * @return object|$_SESSION
     */ 
    public function all(): ?object
    {
        return (object)$_SESSION;
    }

    /**
     * @param string $key
     * @param mixed | $value
     * @return Session
     */
    public function set(string $key, $value): Session
    {
        $_SESSION[$key] = (is_array($value) ? (object)$value : $value);
        return $this;
    }

    /**
     * @param string $key
     * @return Session
     */
    public function unset(string $key): Session
    {
        unset($_SESSION[$key]);
        return $this;
    }

    /**
     * @param string $key
     * @return bool
     */
    public function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * @return Session
     */
    public function regenerate(): Session
    {
        session_regenerate_id(true);
        return $this;
    }

    /**
     * @return Session
     */
    public function destroy(): Session
    {
        session_destroy();
        return $this;
    }
}
