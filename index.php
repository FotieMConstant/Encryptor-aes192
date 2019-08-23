<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/sfast-1.0.0-Beta/sfast.min.css">
    <meta http-equiv="refresh" content="2;home.php" />
    <link rel='shortcut icon' type='image/x-icon' href='assets/images/favicon.png' />

    <title>Please Wait...</title>

    <style media="screen">
          #rounded_img{
            border-radius: 100%;
            margin-top: 10%;
          }

    </style>
  </head>
  <body>

        <style>

        body{background:#ECF0F1}

    .load{position:absolute;top:50%;left:50%;transform:translate(-50%, -50%);
    /*change these sizes to fit into your project*/
    width:100px;
    height:100px;
    }
    .load hr{border:0;margin:0;width:40%;height:40%;position:absolute;border-radius:50%;animation:spin 2s ease infinite}

    .load :first-child{background:#19A68C;animation-delay:-1.5s}
    .load :nth-child(2){background:#F63D3A;animation-delay:-1s}
    .load :nth-child(3){background:#FDA543;animation-delay:-0.5s}
    .load :last-child{background:#193B48}

    @keyframes spin{
    0%,100%{transform:translate(0)}
    25%{transform:translate(160%)}
    50%{transform:translate(160%, 160%)}
    75%{transform:translate(0, 160%)}
    }
        </style>

        <div class="load">
          <hr/><hr/><hr/><hr/>
        </div>


      </body>

    </html>
