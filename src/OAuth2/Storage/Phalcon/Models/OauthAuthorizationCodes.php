<?php

namespace OAuth2\Storage\Models;

class OauthAuthorizationCodes extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $authorization_code;

    /**
     *
     * @var string
     */
    public $client_id;

    /**
     *
     * @var string
     */
    public $user_id;

    /**
     *
     * @var string
     */
    public $redirect_uri;

    /**
     *
     * @var string
     */
    public $expires;

    /**
     *
     * @var string
     */
    public $scope;

    /**
     *
     * @var string
     */
    public $id_token;

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth__authorization_codes';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthAuthorizationCodes[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthAuthorizationCodes
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
