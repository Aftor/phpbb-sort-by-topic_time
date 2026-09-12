<?php
namespace sova\topicsort\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class listener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            'core.viewforum_modify_topic_ordering' => 'modify_ordering',
        ];
    }

    public function modify_ordering($event)
    {
        $sort_by_sql = $event['sort_by_sql'];

        if (isset($sort_by_sql['t']))
        {
            $sort_by_sql['t'] = 't.topic_time';
        }

        $event['sort_by_sql'] = $sort_by_sql;
    }
}