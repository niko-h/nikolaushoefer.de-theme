<!--
/***************************
*
* Website
*
**************************/
-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">        
    <title><?php echo getSiteinfo('site_title') ?></title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="themes/<?php echo getSiteinfo('site_theme') ?>/static/css/style.css"/>

</head>

<body>
    <div id="mother">
        <!-- <div class="languages"><?php echo getLanguages() ?></div> -->
        

        <div class="headlogo">
            <a href="https://github.com/niko-h"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://camo.githubusercontent.com/567c3a48d796e2fc06ea80409cc9dd82bf714434/68747470733a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f6461726b626c75655f3132313632312e706e67" alt="Fork me on GitHub" data-canonical-src="https://s3.amazonaws.com/github/ribbons/forkme_left_darkblue_121621.png"></a>
            <?php echo file_get_contents('themes/'.getSiteinfo('site_theme').'/static/img/nh-logo-2015-rounded-gaps.svg'); ?>
        </div>

        <div class="head">        
            <a class="logolink" href="#">
                <?php echo file_get_contents('themes/'.getSiteinfo('site_theme').'/static/img/nh-logo-2015-rounded-gaps.svg'); ?>
            </a>
            <div class="menu">
                <ul>
                    <?php
                        //Call first site in case no site is defined
                        if(!isset($_GET['page']) || $_GET['page'] == "") {
                            echo getMenu();
                        } else {
                            echo getMenu($_GET['page']);
                        }
                    ?>
                    <!-- <li><a href="#" class="active">#rbeit</a></li>
                    <li><a href="#">#ndreres</a></li>
                    <li><a href="#">#mpressum</a></li> -->
                </ul>
            </div>
        </div>

        <div class="main">
            <div class="content">

                <?php
                    //Call first site in case no site is defined
                    // if(!isset($_GET['page']) || $_GET['page'] == "") {
                    //     $e = getContent(getFirstItemID())->entry;
                    //     $f = json_decode($e->content, true);
                    //     require_once('templates/'.$e->template.'.php');            
                    // } else {
                    //     $e = getContent()->entry;
                    //     $f = json_decode($e->content, true);
                    //     require_once('templates/'.$e->template.'.php');    
                    // }
                ?>

                <?php
                    //Call first site in case no site is defined
                    if(!isset($_GET['page']) || $_GET['page'] == "") {
                        echo getContent(getFirstItemID());
                    } else {
                        echo getContent();
                    }
                ?>
                
            </div>
        </div>
    </div>

    <!--*************
        * JavaScript
        *************-->

    <!-- Load jQuery -->
    <script src="login/lib/jquery.min.js"></script>
    <script src="login/lib/jquery.cookie.js"></script>
    <script type="text/javascript" src="themes/<?php echo getSiteinfo('site_theme') ?>/static/js/master.js"></script>

</body>
