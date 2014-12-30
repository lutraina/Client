<?php

namespace Web\Bundle\WSClientBundle\Adapter\Request;

use GuzzleHttp\Message\RequestInterface;
use Web\Bundle\WSClientBundle\Adapter\Response\GuzzleResponseAdapter;

/**
 * Adpater pour une requête Guzzle
 */
class GuzzleRequestAdapter implements RequestAdapterInterface
{
    /**
     * @var RequestInterface
     */
    protected $request;

    /**
     * Build a request
     *
     * @param RequestInterface $guzzleRequest Guzzle request at adapter
     *
     * @return \Web\Bundle\WSClientBundle\Adapter\Request\GuzzleRequestAdapter
     */
    public function __construct(RequestInterface $guzzleRequest)
    {
        $this->request = $guzzleRequest;
    }

    /**
     * {@inheritdoc}
     */
    public function getRequest()
    {
        return $this->request;
    }
}
