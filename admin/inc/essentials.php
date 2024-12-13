<?php

define('SITE_URL', 'http://127.0.0.1/RoomReservation/');
define('ABOUT_IMG_PATH', SITE_URL . 'images/abouts/');
define('HERO_IMG_PATH', SITE_URL . 'images/hero/');



define('UPLOAD_IMAGE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/RoomReservation/Images/');
define('ABOUT_FOLDER', 'abouts/');
define('HERO_FOLDER', 'hero/');


function adminLogin()
{
    session_start();
    if (!(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true)) {
        echo "<script>
        window.location.href='index.php';
        </script>";
        exit;
    }
    // session_regenerate_id(true);
}

function redirect($url)
{
    echo "<script>
    window.location.href='$url';
    </script>";
    exit;
}

function alert($type, $msg)
{
    $bs_class = ($type == "success") ? "alert-success" : "alert-danger";

    echo <<<ALERT
    <div class="alert $bs_class alert-dismissible fade show index-alert" role="alert" id="auto-close-alert">
        $msg
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <script>
        setTimeout(() => {
            const alert = document.getElementById('auto-close-alert');
            if (alert) {
                alert.classList.remove('show');
                alert.classList.add('fade');
                setTimeout(() => alert.remove(), 150); // Remove element after fade out
            }
        }, 5000); // 5 seconds delay
    </script>
    ALERT;
}

function uploadImage($image, $folder)
{
    $valid_mime = ['image/jpeg', 'image/png', 'image/webp'];
    $img_mime = $image['type'];

    if (!in_array($img_mime, $valid_mime)) {
        return 'inv_img'; // Invalid image mime or format
    } else if (($image['size'] / (1024 * 1024)) > 2) {
        return 'inv_size'; // Invalid size greater than 2mb
    } else {
        $ext = pathinfo($image['name'], PATHINFO_EXTENSION);
        $rname = 'IMG_' . random_int(11111, 99999) . ".$ext";
        $img_path = UPLOAD_IMAGE_PATH . $folder . $rname;
        if (move_uploaded_file($image['tmp_name'], $img_path)) {
            return $rname; // Return the new file name
        } else {
            return 'upd_failed'; // Upload failed
        }
    }
}

function deleteImage($image, $folder)
{
    if (unlink(UPLOAD_IMAGE_PATH . $folder . $image)) {
        return true;
    } else {
        return false;
    }
}
