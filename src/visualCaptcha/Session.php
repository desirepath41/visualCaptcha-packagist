<?php

namespace visualCaptcha;

class Session {
    private $namespace = '';

    public function __construct( $namespace = 'visualcaptcha' ) {
        $this->namespace = $namespace;
    }

    public function clear() {
        $_SESSION[ $this->namespace ] = Array();
    }

    public function get( $key ) {
        if ( !isset( $_SESSION[ $this->namespace ] ) ) {
            $this->clear();
        }

        return $_SESSION[ $this->namespace ][ $key ];
    }

    public function set( $key, $value ) {
        if ( !isset( $_SESSION[ $this->namespace ] ) ) {
            $this->clear();
        }

        $_SESSION[ $this->namespace ][ $key ] = $value;
    }
};

?>