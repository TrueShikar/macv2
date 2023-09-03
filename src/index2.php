<?php
error_reporting(0);

function fetchChannels()
{
    $playlistPath = "playlist.txt";
    $playlistData = file_get_contents($playlistPath);

    return $playlistData;
}

function extractChannelId($url)
{
    $parsedUrl = parse_url($url);
    $path = $parsedUrl['path'];
    $pathParts = explode('/', $path);
    $channelId = end($pathParts);

    return $channelId;
}

function parseChannels($data)
{
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

function extractLogoUrl($line)
{
    $logoStartIndex = strpos($line, "tvg-logo=");

    if ($logoStartIndex !== false) {
        $logoStartIndex += 10;
        $logoEndIndex = strpos($line, '"', $logoStartIndex);
        $logii = substr($line, $logoStartIndex, $logoEndIndex - $logoStartIndex);
        $logii = str_replace("http:", "", $logii);
        return $logii;
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
    <style>
        body {
            background-color: #8c72bd;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            background-color: #8c72bd;
            color: #000;
            padding: 20px;
            font-size: 18px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        h1 {
            font-size: 24px;
            margin: 0;
            padding-bottom: 20px;
            border-bottom: 1px solid #000;
        }

        .search-form {
            margin-bottom: 20px;
            display: flex; /* Display form elements side by side */
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
        }

        .search-form input[type="text"] {
            padding: 5px; /* Decrease padding */
            font-size: 16px; /* Decrease font size */
            width: calc(70% - 10px); /* Adjust width to allow space for the button */
            border: none;
            border-radius: 5px;
        }

        .search-form button {
            padding: 5px 10px; /* Decrease padding */
            font-size: 16px; /* Decrease font size */
            background-color: #009999;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px; /* Add space between input and button */
        }

        .channel-list {
            list-style: none;
            padding: 0;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 10px;
            justify-items: center;
        }

        .channel-item {
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        .channel-item img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 50%;
        }

        .channel-item a {
            display: block;
            margin-top: 10px;
            color: #009999;
            font-weight: bold;
            text-decoration: none;
            font-size: 16px;
        }

        @media screen and (max-width: 480px) {
            .search-form input[type="text"] {
                width: calc(100% - 10px); /* Full width on smaller screens */
                margin-bottom: 10px; /* Add space between input and button */
            }

            .search-form button {
                width: 100%; /* Full width on smaller screens */
                margin-left: 0; /* Remove margin on smaller screens */
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>2000+ Channels</h1>
        <form class="search-form" action="" method="GET">
            <input type="text" name="q" placeholder="Search..." value="<?php echo htmlentities($searchQuery); ?>">
            <button type="submit">Search</button>
        </form>
        <?php if (empty($filteredChannels)) : ?>
            <?php if (empty($channels)) : ?>
                <p>No channels found.</p>
            <?php else : ?>
                <ul class="channel-list">
                    <?php foreach ($channels as $channel) : ?>
                        <li class="channel-item">
                            <img src="mp.php?<?php echo htmlentities($channel['logo']); ?>" alt="Logo">
                            <a href="plyr.php?id=<?php echo htmlentities($channel['url']); ?>&p=<?php echo htmlentities($channel['logo']); ?>"><?php echo htmlentities($channel['name']); ?></a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        <?php else : ?>
            <ul class="channel-list">
                <?php foreach ($filteredChannels as $channel) : ?>
                    <li class="channel-item">
                        <img src="mp.php?<?php echo htmlentities($channel['logo']); ?>" alt="Logo">
                        <a href="plyr.php?id=<?php echo htmlentities($channel['url']); ?>&p=<?php echo htmlentities($channel['logo']); ?>"><?php echo htmlentities($channel['name']); ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>
