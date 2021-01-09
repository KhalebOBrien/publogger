<?php
/**
 * @link        https://publogger.khaleb.dev
 * @copyright   Copyright (c) 2021 Publogger
 * @license     MIT License    
 */

declare(strict_types=1);

namespace Application\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\JsonModel;
use Laminas\Http\Headers;
use Laminas\Http\Response;
use Application\CustomObject\CustomFileUpload;
use Application\CustomObject\Utility;
use Application\CustomObject\simple_html_dom;
use Application\Entity\Images;
use Application\Entity\Post;
use Application\Entity\PostGroup;
use Application\Entity\PostImages;
use Application\Entity\PostTags;
use Application\Entity\Tags;
use Application\Entity\User;
use Application\Form\TagForm;

class BackendApiController extends AbstractActionController
{
    private $backendApiManager = null;

    public function __construct($entityManager, $backendApiManager)
    {
        $this->entityManager = $entityManager;
        $this->backendApiManager = $backendApiManager;
    }

    public function indexAction()
    {
        return new JsonModel([]);
    }

    private function response(int $code = 406, string $status = 'NOT ACCEPTABLE')
    {
        $response = [
            'code' => $code,
            'status' => $status,
        ];

        return $response;
    }

    /**
     * Action to handle a single tag
     */
    public function tagAction()
    {
        $response = $this->response();

        if ($this->getRequest()->isPost())
        {
            // $auth = $this->params()->fromHeader('authorization');
            // var_dump($auth);
            // exit();
            $data = $this->params()->fromPost();
            if (empty($data)) {
                $response = $this->response(501, 'CREATED');
            }
            else {
                $form = new TagForm();
                $form->setData($data);
                if ($form->isValid()) {
                    $data = $form->getData();
                    if (isset($data['update']) && $data['update'] === 'true') {
                        $id = intval($this->params()->fromRoute('id', null));
                        $tag = $this->entityManager->getRepository(Tags::class)->find($id);
                        if (empty($tag)) {
                            return new JsonModel($this->response(404, 'NOT FOUND'));
                        }
                        $tag = $this->backendApiManager->updateTag($tag, $data);
                        $response = $this->response(200, 'OK');
                    }
                    else {
                        $tag = $this->backendApiManager->createTag($data);
                        $response = $this->response(201, 'CREATED');
                    }
                    $tagData = [];
                    $tagData['id'] = $tag->getId();
                    $tagData['name'] = $tag->getName();
                    $tagData['description'] = $tag->getDescription();
                    $tagData['created_at'] = $tag->getCreatedAt()->format('Y-m-d H:i:s');

                    $response['tag'] = $tagData;
                }
                else {
                    $response = $this->response(418, 'I AM A TEAPOT');
                }
            }
        }
        
        if ($this->getRequest()->isGet())
        {
            $id = intval($this->params()->fromRoute('id', null));
            $tag = $this->entityManager->getRepository(Tags::class)->find($id);
            if (empty($tag)) {
                $response = $this->response(404, 'NOT FOUND');
            }
            else {
                $response = $this->response(200, 'OK');
                $tagData = [];
                $tagData['id'] = $tag->getId();
                $tagData['name'] = $tag->getName();
                $tagData['description'] = $tag->getDescription();
                $tagData['created_at'] = $tag->getCreatedAt()->format('Y-m-d H:i:s');

                $response['tag'] = $tagData;
            }
        }
        
        if ($this->getRequest()->isDelete())
        {
            $id = intval($this->params()->fromRoute('id', null));
            $tag = $this->entityManager->getRepository(Tags::class)->find($id);
            if (empty($tag)) {
                $response = $this->response(404, 'NOT FOUND');
            }
            else {
                $this->backendApiManager->deleteTag($tag);
                $response = $this->response(200, 'OK');
            }
        }

        return new JsonModel($response);
    }

    /**
     * Action to handle a single tag
     */
    public function tagsAction()
    {
        $response = ['code' => 404, 'status' => 'NOT FOUND'];

        if ($this->getRequest()->isPost())
        {
            $response = ['code' => 201, 'status' => 'CREATED', 'message' => 'post'];
        }
        
        if ($this->getRequest()->isGet())
        {
            $response = ['code' => 200, 'status' => 'OK', 'message' => 'get'];
        }
        
        if ($this->getRequest()->isPatch())
        {
            $response = ['code' => 200, 'status' => 'OK', 'message' => 'patch'];
        }
        
        if ($this->getRequest()->isPut())
        {
            $response = ['code' => 200, 'status' => 'OK', 'message' => 'put'];
        }
        
        if ($this->getRequest()->isDelete())
        {
            $response = ['code' => 200, 'status' => 'OK', 'message' => 'delete'];
        }

        return new JsonModel($response);
    }

}