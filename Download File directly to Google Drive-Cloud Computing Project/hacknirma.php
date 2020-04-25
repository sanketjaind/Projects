<?php

function linkifyYouTubeURLs($text) {
    $text = preg_replace('~
        # Match non-linked youtube URL in the wild. (Rev:20130823)
        https?://         # Required scheme. Either http or https.
        (?:[0-9A-Z-]+\.)? # Optional subdomain.
        (?:               # Group host alternatives.
          youtu\.be/      # Either youtu.be,
        | youtube         # or youtube.com or
          (?:-nocookie)?  # youtube-nocookie.com
          \.com           # followed by
          \S*             # Allow anything up to VIDEO_ID,
          [^\w\s-]       # but char before ID is non-ID char.
        )                 # End host alternatives.
        ([\w-]{11})      # $1: VIDEO_ID is exactly 11 chars.
        (?=[^\w-]|$)     # Assert next char is non-ID or EOS.
        (?!               # Assert URL is not pre-linked.
          [?=&+%\w.-]*    # Allow URL (query) remainder.
          (?:             # Group pre-linked alternatives.
            [\'"][^<>]*>  # Either inside a start tag,
          | </a>          # or inside <a> element text contents.
          )               # End recognized pre-linked alts.
        )                 # End negative lookahead assertion.
        [?=&+%\w.-]*        # Consume any URL (query) remainder.
        ~ix', 
        '$1',
        $text);
	return $text;
	}

	
	
	
	$url=$_POST['url'];
/*	
	if(!(strpos("http://",$url)==0||strpos("https://",$url))){
		
		$url="http://"+$url;
		
	}
	

*/

// check if it is a filepi url

if(strpos($url,"filepi.com")){

//echo "it is a filepi url ";


$v=shell_exec("php filep.php $url 2>&1");

$start=strpos($v,"Location: ")+10;

$end=strpos($v,"\n",$start);

$url=substr($v,$start,$end-$start-1);


echo $url;

}
	
	
	
	
if($url!=linkifyYouTubeURLs($url)){	
	
	$id_video = linkifyYouTubeURLs($url);
	
	
// YouTube Downloader PHP
// based on youtube-dl in Python http://rg3.github.com/youtube-dl/
// by Ricardo Garcia Gonzalez and others (details at url above)
//
// Takes a VideoID and outputs a list of formats in which the video can be
// downloaded

include_once('config.php');
ob_start();// if not, some servers will show this php warning: header is already set in line 46...

function clean($string) {
   $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
}

function formatBytes($bytes, $precision = 2) { 
    $units = array('B', 'kB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB'); 
    $bytes = max($bytes, 0); 
    $pow = floor(($bytes ? log($bytes) : 0) / log(1024)); 
    $pow = min($pow, count($units) - 1); 
    $bytes /= pow(1024, $pow);
    return round($bytes, $precision) . '' . $units[$pow]; 
} 
function is_chrome(){
	$agent=$_SERVER['HTTP_USER_AGENT'];
	if( preg_match("/like\sGecko\)\sChrome\//", $agent) ){	// if user agent is google chrome
		if(!strstr($agent, 'Iron')) // but not Iron
			return true;
	}
	return false;	// if isn't chrome return false
}

if(isset($id_video)) {
	$my_id = $id_video;
	if(strlen($my_id)>11){
		$url   = parse_url($my_id);
		$my_id = NULL;
		if( is_array($url) && count($url)>0 && isset($url['query']) && !empty($url['query']) ){
			$parts = explode('&',$url['query']);
			if( is_array($parts) && count($parts) > 0 ){
				foreach( $parts as $p ){
					$pattern = '/^v\=/';
					if( preg_match($pattern, $p) ){
						$my_id = preg_replace($pattern,'',$p);
						break;
					}
				}
			}
			if( !$my_id ){
				// echo '<p>No video id passed in</p>';
				exit;
			}
		}else{
			// echo '<p>Invalid url</p>';
			exit;
		}
	}
} else {
	// echo '<p>No video id passed in</p>';
	exit;
}

if(isset($_REQUEST['type'])) {
	$my_type =  $_REQUEST['type'];
} else {
	$my_type = 'redirect';
}

if ($my_type == 'Download') {
} // end of if for type=Download

/* First get the video info page for this video id */
//$my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $my_id;
$my_video_info = 'http://www.youtube.com/get_video_info?&video_id='. $my_id.'&asv=3&el=detailpage&hl=en_US'; //video details fix *1
$my_video_info = curlGet($my_video_info);

/* TODO: Check return from curl for status code */

$thumbnail_url = $title = $url_encoded_fmt_stream_map = $type = $url = '';

parse_str($my_video_info);

// echo '<div id="info">';
switch($config['ThumbnailImageMode'])
{
  case 2: // echo '<img src="getimage.php?videoid='. $my_id .'" border="0" hspace="2" vspace="2">'; break;
  case 1: // echo '<img src="'. $thumbnail_url .'" border="0" hspace="2" vspace="2">'; break;
  case 0:  default:  // nothing
}
// echo '<p>'.$title.'</p>';
// echo '</div>';

$my_title = $title;
$cleanedtitle = clean($title);

if(isset($url_encoded_fmt_stream_map)) {
	/* Now get the url_encoded_fmt_stream_map, and explode on comma */
	$my_formats_array = explode(',',$url_encoded_fmt_stream_map);
	if($debug) {
		// echo '<pre>';
		print_r($my_formats_array);
		// echo '</pre>';
	}
} else {
	// echo '<p>No encoded format stream found.</p>';
	// echo '<p>Here is what we got from YouTube:</p>';
	// echo $my_video_info;
}
if (count($my_formats_array) == 0) {
	// echo '<p>No format stream map found - was the video id correct?</p>';
	exit;
}

/* create an array of available download formats */
$avail_formats[] = '';
$i = 0;
$ipbits = $ip = $itag = $sig = $quality = '';
$expire = time(); 

foreach($my_formats_array as $format) {
	parse_str($format);
	$avail_formats[$i]['itag'] = $itag;
	$avail_formats[$i]['quality'] = $quality;
	$type = explode(';',$type);
	$avail_formats[$i]['type'] = $type[0];
	$avail_formats[$i]['url'] = urldecode($url) . '&signature=' . $sig;
	parse_str(urldecode($url));
	$avail_formats[$i]['expires'] = date("G:i:s T", $expire);
	$avail_formats[$i]['ipbits'] = $ipbits;
	$avail_formats[$i]['ip'] = $ip;
	$i++;
}

if ($debug) {
	// echo '<p>These links will expire at '. $avail_formats[0]['expires'] .'</p>';
	// echo '<p>The server was at IP address '. $avail_formats[0]['ip'] .' which is an '. $avail_formats[0]['ipbits'] .' bit IP address. ';
	// echo 'Note that when 8 bit IP addresses are used, the download links may fail.</p>';
}
if ($my_type == 'Download') {
	// echo '<p align="center">List of available formats for download:</p>
	//	<ul>';

	/* now that we have the array, print the options */
	for ($i = 0; $i < count($avail_formats); $i++) {
		// echo '<li>';
		// echo '<span class="itag">' . $avail_formats[$i]['itag'] . '</span> ';
		if($config['VideoLinkMode']=='direct'||$config['VideoLinkMode']=='both'){}
		  // echo '<a href="' . $avail_formats[$i]['url'] . '&title='.$cleanedtitle.'" class="mime">' . $avail_formats[$i]['type'] . '</a> ';
		else
		  // echo '<span class="mime">' . $avail_formats[$i]['type'] . '</span> ';
		// echo '<small>(' .  $avail_formats[$i]['quality'];
		if($config['VideoLinkMode']=='proxy'||$config['VideoLinkMode']=='both')
			// echo ' / ' . '<a href="download.php?mime=' . $avail_formats[$i]['type'] .'&title='. urlencode($my_title) .'&token='.base64_encode($avail_formats[$i]['url']) . '" class="dl">download</a>';
		// echo ')</small> '.
			'<small><span class="size">' . formatBytes(get_size($avail_formats[$i]['url'])) . '</span></small>'.
		'</li>';
	}
	// echo '</ul><small>Note that you initiate download either by clicking video format link or click "download" to use this server as proxy.</small>';

  if(($config['feature']['browserExtensions']==true)&&(is_chrome()))
    // echo '<a href="ytdl.user.js" class="userscript btn btn-mini" title="Install chrome extension to view a \'Download\' link to this application on Youtube video pages."> Install Chrome Extension </a>';
?>

<?php

} else {

/* In this else, the request didn't come from a form but from something else
 * like an RSS feed.
 * As a result, we just want to return the best format, which depends on what
 * the user provided in the url.
 * If they provided "format=best" we just use the largest.
 * If they provided "format=free" we provide the best non-flash version
 * If they provided "format=ipad" we pull the best MP4 version
 *
 * Thanks to the python based youtube-dl for info on the formats
 *   							http://rg3.github.com/youtube-dl/
 */

$format =  $_REQUEST['format'];
$target_formats = '';
switch ($format) {
	case "best":
		/* largest formats first */
		$target_formats = array('38', '37', '46', '22', '45', '35', '44', '34', '18', '43', '6', '5', '17', '13');
		break;
	case "free":
		/* Here we include WebM but prefer it over FLV */
		$target_formats = array('38', '46', '37', '45', '22', '44', '35', '43', '34', '18', '6', '5', '17', '13');
		break;
	case "ipad":
		/* here we leave out WebM video and FLV - looking for MP4 */
		$target_formats = array('37','22','18','17');
		break;
	default:
		/* If they passed in a number use it */
		if (is_numeric($format)) {
			$target_formats[] = $format;
		} else {
			$target_formats = array('38', '37', '46', '22', '45', '35', '44', '34', '18', '43', '6', '5', '17', '13');
		}
	break;
}

/* Now we need to find our best format in the list of available formats */
$best_format = '';
for ($i=0; $i < count($target_formats); $i++) {
	for ($j=0; $j < count ($avail_formats); $j++) {
		if($target_formats[$i] == $avail_formats[$j]['itag']) {
			//// echo '<p>Target format found, it is '. $avail_formats[$j]['itag'] .'</p>';
			$best_format = $j;
			break 2;
		}
	}
}

//// echo '<p>Out of loop, best_format is '. $best_format .'</p>';
if( (isset($best_format)) && 
  (isset($avail_formats[$best_format]['url'])) && 
  (isset($avail_formats[$best_format]['type'])) 
  ) {
	$redirect_url = $avail_formats[$best_format]['url'].'&title='.$cleanedtitle;
	$content_type = $avail_formats[$best_format]['type'];
}
if(isset($redirect_url)) {
	//header("Location: $redirect_url"); 
}

} // end of else for type not being Download
// *1 = thanks to amit kumar @ bloggertale.com for sharing the fix

// we got download url from the above youtube downloaded list	

//$path=$best_format;
$url=$avail_formats[0]['url'];	
$path=$url;
}


else {

echo "-------".$url."----";
$vivek= shell_exec("wget --content-disposition $url");

echo $vivek;
//$path="downloads/".exec('ls downloads');
$path=$url;	
	
}


$sendemail=$_POST['semail'];

define( 'BACKUP_FOLDER', 'HACK NIRMA 3' );
define( 'SHARE_WITH_GOOGLE_EMAIL', $sendemail );

define( 'CLIENT_ID',  '609425887648-5bdbf5jpm1g2fguucld54rd54m6plar1.apps.googleusercontent.com' );
define( 'SERVICE_ACCOUNT_NAME', '609425887648-5bdbf5jpm1g2fguucld54rd54m6plar1@developer.gserviceaccount.com' );
define( 'KEY_PATH', 'key.p12');

require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_DriveService.php';

class DriveServiceHelper {
	
	protected $scope = array('https://www.googleapis.com/auth/drive');
	
	private $_service;
	
	public function __construct( $clientId, $serviceAccountName, $key ) {
		$client = new Google_Client();
		$client->setClientId( $clientId );
		
		$client->setAssertionCredentials( new Google_AssertionCredentials(
				$serviceAccountName,
				$this->scope,
				file_get_contents( $key ) )
		);
		
		$this->_service = new Google_DriveService($client);
	}
	
	public function __get( $name ) {
		return $this->_service->$name;
	}
	
	public function createFile( $name, $mime, $description, $content, Google_ParentReference $fileParent = null ) {
		$file = new Google_DriveFile();
		$file->setTitle( $name );
		$file->setDescription( $description );
		$file->setMimeType( $mime );
		
		if( $fileParent ) {
			$file->setParents( array( $fileParent ) );
		}
		
		$createdFile = $this->_service->files->insert($file, array(
				'data' => $content,
				'mimeType' => $mime,
		));
		
		return $createdFile['id'];
	}

	
	public function createFileFromPath( $path, $description, Google_ParentReference $fileParent = null ) {
		$fi = new finfo( FILEINFO_MIME );
		$mimeType = explode( ';', $fi->buffer(file_get_contents($path)));
		$fileName = preg_replace('/.*\//', '', $path );
		
	//	echo "<h1>".$filename"</h1>";
	//	die();
		return $this->createFile( $fileName, $mimeType[0], $description, file_get_contents($path), $fileParent );
	}
	
	
	public function createFolder( $name ) {
		return $this->createFile( $name, 'application/vnd.google-apps.folder', null, null);
	}
	
	public function setPermissions( $fileId, $value, $role = 'writer', $type = 'user' ) {
		$perm = new Google_Permission();
		$perm->setValue( $value );
		$perm->setType( $type );
		$perm->setRole( $role );
		
		$this->_service->permissions->insert($fileId, $perm);
	}
	


	public function getFileIdByName( $name ) {
		$files = $this->_service->files->listFiles();
		foreach( $files['items'] as $item ) {
			if( $item['title'] == $name ) {
				return $item['id'];
			}
		}
		
		return false;
	}
	
}


// if( $_SERVER['argc'] != 2 ) {
	// echo "ERROR: no file selected\n";
	// die();
// }

//$path = $filename;//$_SERVER['argv'][1];

printf( "Uploading to Google Drive\n", $path );

$service = new DriveServiceHelper( CLIENT_ID, SERVICE_ACCOUNT_NAME, KEY_PATH );

$folderId = $service->getFileIdByName( BACKUP_FOLDER );

if( ! $folderId ) {
	echo "Creating folder...\n";
	$folderId = $service->createFolder( BACKUP_FOLDER );
	$service->setPermissions( $folderId, SHARE_WITH_GOOGLE_EMAIL );
}

$fileParent = new Google_ParentReference();
$fileParent->setId( $folderId );

$fileId = $service->createFileFromPath( $path, $path, $fileParent );

printf( "File: %s created\n", $fileId );

$service->setPermissions( $fileId, SHARE_WITH_GOOGLE_EMAIL );

echo "file is downloaded and shared ";

//exec('rm $path');

?>
