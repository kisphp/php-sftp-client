<?php

namespace Kisphp;

interface ConfigInterface
{
    /**
     * @return string
     */
    public function getHost();

    /**
     * @return int
     */
    public function getPort();

    /**
     * @return string
     */
    public function getUsername();

    /**
     * @return string
     */
    public function getPassword();
}
