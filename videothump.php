<?php
/**
 * Vimeo Thumbnail Script - Gets the poster frame for a Vimeo video id.
 * @author Bramus Van Damme <bramus@bram.us>
 *
 * Example Request: vimeothumb.php?id=83936766
 */
// Perform a GET request to a given URL.
// Uses `allow_url_fopen` if supported, or curl as a fallback.
function get($url) {
        if (ini_get('allow_url_fopen')) return file_get_contents($url);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
}
// Extract ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : 0;
// Request the image hash with Vimeo
if ($id > 0) $hash = unserialize(get('http://vimeo.com/api/v2/video/' . $id . '.php'));
// Thumbnail found
if ($hash && isset($hash[0]) && isset($hash[0]['thumbnail_large'])) {
        header('Content-type: image/jpeg');
        echo get($hash[0]['thumbnail_large']);
}
// No thumbnail found: return a valid, but blank image
else {
        header('Cache-Control: no-cache');
	header('Content-type: image/gif');
	header('Content-length: 43');
	echo base64_decode('R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw==');
}
