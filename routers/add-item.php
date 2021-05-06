<?php

include '../includes/connect.php';

$name = $_POST['name'];
$price = $_POST['price'];

$target_dir = "../items/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$fileName= basename($_FILES["image"]["name"]);

$fileExt= explode('.', $fileName);
$fileExt= strtolower(end($fileExt));
$fileName= uniqid('', true) . "." . $fileExt;
$target_file= $target_dir . $fileName;

$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size
if ($_FILES["image"]["size"] > 5000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" and $imageFileType != "webp") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";

    ?>

    <script>
        // alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    </script>

    <?php

    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
//    echo "Sorry, your file was not uploaded.";

    ?>

    <script>
        alert("Sorry, your file was not uploaded.");
    </script>

    <?php

// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {

        $sql = "INSERT INTO items (name, price, image) VALUES ('$name', '$price', '$fileName')";
        $con->query($sql);

        ?>

        <script>
            alert("Item added.");
            location.replace("../admin-page.php");
        </script>

        <?php

    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
