<?php
error_reporting(0);
function fetchChannels() {
    $playlistPath = "playlist.txt";
    $playlistData = file_get_contents($playlistPath);

    return $playlistData;
}
function extractChannelId($url) {
    $parsedUrl = parse_url($url);
    $path = $parsedUrl['path'];
    $pathParts = explode('/', $path);
    $channelId = end($pathParts);

    return $channelId;
}


function parseChannels($data) {
    $lines = explode("\n", $data);
    $channels = [];
    $currentChannel = [];

    foreach ($lines as $line) {
        $line = trim($line);

        if (strpos($line, "#EXTINF") === 0) {
            $info = explode(",", $line);
            $currentChannel['name'] = $info[1];
            $currentChannel['logo'] = extractLogoUrl($line); // Extract logo URL
        } elseif (strpos($line, "http") === 0) {
            $currentChannel['url'] = extractChannelId($line); // Extract channel ID from URL
            $channels[] = $currentChannel;
            $currentChannel = [];
        }
    }

    return $channels;
}

function extractLogoUrl($line) {
    $logoStartIndex = strpos($line, "tvg-logo=");

    if ($logoStartIndex !== false) {
        $logoStartIndex += 10;
        $logoEndIndex = strpos($line, '"', $logoStartIndex);
        return substr($line, $logoStartIndex, $logoEndIndex - $logoStartIndex);
    }

    return '';
}

$playlistData = fetchChannels();
$channels = parseChannels($playlistData);

$searchQuery = isset($_GET['q']) ? trim($_GET['q']) : '';
$filteredChannels = array_filter($channels, function ($channel) use ($searchQuery) {
    return stripos($channel['name'], $searchQuery) !== false;
});

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Channel List</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>2000+ Channels</h1>
        <form class="search-form" action="" method="GET">
            <input type="text" name="q" placeholder="Search..." value="<?php echo htmlentities($searchQuery); ?>">
            <button type="submit">Search</button>
        </form>
If a channel may not work then find its copies by searching, the copy may work!
        <?php if (empty($filteredChannels)) : ?>
            <?php if (empty($channels)) : ?>
                <p>No channels found.</p>
            <?php else : ?>
                <ul class="channel-list">
                    <?php foreach ($channels as $channel) : ?>
                        <li class="channel-item">
                            <img src="<?php echo htmlentities($channel['logo']); ?>" alt="Logo">
                            <a href="plyr.php?id=<?php echo htmlentities($channel['url']); ?>&p=<?php echo htmlentities($channel['logo']); ?>"><?php echo htmlentities($channel['name']); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php else : ?>
            <ul class="channel-list">
                <?php foreach ($filteredChannels as $channel) : ?>
                    <li class="channel-item">
                        <img src="<?php echo htmlentities($channel['logo']); ?>" alt="Logo">
                        <a href="plyr.php?id=<?php echo htmlentities($channel['url']); ?>&p=<?php echo htmlentities($channel['logo']); ?>"><?php echo htmlentities($channel['name']); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>

</body>
</html>
