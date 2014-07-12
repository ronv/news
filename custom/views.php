<?php
$views = array(
    'rss10' => array(
        'header' => 'Content-Type: text/xml; charset=UTF-8',
        'prolog' => '<?xml version="1.0" encoding="UTF-8" ?>'."\n",
        'template' => dirname(__FILE__).'/views/rss10/rss10.tpl.php'
    ),
    'atom10' => array(
        //'header' => 'Content-Type: text/xml; charset=UTF-8',
        'header' => 'Content-Type: text/plain; charset=UTF-8',
        'prolog' => '<?xml version="1.0" encoding="UTF-8" ?>'."\n",
        'template' => dirname(__FILE__).'/views/atom10/atom10.tpl.php'
    ),
    'archive' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/archive/archive.tpl.php'
    ),
    'feeds' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/feeds/index.tpl.php'
    ),
    'today' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/today/index.tpl.php'
    ),
    'week' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/week/index.tpl.php'
    ),
    'month' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/month/index.tpl.php'
    ),
    'older' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/older/index.tpl.php'
    ),
    'about' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/about/index.tpl.php'
    ),
    'html' => array(
        'header' => 'Content-type: text/html; charset=UTF-8',
        'prolog' => '',
        'template' => dirname(__FILE__).'/views/default/index.tpl.php'
    )
);