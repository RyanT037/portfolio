<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description; ?>">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Header with navigation -->
    <header class="header" id="header">
        <div class="container header-container">
            <a href="#home" class="logo">
                <span class="logo-text">RT</span>
            </a>
            
            <nav class="nav" id="nav-menu">
                <div class="nav-content">
                    <ul class="nav-list">
                        <?php foreach($sections as $id => $name): ?>
                            <li class="nav-item">
                                <a href="#<?php echo $id; ?>" class="nav-link"><?php echo $name; ?></a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    
                    <div class="nav-buttons">
                        <button id="theme-toggle" class="theme-toggle" aria-label="Toggle theme">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                        </button>
                        <a href="assets/files/CV_FOR_TSELE_RYAN_N.pdf" class="btn btn-outline" download>Resume</a>
                    </div>
                    
                    <div class="nav-close" id="nav-close">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </nav>
            
            <div class="nav-toggle" id="nav-toggle">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>