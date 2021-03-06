<?php

namespace OAuth2\Storage\Models;

use Phalcon\Mvc\Model\Validator\Email as Email;

class OauthUsers extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     */
    public $username;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $first_name;

    /**
     *
     * @var string
     */
    public $last_name;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var integer
     */
    public $email_verified;

    /**
     *
     * @var string
     */
    public $scope;

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthUsers[]
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return OauthUsers
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
        $this->keepSnapshots(true);
        $this->setSource("'oauth__users'");
        $this->hasMany('username', 'OAuth2\Storage\Models\OauthAccessTokens', 'user_id', array("alias" => "AccessTokens"));
        $this->hasMany('username', 'OAuth2\Storage\Models\OauthRefreshTokens', 'user_id', array("alias" => "RefreshTokens"));
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $this->validate(
            new Email(
                array(
                    'field' => 'email',
                    'required' => true,
                )
            )
        );

        if ($this->validationHasFailed() == true) {
            return false;
        }

        return true;
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'oauth__users';
    }

    /**
     * @param mixed $parameters
     * @return \OAuth2\Storage\Models\OauthAccessTokens[]
     */
    public function getAccessTokens($parameters = null)
    {
        return $this->getRelated('AccessTokens', $parameters);
    }

    /**
     * @param mixed $parameters
     * @return \OAuth2\Storage\Models\OauthRefreshTokens[]
     */
    public function getRefreshTokens($parameters = null)
    {
        return $this->getRelated('RefreshTokens', $parameters);
    }
}