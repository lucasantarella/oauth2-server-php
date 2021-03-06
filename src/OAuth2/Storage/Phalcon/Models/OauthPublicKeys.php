<?php

namespace OAuth2\Storage\Models;

class OauthPublicKeys extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $client_id;

    /**
     *
     * @var string
     */
    public $public_key;

    /**
     *
     * @var string
     */
    public $private_key;

    /**
     *
     * @var string
     */
    public $encryption_algorithm;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthPublicKeys[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthPublicKeys
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
        $this->setSource("'oauth__public_keys'");
        $this->belongsTo('client_id', 'OAuth2\Storage\Models\OauthClients', 'client_id', array("alias" => "Client"));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth__public_keys';
    }

    public function getClient($parameters = null)
    {
        return $this->getRelated('Client', $parameters);
    }
}
