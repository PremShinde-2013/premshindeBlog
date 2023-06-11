<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        <?php
        if (isset($view))
        {
            if ($view == "index")
            {
                echo "PremBlog - Login";
            } elseif ($view == "dashboard")
            {
                echo "PremBlog - Dashboard";
            } elseif ($view == "add_category")
            {
                echo "PremBlog - Add category";
            } elseif ($view == "manage_category")
            {
                echo "PremBlog - Manage category";
            } elseif ($view == "add_post")
            {
                echo "PremBlog - Add post";
            } elseif ($view == "manage_post")
            {
                echo "PremBlog - Manage post";
            }
        }
        ?>
    </title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../public/assets/images/favicon.ico" />
    <style>
        .alert {
            padding: 12px;
            color: white;
            border-radius: 10px;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>
</head>