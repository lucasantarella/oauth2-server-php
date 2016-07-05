<?php

namespace OAuth2\Storage\Phalcon\Models;

use OAuth2\Storage\Phalcon\Phalcon;

class OauthJti extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $issuer;

    /**
     *
     * @var string
     */
    public $subject;

    /**
     *
     * @var string
     */
    public $audience;

    /**
     *
     * @var string
     */
    public $expires;

    /**
     *
     * @var string
     */
    public $jti;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return $this->getDI()->getRaw(Phalcon::KEY_PHALCON_CONFIG_ARRAY)['oauth_jti'];
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthJti[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthJti
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}