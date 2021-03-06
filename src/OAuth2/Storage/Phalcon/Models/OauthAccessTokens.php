<?php

namespace OAuth2\Storage\Models;

class OauthAccessTokens extends \Phalcon\Mvc\Model
{
    /**
     *
     * @var string
     */
    public $access_token;

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
    public $expires;

    /**
     *
     * @var string
     */
    public $scope;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthAccessTokens[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthAccessTokens
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSource("'oauth__access_tokens'");
        $this->belongsTo('user_id', 'OAuth2\Storage\Models\OauthUsers', 'username', array("alias" => "User"));
        $this->belongsTo('client_id', 'OAuth2\Storage\Models\OauthClients', 'client_id', array("alias" => "Client"));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth__access_tokens';
    }

    /**
     * @param mixed $parameters
     * @return \OAuth2\Storage\Models\OauthUsers
     */
    public function getUser($parameters = null)
    {
        return $this->getRelated('User', $parameters);
    }

    /**
     * @param mixed $parameters
     * @return \OAuth2\Storage\Models\OauthClients
     */
    public function getClient($parameters = null)
    {
        return $this->getRelated('Client', $parameters);
    }

}
