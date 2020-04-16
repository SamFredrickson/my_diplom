<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../itnewssite/public/css/admin.css">
    <style>
        .form{

        display: flex;
        justify-content: center;
        align-items: center;
        height: 40vh;
        }

        form{

        width: 440px;
        height: 240px;
        background: linear-gradient(to top, #E4E4E4 20%, #FDFDFD 80%);
        box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }

        hr{
        width: 90%;
        color: #CBCBCB;
        }

        form div{

        text-align: center;
        margin-top: 2%;
        font-family: "Times New Roman";
        font-size: 18px;
        }

        form input[name = 'name']{

        margin-left: 5%;
        margin-top: 7%;
        }

        form input[type = 'submit']{

        float: right;
        margin-right: 23%;
        border: 0px;
        background: black;
        color: white;
        height: 25px;
        font-weight: bold;
        }

        form input[type='text']{

        height: 18px;
        }

        form input[type = 'password']{

        height: 18px;
        }

        .wrong{

        color: red;
        float: left;
        margin-left: 2%;
        margin-top: 5%;
}

    </style>
    <title>Login</title>
</head>
<body>
<div class="form">
    <?php $this->show(); ?>
</div>
</body>
</html>