<?php

namespace jaghoub\izitools;

use jaghoub\izitools\Storage\Session;

class iziier
{
    /**
     * Session storage.
     *
     * @var jaghoub\Storage\Session
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
        $this->session->izime([
             'izime.type' => $type,
            'izime.options' => json_encode($options),
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
     * If a Session is ready to be shown.
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
    public function options($array = true)
    {

        $data =  json_decode($this->session->get('izime.options'), $array);
        $numItems = count($data);
        $i = 0;
        $qut="'";
        $fcode="";
        foreach ($data as $key => $value) {

        if(++$i === $numItems) {
 if(gettype(  $value  == "string" ))
          $fcode.= $key. ":". $qut . $value. $qut ;
          else
          $fcode.= $key. ":".   $value  ;

 }else {

   if(gettype(  $value  == "string" ))
   $fcode.= $key. ":" . $qut . $value . $qut  . ",";
   else
   $fcode.= $key. ":"   . $value . ",";

 }

        }

        return $fcode ;

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
