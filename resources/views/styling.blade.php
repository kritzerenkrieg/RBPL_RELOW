<!DOCTYPE html>
<html>
<head>
<!-- Required meta tags -->

<meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

 <!-- Bootstrap JavaScript Libraries -->
 <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
      integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
      crossorigin="anonymous"
    ></script>


    <script src="https://code.jquery.com/jquery-3.7.0.slim.js"
    integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c="
    crossorigin="anonymous"></script>

    <!-- Bootstrap CSS v5.2.1 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT"
      crossorigin="anonymous"
    />

    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      rel="stylesheet"
    />
    <!--<script>
      function showhide() {
        var x = document.getElementById("formPassword");
        var show_eye = document.getElementById("show_eye");
        var hide_eye = document.getElementById("hide_eye");
        hide_eye.classList.remove("d-none");
        if (x.type === "password") {
          x.type = "text";
          show_eye.style.display = "none";
          hide_eye.style.display = "block";
        } else {
          x.type = "password";
          show_eye.style.display = "block";
          hide_eye.style.display = "none";
        }
      }
    </script>-->

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="style-signup.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />

<style>

  .stock {
    background-color: #EAEDFA;
  }


  .sign-up-user {
    font-family: "Poppins", sans-serif;
  }

  .container-1 {
    padding-top: 1.25rem;
  }

  .container-2 {
    gap: 32px;
  }

  a:link { text-decoration: none; }
  a:visited { text-decoration: none; }
  a:hover { text-decoration: none; }
  a:active { text-decoration: none; }

  .button-w-icon .button-text {
    font-size: 13px;
    font-weight: 600;
    color: #1e3492;
  }

  .button-w-icon .material-symbols-outlined {
    font-size: 16px;
    padding-top: 2.45px;
  }

  .title {
    gap: 0px;
  }

  .title .sub-title {
    font-size: 11px;
    font-weight: 400;
    font-family: poppins;
    color: #8A8A8A;
  }

  .title .main-title {
    font-size: 19px;
    font-weight: 700;
    font-family: poppins;
  }

  .form-cta-control {
    gap: 16px;
  }

  /* .container-3 {
    gap: 8px;
} */

  .form-sign-up {
    font-size: 13px;
    font-weight: 500;
  }

  .form-control {
    font-size: 13px;
  }

  .cta {
    gap: 8px;
  }

  .material-symbols-outlined {
    color: #000;
    -webkit-text-stroke-width: 0.5px;
    -webkit-text-stroke-color: #000;
  }

  .button-wo-icon {
    border-radius: 4px;
    border-color: transparent;
    background-color: #2a49ce;
    color: #eaedfa;
    font-weight: 600;
    padding-top: 6px;
    padding-bottom: 6px;
    font-size: 13px;
  }

  .zrayacenter{
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .zrayastyle {
    border-radius: 4px;
    border-color: transparent;
    background-color: #ffffff;
    color: #2a49ce;
    outline: 2px solid #2a49ce;
    font-weight: 600;
    font-family: poppins;
    padding: 6px;
    padding-left: 5vh;
    padding-right: 5vh;
    font-size: 13px;
    width: 35vh;
    margin: 16px;
  }

  .card-header{
    background-color: white;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .card-font{
    font-family: poppins;
    font-weight: bold;
  }

  .button-wo-icon:hover {
    background-color: #2642bb;
    transition: 0.2s;
  }

  .info-text {
    align-items: center;
    gap: 4px;
    font-weight: 500;
    font-size: 13px;
  }

  .info-text .info-text-2 {
    font-weight: 600;
    color: #2a49ce;
    font-size: 13px;
  }

  .no-space {
    display: block;
  }

  .form-1 {
  position: relative;
  }

  .edit-link {
  position: absolute;
  bottom: 10px;
  right: 10px;
  color: blue;
  text-decoration: none;
  cursor: pointer;
  }

  .form-2 {
  position: relative;
  }

  .edit-link2 {
  position: absolute;
  top: 0;
  right: 0;
  color: blue;
  text-decoration: none;
  cursor: pointer;
  }

  .form-3 {
  position: relative;
  }

  .edit-link3 {
  position: absolute;
  top: 0;
  right: 0;
  color: blue;
  text-decoration: none;
  cursor: pointer;
  }

  .form-4 {
  position: relative;
  }

  .edit-link4 {
  position: absolute;
  top: 0;
  right: 0;
  color: blue;
  text-decoration: none;
  cursor: pointer;
  }

  .navigation {
    gap: 20px;
  }

  .bton-wo-icon {
    border-radius: 4px;
    border-color: transparent;
    background-color: transparent;
    color: #eaedfa;
    font-weight: 600;
    font-size: 13px;
  }


  .nav-text-title {
    font-size: 11px;
    color: #545454;
  }

  /* .material-icons {
    color: #B0B0B0;
  } */

  .navbar {
    background-color: #ffffff;
    box-shadow: 0 0px 8px rgba(0, 0, 0, 0.25);
    height: 72px;
  }

  .nv {
    color: #b0b0b0;
  }

  .about-wrp {
    gap: 100px;
  }

  .about-header-text {
    padding-top: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
  }

  .about-footer {
    border-top: 8px solid #EAEDFA;
    border-bottom: 80px solid #fff;
  }

  .about-footer-text {
    padding-top: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
  }

  .office-img-footer {
    padding-left: 16px;
    padding-right: 16px;
  }

  .about-hubungi {
    padding-left: 16px;
    padding-right: 16px;
  }

  .about-content {
    border-top: 8px solid #EAEDFA;
  }

  .about-content-text {
    padding-top: 16px;
    padding-bottom: 16px;
    padding-left: 16px;
    padding-right: 16px;
  }

  .read-more-content {
    padding-left: 16px;
    padding-right: 16px;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.3s ease;
  }

  .read-more-content:target {
    max-height: 1000px;
    transition: max-height 0.3s ease;
  }

  .read-more-button {
    cursor: pointer;
    color: #2a49ce;
    display: block;
  }


  .tentang-kami {
    padding-top: 8px;
    padding-bottom: 8px;
    margin-top: 0%;
    margin-bottom: 0%;
  }

  .stok-dash {
    margin-top: 0%;
    padding-top: 32px;
    padding-bottom: 24px;
    /* padding-left: 16px;
    padding-right: 16px; */
  }

  .cont-1-dash {
    margin-top: 0%;
    /* padding-left: 8px;
    padding-right: 8px; */
    /* align-content: center; */
    align-items: center;
  }

  .profile-text {
    margin-top: 0%;
  }

  .owner-name {
    margin-top: 0%;
    margin-bottom: 0%;
  }

  .owner-type {
    margin-top: 0%;
    margin-bottom: 0%;
  }

  .button-w-place {
    padding-right: 8px;
  }

  .button-w-place .material-icons {
    padding: 20%;
    border-radius: 100%;
    box-shadow: 0 0px 8px rgba(0, 0, 0, 0.10);
    background-color: #ffffff;
  }



  /* .container-1-dash {
    align-items: center;
  } */




  /* .nav-link:active::before {
    color: #2A49CE;
  } */

  /* .nav-link.active {
    color: #2A49CE;
  } */


  /* .material-icons:hover {
    color: #b0b0b0;
  } */


</style>

</head>
</html>
