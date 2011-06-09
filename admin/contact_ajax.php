<?php

/**
 * Called by AJAX to upload image from Contact page.
 * @file /admin/contact_ajax.php
 */

if (!current_user_can("edit_themes"))
    die("permission denied");

/**
 * Upload
 */
$file = wp_handle_upload($_FILES['file'], array('test_form' => false));

if (isset($file['error']))
    wp_die($file['error']);

/// Set url
$url = $file['url'];
/// Set file type
$type = $file['type'];
/// Set file location
$file = $file['file'];
/// Set filename
$filename = basename($file);

/// Construct the object array
$object = 
    array
    (
        'post_title' => $filename,
        'post_content' => $url,
        'post_mime_type' => $type,
        'guid' => $url
    );

/// Save the data
$id = wp_insert_attachment($object, $file);
/// Update metadata
wp_update_attachment_metadata($id, wp_generate_attachment_metadata($id, $file));

$thumbnail = wp_get_attachment_image_src($id, 'thumbnail');

echo json_encode(
    array
    (
        'id' => $id,
        'url' => $url,
        'thumbnail' => $thumbnail[0]
    ));