<?php
/**
 *
 * Sova Topic Sort by Creation Time [English]
 *
 */

if (!defined('IN_PHPBB'))
{
    exit;
}

if (empty($lang) || !is_array($lang))
{
    $lang = [];
}

$lang = array_merge($lang, [
    'TOPICSORT_TITLE'   => 'Topic sort by creation time',
    'TOPICSORT_EXPLAIN' => 'This extension replaces the topic sort field from last post time to topic creation time.',
]);