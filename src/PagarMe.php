<?php

namespace PagarMe;

/**
 * Class PagarMe
 * @package PagarMe
 *
 * @author Vinicius V. de Oliveira <vinyvicente@gmail.com>
 * @link https://pagar.me/docs/ (Based)
 */
class PagarMe
{
    /**
     * @var PagarMe
     */
    protected static $instance;

    /**
     * @var string
     */
    protected $apiKey;

    /**
     * @return PagarMe
     */
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return bool
     */
    public function isValidKey()
    {
        return $this->apiKey != null;
    }
}
