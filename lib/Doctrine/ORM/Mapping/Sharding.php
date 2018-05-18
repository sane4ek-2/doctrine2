<?php

namespace Doctrine\ORM\Mapping;

/**
 * @Annotation
 * @Target("PROPERTY")
 */
class Sharding implements Annotation
{
    /**
     * The name of a property contains shard holder
     * A shard holder must implement @see \Doctrine\DBAL\Sharding\ShardHolder
     *
     * @var string
     * @Required
     */
    public $shardHolder;
}
