<?php

namespace DB\EventStoreClient;

/**
 * Class EventData
 * @package DB\EventStoreClient
 */
class EventData
{
    /**
     * @var string
     */
    private $eventId;

    /**
     * @var string
     */
    private $type;

    /**
     * @var array
     */
    private $data;

    /**
     * @param $eventId
     * @param $type
     * @param array $data
     */
    public function __construct($eventId, $type, array $data)
    {
        $this->eventId = $eventId;
        $this->type = $type;
        $this->data = $data;
    }

    /**
     * @return string
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }
}