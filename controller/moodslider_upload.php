
<?php

// constant for input key and allowed types for the file - it only allows xml

const InputKey = 'myfile';
const AllowedTypes = ['text/xml'];


// error handling - if no file has been choosen it dies and sends a "file missing message"

if (empty($_FILES[InputKey])) {
    die("File Missing!");
}

if ($_FILES[InputKey]['error'] > 0) {
    die("Handle the error!");
}

// if the type is not xml it aborts and send a " File type not allowed message"

if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
    die("File Type Not Allowed");
}


// variables for file name and the location of the file destination

$tmpFile = $_FILES[InputKey]['tmp_name'];

$dstFile = '../upload/' . $_FILES[InputKey]['name'];

// if the file did cannot go to the destination the programs dies

if (!move_uploaded_file($tmpFile, $dstFile)) {
    die("Handle Error");
}

// if the file exists at the location it sends a "success" message and navigates back to uploads

if (file_exists($dstFile)) {
    //echo "Success";
    //echo "<a href='../view/upload_page.php'>Back to uploads</a><br>";
    //}





$conn = new PDO('mysql:dbname=moodslider;host=localhost', 'root', '');

$sql = "TRUNCATE TABLE programme_list";
$statement = $conn->prepare($sql);
$statement->execute();






$xml = simplexml_load_file($dstFile) or die("Error: Cannot create object");
foreach ($xml->children() as $programmes) {

    

    $sql2 = $conn->prepare("INSERT INTO programme_list (programme_name, image, mood1, mood2, mood3, mood4) VALUES (:name, :image, :mood1, :mood2, :mood3, :mood4)");

    $sql2->bindParam(':name', $programmes->name);
    $sql2->bindParam(':image', $programmes->image);
    $sql2->bindParam(':mood1', $programmes->mood1, PDO::PARAM_INT);
    $sql2->bindParam(':mood2', $programmes->mood2, PDO::PARAM_INT);
    $sql2->bindParam(':mood3', $programmes->mood3, PDO::PARAM_INT);
    $sql2->bindParam(':mood4', $programmes->mood4, PDO::PARAM_INT);
    $sql2->execute();
 
}


header('location: ../index.php');
        exit;

}