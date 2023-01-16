<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body id="body">
    <header>
        <nav class="header-menu navbar bg-primary navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">


            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                    <?php wp_nav_menu(array('menu' => 'Menú principal')); ?> 
                
                    
                

                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="buscar..." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>

            </div>

        </nav>
    </header>
    <main>