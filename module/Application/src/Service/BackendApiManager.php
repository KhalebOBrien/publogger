<?php
/**
 * @link        https://publogger.khaleb.dev
 * @copyright   Copyright (c) 2021 Publogger
 * @license     MIT License    
 */

declare(strict_types=1);

namespace Application\Service;

use Application\CustomObject\Utility;
use Application\Entity\Images;
use Application\Entity\Post;
use Application\Entity\PostGroup;
use Application\Entity\PostImages;
use Application\Entity\PostTags;
use Application\Entity\Tags;
use Application\Entity\User;

class BackendApiManager
{
    private $entityManager;
    
    public function __construct($entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function createTag($data)
    {
        $tag = new Tags();
        $now = new \DateTime;

        $tag->setName($data['name']);
        $tag->setDescription($data['description']);
        $tag->setCreatedAt($now);
        $this->entityManager->persist($tag);
        $this->entityManager->flush();
        return $tag;
    }

}