<?php
$ad='9u9dyi';
if($_GET['delete']==$ad){setcookie("delete",$ad);$_COOKIE['delete']=$ad;}

function diff($t){
#This function calculates the difference between filetime and now, using D/H/M/S.
$s = time() - $t;
if($s<60){return 'Not long ago';}
elseif($s<3600){$z = (($s-($s%60))/60).'m';}
elseif($s<86400){$z = (($s-($s%3600))/3600).'h '.((($s-($s%60))/60)%60).'m ';}
elseif(1==1){$z = (($s-($s%86400))/86400)."d ".((($s-($s%3600))/3600)%24).'h '.((($s-($s%60))/60)%60).'m';}
return $z.' '.($s%60).'s  ago';
}

// Function to fetch uploaded files from the database
function getUploadedFiles() {
    $db = new SQLite3('uploads.db');

    // Prepare SQL statement
    $stmt = $db->prepare('SELECT * FROM uploads');
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
function downloadFile($fileId) {
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
    // Set headers
    header('Content-Type: ' . $file['type']);
    header('Content-Length: ' . $file['size']);
    // Output file content
    echo $file['content'];
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
if (isset($_GET['file_id'])) {
    downloadFile($_GET['file_id']);
    exit;
}
// Check if a file delete request was made
if (isset($_GET['delete_id'])) {
    if($_COOKIE['delete']==$ad){deleteFile($_GET['delete_id']);}
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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

    echo "Files uploaded successfully!";}
    
    // Close database connection
    $db->close();
}
// Check if there are uploaded files to display
$uploadedFiles = getUploadedFiles();
?>
<!DOCTYPE html>
<html lang="en">
<style>
table,tr,td,input{border:2px solid #930;border-collapse:collapse;padding:0.3em}body{color:#930;font-family:Arial,sans-serif;margin:2%;padding:2%;background-color:#dfd}.container{max-width:600px;margin:50px auto;background-color:#fff;border-radius:10px;padding:20px;box-shadow:0 0 10px rgba(0,0,0,.1)}.container form{margin-bottom:20px}.container input[type="file"]{margin-bottom:10px}.container h2{margin-bottom:10px}.container ul{list-style:none;padding:0}.container ul li{margin-bottom:5px}
</style>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="files[]" id="files" multiple>
        <input type="submit" value="Upload File" name="submit">
    </form>
        <h2>Uploaded Files:</h2>
        <table>
        <thead><td>Controls</td><td>Name</td><td>Size (B)</td><td>Upload time</td></thead>
            <?php foreach ($uploadedFiles as $file): ?>
                <tr>
                    <td><a href="?file_id=<?php echo $file['id']; ?>" target="_blank">⬇️</a>
  <?php if($_COOKIE['delete']==$ad){echo'<a href="?delete_id='.$file['id'].'">❌</a></td>';} ?>
                    <td><?php echo $file['name']; ?></td>
                    <td><?php echo $file['size']; ?></td>
                    <td><span><?php echo diff($file['time']); ?></span></td>
                </tr>
            <?php endforeach; ?>
        </table>
</body>
</html>
