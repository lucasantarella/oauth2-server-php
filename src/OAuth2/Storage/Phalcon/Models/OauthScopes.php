<?php

namespace OAuth2\Storage\Models;

class OauthScopes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $scope;

    /**
     *
     * @var integer
     */
    public $is_default;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth__scopes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthScopes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthScopes
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
