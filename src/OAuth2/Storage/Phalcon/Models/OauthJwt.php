<?php

namespace OAuth2\Storage\Models;

class OauthJwt extends \Phalcon\Mvc\Model
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
    public $subject;

    /**
     *
     * @var string
     */
    public $public_key;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthJwt[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthJwt
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
        $this->setSource("'oauth__jwt'");
        $this->belongsTo('client_id', 'OAuth2\Storage\Models\OauthClients', 'client_id', array("alias" => "Client"));
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth__jwt';
    }
    
    public function getClient($parameters = null)
    {
        return $this->getRelated('Client', $parameters);
    }
}
