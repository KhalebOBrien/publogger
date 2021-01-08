<?php

namespace DoctrineORMModule\Proxy\__CG__\Application\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Post extends \Application\Entity\Post implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'isDeleted', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'isPublished', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'slug', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'postTitle', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'postBody', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'thumbnailUrl', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'totalViews', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'publishedOn', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'updatedOn', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'user', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'group'];
        }

        return ['__isInitialized__', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'id', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'isDeleted', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'isPublished', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'slug', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'postTitle', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'postBody', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'thumbnailUrl', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'totalViews', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'publishedOn', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'updatedOn', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'user', '' . "\0" . 'Application\\Entity\\Post' . "\0" . 'group'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Post $proxy) {
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
            return  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsDeleted($isDeleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsDeleted', [$isDeleted]);

        return parent::setIsDeleted($isDeleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsDeleted', []);

        return parent::getIsDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsPublished($isPublished)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsPublished', [$isPublished]);

        return parent::setIsPublished($isPublished);
    }

    /**
     * {@inheritDoc}
     */
    public function getIsPublished()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIsPublished', []);

        return parent::getIsPublished();
    }

    /**
     * {@inheritDoc}
     */
    public function setSlug($slug)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSlug', [$slug]);

        return parent::setSlug($slug);
    }

    /**
     * {@inheritDoc}
     */
    public function getSlug()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSlug', []);

        return parent::getSlug();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostTitle($postTitle)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostTitle', [$postTitle]);

        return parent::setPostTitle($postTitle);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostTitle', []);

        return parent::getPostTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostBody($postBody)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostBody', [$postBody]);

        return parent::setPostBody($postBody);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostBody()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostBody', []);

        return parent::getPostBody();
    }

    /**
     * {@inheritDoc}
     */
    public function setThumbnailUrl($thumbnailUrl = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThumbnailUrl', [$thumbnailUrl]);

        return parent::setThumbnailUrl($thumbnailUrl);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumbnailUrl()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumbnailUrl', []);

        return parent::getThumbnailUrl();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalViews($totalViews)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalViews', [$totalViews]);

        return parent::setTotalViews($totalViews);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalViews()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalViews', []);

        return parent::getTotalViews();
    }

    /**
     * {@inheritDoc}
     */
    public function setPublishedOn($publishedOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPublishedOn', [$publishedOn]);

        return parent::setPublishedOn($publishedOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getPublishedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPublishedOn', []);

        return parent::getPublishedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedOn($updatedOn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedOn', [$updatedOn]);

        return parent::setUpdatedOn($updatedOn);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedOn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedOn', []);

        return parent::getUpdatedOn();
    }

    /**
     * {@inheritDoc}
     */
    public function setUser(\Application\Entity\User $user = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUser', [$user]);

        return parent::setUser($user);
    }

    /**
     * {@inheritDoc}
     */
    public function getUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUser', []);

        return parent::getUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setGroup(\Application\Entity\PostGroup $group = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGroup', [$group]);

        return parent::setGroup($group);
    }

    /**
     * {@inheritDoc}
     */
    public function getGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGroup', []);

        return parent::getGroup();
    }

}
