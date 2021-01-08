<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \Application\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'fullName', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'phoneNo', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'profilePhoto', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'pwdResetToken', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'pwdResetTokenCreatedAt', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'apiKey', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'apiSecret', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'loggedIn', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'authToken', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'authTokenCreatedAt', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userActive', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'fullName', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'phoneNo', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'email', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'profilePhoto', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'username', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'password', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'pwdResetToken', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'pwdResetTokenCreatedAt', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'apiKey', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'apiSecret', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'loggedIn', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'authToken', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'authTokenCreatedAt', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'userActive', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'createdAt', '' . "\0" . 'Application\\Entity\\User' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setFullName($fullName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFullName', [$fullName]);

        return parent::setFullName($fullName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFullName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFullName', []);

        return parent::getFullName();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNo($phoneNo = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNo', [$phoneNo]);

        return parent::setPhoneNo($phoneNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNo', []);

        return parent::getPhoneNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setProfilePhoto($profilePhoto = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProfilePhoto', [$profilePhoto]);

        return parent::setProfilePhoto($profilePhoto);
    }

    /**
     * {@inheritDoc}
     */
    public function getProfilePhoto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProfilePhoto', []);

        return parent::getProfilePhoto();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername($username)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        return parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsername()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword($password)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPwdResetToken($pwdResetToken = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwdResetToken', [$pwdResetToken]);

        return parent::setPwdResetToken($pwdResetToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getPwdResetToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwdResetToken', []);

        return parent::getPwdResetToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setPwdResetTokenCreatedAt($pwdResetTokenCreatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPwdResetTokenCreatedAt', [$pwdResetTokenCreatedAt]);

        return parent::setPwdResetTokenCreatedAt($pwdResetTokenCreatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getPwdResetTokenCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPwdResetTokenCreatedAt', []);

        return parent::getPwdResetTokenCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiKey($apiKey)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiKey', [$apiKey]);

        return parent::setApiKey($apiKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiKey()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiKey', []);

        return parent::getApiKey();
    }

    /**
     * {@inheritDoc}
     */
    public function setApiSecret($apiSecret)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setApiSecret', [$apiSecret]);

        return parent::setApiSecret($apiSecret);
    }

    /**
     * {@inheritDoc}
     */
    public function getApiSecret()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getApiSecret', []);

        return parent::getApiSecret();
    }

    /**
     * {@inheritDoc}
     */
    public function setLoggedIn($loggedIn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLoggedIn', [$loggedIn]);

        return parent::setLoggedIn($loggedIn);
    }

    /**
     * {@inheritDoc}
     */
    public function getLoggedIn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLoggedIn', []);

        return parent::getLoggedIn();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthToken($authToken)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthToken', [$authToken]);

        return parent::setAuthToken($authToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthToken()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthToken', []);

        return parent::getAuthToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthTokenCreatedAt($authTokenCreatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthTokenCreatedAt', [$authTokenCreatedAt]);

        return parent::setAuthTokenCreatedAt($authTokenCreatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthTokenCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthTokenCreatedAt', []);

        return parent::getAuthTokenCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUserActive($userActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUserActive', [$userActive]);

        return parent::setUserActive($userActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserActive', []);

        return parent::getUserActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

}
