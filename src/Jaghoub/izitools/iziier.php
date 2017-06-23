<?php

namespace Jaghoub\izitools;

use Jaghoub\izitools\Storage\Session;

class iziier
{
    /**
     * Session storage.
     *
     * @var Jaghoub\Storage\Session
     */
    protected $session;

    public function __construct(Session $session)
    {
        $this->session = $session;
    }

    /**
     * Flash a message.
     *
     * @param  string $message
     * @param  string $type
     * @param  array  $options
     *
     * @return void
     */
    public function izime($type = null, array $options = [])
    {
        $this->session->flash([
             'izitools.type' => $type,
            'izitools.options' => json_encode($options),
        ]);
    }

    /**
     * Get the message
     *
     * @param  boolean $array
     * @return array
     */
    public function get($array = false)
    {
        return [
            'type' => $this->type(),
            'options' => $this->options($array),
        ];
    }

    /**
     * If a message is ready to be shown.
     *
     * @return bool
     */
    public function ready()
    {
        return $this->type();
    }


    /**
     * Get the stored type.
     *
     * @return string
     */
    public function type()
    {
        return $this->session->get('izime.type');
    }

    /**
     * Get an additional stored options.
     *
     * @param  boolean $array
     * @return mixed
     */
    public function options($array = false)
    {
        return json_decode($this->session->get('izime.options'), $array);
    }

     /**
     * Get a stored option.
     *
     * @param  string $key
     * @return string
     */
    public function option($key, $default = null)
    {
        return array_get($this->options(true), $key, $default);
    }
}
