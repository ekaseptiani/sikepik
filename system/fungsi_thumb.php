<?php

function UploadPanduan($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/panduan/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

function UploadSlide($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/slide/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

function UploadGaleri($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/galeri/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

function UploadWisata($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/wisata/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

function UploadHotel($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/hotel/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

function UploadRental($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/rental/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

function UploadSosmed($fupload_name){
  //direktori banner
  $vdir_upload = "../../../webmage/sosmed/";
  $vfile_upload = $vdir_upload . $fupload_name;

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);
  
}

?>
