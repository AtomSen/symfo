<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Electronic;
use AppBundle\Exceptions\ObjectNotValidException;
use AppBundle\Exceptions\ObjectNotFoundException;
use AppBundle\Services\ElectronicServiceCache;
use Doctrine\DBAL\Exception\NotNullConstraintViolationException;
use Symfony\Component\Cache\Simple\FilesystemCache;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;


class ElectronicController
{
    private $service;
    private $serializer;
    private $cache;

    /**
     * ElectronicController constructor.
     * @param ElectronicServiceCache $service
     * @param Serializer $serializer
     */
    public function __construct(ElectronicServiceCache $service, Serializer $serializer)
    {
        $this->cache = new FilesystemCache("Electronic");
        $this->service = $service;
        $this->serializer = $serializer;
    }

    /**
     * /electronics/{filter} GET
     * @param Request $request
     * @return Response
     * it returns all the items and if filter in not null it returns a list of filtered items
     */
    public function getAllElectronics(Request $request)
    {
        $response = new Response();
        /*$response->setPublic();
        $response->setLastModified($this->cache->get('date',new \DateTime()));
    
        //$response->setEtag(md5($response->getContent()));
        
        if ($response->isNotModified($request)) {
            return $response;
        } else {*/
        $filter = $request->get('filter');
        $items = $this->service->getAll($filter);
        $response->setContent($this->serializer->serialize($items, 'json'));
        if (count($items) > 0) {
            $response->setStatusCode(Response::HTTP_OK);
        } else {
            $response->setStatusCode(Response::HTTP_NO_CONTENT);
        }
        $response->headers->set('content-type', 'application/json', true);
        return $response;
        // }
    }

    /**
     * /electronics/{id} GET
     * @param int $id
     * @return mixed json response
     */
    public function getElectronicById($id)
    {

        try {
            $obj = $this->service->getById($id);
            $JsonObject = $this->serializer->serialize($obj, 'json');
            $response = new Response($JsonObject, Response::HTTP_OK);
            $response->headers->set('content-type', 'application/json');

            return $response;
        } catch (ObjectNotFoundException $exception) {
            return new Response(json_encode($exception->getMessage()), Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * /electronics POST
     * @param Request $request
     * @return Response
     */
    public function addElectronics(Request $request)
    {
        $content = $request->getContent();

        $electronic = $this->serializer->deserialize($content, Electronic::class, 'json');
        try {
            /**
             * @var $electronic Electronic
             */
            $id = $this->service->addElectronic($electronic);
            $response = new Response(json_encode('Object Added'), Response::HTTP_CREATED);
            $response->headers->set('Location', $request->getUri() . '/' . $id);

            // $this->cache->set('date', new \DateTime());

            return $response;
        } catch (ObjectNotValidException $exception) {
            return new Response(json_encode($exception->getMessage()), Response::HTTP_BAD_REQUEST);
        } catch (NotNullConstraintViolationException $exception) {
            return new Response(json_encode("fields can`t be null"), Response::HTTP_BAD_REQUEST);
        }
    }

    /**
     * /electronics/{id} DELETE
     * @param $id
     * @return Response
     */
    public function deleteElectronicById($id)
    {
        // $this->cache->set('date', new \DateTime());

        $this->service->deleteElectronic($id);

        return new Response(null, Response::HTTP_NO_CONTENT);

    }

    /**
     * /electronics/{id} PUT
     * @param Request $request
     * @param $id
     * @return Response
     */
    public function updateElectronic(Request $request, $id)
    {
        $content = $request->getContent();
        /**
         * @var $electronic Electronic
         */
        $electronic = $this->serializer->deserialize($content, Electronic::class, 'json');

        $electronic->setId($id);
        try {
            $this->service->updateElectronic($electronic);

            //$this->cache->set('date', new \DateTime());

            return new Response(null, Response::HTTP_NO_CONTENT);
        } catch (ObjectNotValidException $exception) {
            return new Response($exception->getMessage(), Response::HTTP_BAD_REQUEST);
        }


    }
}
