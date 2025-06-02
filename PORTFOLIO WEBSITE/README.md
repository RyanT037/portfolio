# My Portfolio Website

A professional portfolio website for software developers, built with PHP, HTML, CSS, and JavaScript.

## Features

- Responsive design that works on all devices
- Dynamic content management through PHP
- Interactive UI elements with JavaScript
- PHP contact form with validation
- Dark/light theme toggle
- Project filtering and animations
- Experience timeline
- Skills showcase with progress indicators

## Project Structure

```
├── index.php               # Main entry point
├── 404.php                 # Custom 404 error page
├── .htaccess               # Apache configuration
├── assets/                 # Static assets
│   ├── css/                
│   │   └── styles.css      # Main stylesheet
│   ├── js/                 
│   │   └── main.js         # JavaScript functionality
│   ├── images/             # Image files
│   └── files/              # Downloadable files (resume)
└── includes/               # PHP partials
    ├── header.php          # Site header
    ├── footer.php          # Site footer
    ├── hero.php            # Hero section
    ├── about.php           # About section
    ├── skills.php          # Skills section
    ├── projects.php        # Projects section
    ├── experience.php      # Experience timeline
    └── contact.php         # Contact form
```

## Setup and Installation

1. Ensure you have a PHP-enabled web server (Apache/WAMMP)
2. Clone or download this repository to your web directory
3. Customize content in the PHP files to match your personal information
4. Add your profile images to `assets/images/` directory
5. Add your resume to `assets/files/` directory
6. Test the contact form to ensure it's working correctly

## Customization

- Update personal information in `index.php`
- Replace profile images in `assets/images/`
- Add your own projects to the projects section
- Update skills to match your background
- Modify color scheme in `assets/css/styles.css` (look for CSS variables at the top)

## License

MIT License