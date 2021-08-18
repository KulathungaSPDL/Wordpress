<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    wp_head();
    ?>
</head>

<body>

    <!-- This is header section -->
    <header>
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location' => 'top-menu',
                                'menu_class' => 'top-bar'
                            )
                        );
                    ?>
                </div>
            </div>
        </div>
    </header>
