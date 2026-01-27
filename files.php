<?php
if(!empty($_GET['q'])){$_GET['file_id']=$_GET['q'];}
$phrase="";
include("g3.php");
$st='<style>nav{padding-left:35px !important}nav,center{line-height:1.5;width:100%;background:#8f8;padding:0.8em;margin:-8px}body{background:#dfd}*{font-family:monospace}</style><nav>';
#$selfharm=['-1'];
#$nsfw=['124','125','156','228'];
if(!empty($_GET['file_id'])){
if(empty($_GET['w'])){
#if(in_array($_GET['file_id'],$selfharm)){exit($st."This file is marked as containing self harm. Bypass this warning at your own risk. (adding &w=1 to end of url)</nav>");}
#if(in_array($_GET['file_id'],$nsfw)){exit($st."This file has been marked NSFW <a href='files.php?file_id=".htmlspecialchars($_GET['file_id'])."&w=1'>View anyway</a></nav>");}
}}

if(file_get_contents("unlock.txt")=='"'){exit("Unable to connect to database");}
function ipcheck(){
#Fixed poor validation
if($_REQUEST['o']<time() && crc32(base64_encode("9u9dyi".$_COOKIE['o']))==$_COOKIE['crc']){return "1";}
elseif(!empty($_COOKIE['9u9dyi'])){return "1";}return "2";}
if(ipcheck()==2&&empty($_GET['file_id'])){echo"<meta http-equiv='refresh' content='0 g3.php?next=testx.php'/>";exit('Redirect');}
if($_GET['9u9dyi']=="t"){setcookie("9u9dyi","t");$_COOKIE['9u9dyi']='t';}$x=0;

function diff($t){
#This function calculates the difference between filetime and now, using D/H/M/S.
$s = time() - $t;
if($s<60){return 'Uploaded';}
elseif($s<3600){$z = (($s-($s%60))/60).'m';}
elseif($s<86400){$z = (($s-($s%3600))/3600).'h '.((($s-($s%60))/60)%60).'m ';}
elseif(1==1){$z = (($s-($s%86400))/86400)."d ".((($s-($s%3600))/3600)%24).'h '.((($s-($s%60))/60)%60).'m';}
return $z;
}

// Function to fetch uploaded files from the database
function getUploadedFiles() {
    $db = new SQLite3('uploads.db');

    // Prepare SQL
    if(isset($_GET['s'])){switch($_GET['s']){
case 6:$z='time DESC';break;case 5:$z='time';break;
case 4:$z='size DESC';break;case 3:$z='size';break;
case 2:$z='name DESC';break;case 1:$z='name';break;
default:$z='time DESC';break;}}else{$z='time DESC';}

    $stmt = $db->prepare('SELECT id,name,size,time FROM uploads ORDER by '.$z);
    $result = $stmt->execute();

    $files = [];
    // Fetch uploaded files
    while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
        $files[] = $row;
    }

    // Close database connection
    $db->close();

    return $files;
}

// Function to create the SQLite database and table if they don't exist
function createDatabaseAndTableIfNeeded() {
    $db = new SQLite3('uploads.db');

    // Create uploads table if it doesn't exist
    $db->exec('CREATE TABLE IF NOT EXISTS uploads (
        id INTEGER PRIMARY KEY,
        name TEXT,
        type TEXT,
        size INTEGER,
        time INTEGER,
        content BLOB
    )');

    // Close database connection
    $db->close();
}

    // Call function to create database and table if needed
    if (!file_exists("uploads.db")){
    createDatabaseAndTableIfNeeded();}
    
// Function to download a file
function downloadFile($fileId,$st) {
    // Database connection
    $db = new SQLite3('uploads.db');

    // Prepare SQL statement
    $stmt = $db->prepare('SELECT * FROM uploads WHERE id = :id');
    $stmt->bindValue(':id', $fileId, SQLITE3_INTEGER);
    $result = $stmt->execute();

    // Fetch file details
    $file = $result->fetchArray(SQLITE3_ASSOC);

    // Close database connection
    $db->close();
    if(isset($file['size'])){
    // Set headers for file download
    header('Content-Type: ' . (($file['type']=='application/octet-stream'||$file['type']=='application/x-shellscript')?'text/plain':$file['type']));
    header('Content-Disposition: inline; filename="' . $file['name'] . '"');
    header('Content-Length: ' . $file['size']);

    // Output file content
    echo $file['content'];}
    else{echo $st.'Exact file unavailable</nav>';}
}

// Function to delete a file
function deleteFile($fileId) {
    // Database connection
    $db = new SQLite3('uploads.db');

    // Prepare SQL statement
    $stmt = $db->prepare('DELETE FROM uploads WHERE id = :id');
    $stmt->bindValue(':id', $fileId, SQLITE3_INTEGER);
    $result = $stmt->execute();

    // Close database connection
    $db->close();

    return $result;
}

// Check if a file download request was made
if (!empty($_GET['file_id'])) {
    downloadFile($_GET['file_id'],$st);
    exit;
}
// Check if a file delete request was made
if (isset($_GET['delete_id'])) {
    if(!empty($_COOKIE['9u9dyi'])){deleteFile($_GET['delete_id']);}
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"]=="POST") {

    // Database connection
    $db = new SQLite3('uploads.db');
    
    // Loop through each uploaded file, if uploaded
    if (!empty($_FILES['files']['name'][0])) {
    foreach ($_FILES['files']['name'] as $key => $fileName) {
        // Get file details
        $fileType = $_FILES['files']['type'][$key];
        $fileTmpName = $_FILES['files']['tmp_name'][$key];
        $fileError = $_FILES['files']['error'][$key];
        $fileSize = $_FILES['files']['size'][$key];
        filter($fileName,2);
        // Read file contents
        $fileContent = file_get_contents($fileTmpName);

        // Prepare SQL statement
        $stmt = $db->prepare('INSERT INTO uploads (name, type, size, time, content) VALUES (:name, :type, :size, :time, :content)');
        $stmt->bindValue(':name', $fileName, SQLITE3_TEXT);
        $stmt->bindValue(':type', $fileType, SQLITE3_TEXT);
        $stmt->bindValue(':size', $fileSize, SQLITE3_INTEGER);
        $stmt->bindValue(':time', time(), SQLITE3_INTEGER);
        $stmt->bindValue(':content', $fileContent, SQLITE3_BLOB);

        // Execute SQL statement
        $result = $stmt->execute();

        if (!$result) {
            echo "Error uploading file: " . $fileName . "<br>";
        }
    }

    echo "Files uploaded successfully!";$x+=1;
    }
    
    // Close database connection
    $db->close();
}
// Check if there are uploaded files to display
$uploadedFiles = getUploadedFiles();
?>
<!DOCTYPE html>
<html lang="en">
<style>
tr,td,input{border:2px solid #fbf;border-radius:5px;padding:0.3em}body{color:#930;font-family:Arial,sans-serif;margin:2%;padding:2%;background-color:#dfd}.container{max-width:600px;margin:50px auto;background-color:#fff;border-radius:10px;padding:20px;box-shadow:0 0 10px rgba(0,0,0,.1)}.container form{margin-bottom:20px}.container input[type="file"]{margin-bottom:10px}.container h2{margin-bottom:10px}.container ul{list-style:none;padding:0}.container ul li{margin-bottom:5px}
</style>
<body>
<p>Note: Some .mp4 media uses HEVC. For playing them, consider playing in VLC / Windows Media Player, or make "hevc.enabled" true and restart Tor. I wish Tor will re-enable HEVC.</p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        Select file(s) to upload:
        <input type="file" name="files[]" id="files" multiple>
        <input type="submit" value="Upload File (max 49MB)" name="submit">
    </form>
        <h2>Uploaded Files:</h2>
        <table>
        <thead><td>Controls</td><td>Name <a href="/testx.php?s=1">Up</a> | <a href="/testx.php?s=2">Down</a></td>
        <td>Bytes <a href="/testx.php?s=3">Up</a> | <a href="/testx.php?s=4">Down</a></td>
        <td>Upload time <a href="/testx.php?s=5">Up</a> | <a href="/testx.php?s=6">Down</a></td></thead>
            <?php foreach ($uploadedFiles as $file): ?>
                <tr>
                    <td><a href="?q=<?php echo $file['id']; ?>" target="_blank">⬇️ <?php echo $file['id']; ?></a>
  <?php if($_COOKIE['9u9dyi']=="t"){echo' *** <a href="?delete_id='.$file['id'].'">❌</a></td>';} ?>
                    <td><?php echo htmlspecialchars($file['name']); ?></td>
                    <td><?php echo number_format($file['size']); ?></td>
                    <td><span><?php echo diff($file['time']); ?></span></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>
<?php 
foreach($uploadedFiles as $file){break;}
if($x==1){$write='006-<i>'.date("m-jS H:i:s").'</i> |<span style="color:'.htmlspecialchars($_COOKIE['col']??'#88ff88').'">System: <a href="/?q='.$file['id'].'" target="_blank">'.htmlspecialchars($file['name']).'</a></span>'."
  
";file_put_contents("1id8sjl.txt",$write,FILE_APPEND);}
?>
