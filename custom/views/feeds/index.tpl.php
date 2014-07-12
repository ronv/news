<?php
$count = 0;
$today = Array();
$week = Array();
$month = Array();
$older = Array();
$now = time();
                    
foreach ($items as $item) {
    $age = ($now - $item->get_date('U')) / (60*60*24);
    if ($age < 1) {
        $today[] = $item;
    } elseif ($age < 7) {
        $week[] = $item;
    } elseif ($age < 30) {
        $month[] = $item;
    } else {
        $older[] = $item;
    }
}

header('Content-type: text/html; charset=UTF-8');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
    <meta http-equiv="Content-Style-Type" content="text/css" />

    <title><?php echo $PlanetConfig->getName(); ?></title>
    <?php include(dirname(__FILE__).'/head.tpl.php'); ?>
</head>
<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetPerson', 'compare'));
?>
<body>
    <div id="page">
        
        <div id="content">
        <?php include(dirname(__FILE__).'/top.tpl.php'); ?>
            <?php if (0 == count($items)) :?>
            <div class="article">
                <h2 class="article-title">
                    No article
                </h2>
                <p class="article-content">No news, good news.</p>
            </div>
            <?php endif; ?>
            <?php if (count($today)): ?>
            <div class="article">
                <h2>Total Feeds (<?php echo count($all_people); ?>)</h2>
            <ul>
            <?php foreach ($all_people as $person) : ?>
            <li>
                <a href="<?php echo $person->getWebsite(); ?>" title="Website"><?php echo htmlspecialchars($person->getName(), ENT_QUOTES, 'UTF-8'); ?></a>
            </li>
            <?php endforeach; ?>
            </ul>
            </div>
            <?php endif; ?>
        </div>    
            
        
        <?php include_once(dirname(__FILE__).'/sidebar.tpl.php'); ?>
        
        <?php include(dirname(__FILE__).'/footer.tpl.php'); ?>
    </div>
    
    <script src="app/js/mm.js" type="text/javascript"></script>
</body>
</html>
