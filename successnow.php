<?php session_start(); ?>
<?php require_once 'emails.php'; ?>
<?php
if (isset($_POST['razorpay_payment_id'])) {
  if (isset($_POST) && isset($_POST['razorpay_payment_id'])) {

    clientMail($_SESSION['formData']);
    adminMail($_SESSION['formData']);
    
    $_SESSION['razorpay_payment_id'] = $_POST['razorpay_payment_id'];

    $razorpay_payment_id = $_POST['razorpay_payment_id'];

    header("location:success.php?pyiDs=".$razorpay_payment_id);
  }
}else if (isset($_POST['freecons'])) {
  if (isset($_POST['freecons']) && isset($_POST['freeconsID'])) {

    clientMail($_SESSION['formData']);
    adminMail($_SESSION['formData']);

    $one1 = $_POST['freeconsID'];
    $one2 = $_SESSION['freeconsID'];

    header("location:success.php?pyiDsone=".$one1."&pyiDstwo=".$one2);
  }
}else{
  header("location:appointment.php");
}
?>