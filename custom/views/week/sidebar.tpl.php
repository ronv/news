<?php
$all_people = &$Planet->getPeople();
usort($all_people, array('PlanetPerson', 'compare'));
?>
<div id="sidebar" class="aside">
    
    <div class="section">
        <h2>Syndicate</h2>
        <ul>
            <li><img src="custom/img/feed.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=atom10">Feed (ATOM)</a></li>
            <li><img src="custom/img/feed.png" alt="feed" height="12" width="12" /> <a href="custom/people.opml">All feeds (OPML)</a></li>
            <li><img src="custom/img/feed.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=feeds">Total Feeds (<?php echo count($all_people); ?>)</a></li>

        </ul>
    </div>

    <div class="section">
        <h2>Archives</h2>
        <ul>
            <li><img src="custom/img/list.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=today">Today's headlines</a></li>
            <li><img src="custom/img/list.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=week">This week's headlines</a></li>
            <li><img src="custom/img/list.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=month">This month's headlines</a></li>
            <li><img src="custom/img/list.png" alt="feed" height="12" width="12" />&nbsp;<a href="?type=older">Older headlines</a></li>

        </ul>
    </div>
</div>