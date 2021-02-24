<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" type="text/css" href="assets/css/home.css">
    <link rel="stylesheet" type="text/css" href="assets/css/digitalProfile.css">
    <link rel="stylesheet" type="text/css" href="assets/css/contactUs.css">

    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets\css\bootstrap.min.css">
</head>

<body>
    <section class="signin">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 login-form-container text-center">
                    <div class="login-form m-auto">
                        <a href="home"> <img src="https://s3-eu-west-1.amazonaws.com/lystley.com/home/login-logo.svg" alt="login-logo" /></a>
                       
                        <h1 class='Poppins-Light font-32 text-black mt-3'>Sign in</h1>
                        <form class="my-4">
                            <div class="form-group">
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-login-submit font-14 Poppins-SemiBold">Submit</button>
                        </form>
                        <div class="parting-line"><span class="font-16 Poppins-SemiBold">or</span></div>
                        <button type="submit" class="btn mb-4 btn-login-with-google font-11 Poppins-SemiBold"> <img src="assets/images/login/google-logo-icon-png-transparent-background-osteopathy-16.svg" alt="google-logo-icon" class="mx-2"/>Sign in with Google</button>
                        <a class="Poppins-SemiBold font-12 text-jungle-green forgot-password" href="#">Forgot password?</a>
                    </div>
                </div>
                <div class="col-md-6 p-0 login-form-bg">
                    <!-- <img src="assets/images/login/login-left.svg" alt="login-left" class="img-fluid" /> -->
                </div>
            </div>


        </div>
    </section>
</body>