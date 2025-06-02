/*=============== MAIN JS ===============*/
document.addEventListener('DOMContentLoaded', function() {
    /*=============== MENU SHOW/HIDE ===============*/
    const navMenu = document.getElementById('nav-menu'),
          navToggle = document.getElementById('nav-toggle'),
          navClose = document.getElementById('nav-close'),
          navLinks = document.querySelectorAll('.nav-link');
    
    /* Menu show */
    if (navToggle) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.add('show-menu');
        });
    }
    
    /* Menu hide */
    if (navClose) {
        navClose.addEventListener('click', () => {
            navMenu.classList.remove('show-menu');
        });
    }
    
    /* Hide menu when clicking on links */
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.remove('show-menu');
        });
    });
    
    /*=============== CHANGE HEADER BACKGROUND ON SCROLL ===============*/
    function scrollHeader() {
        const header = document.getElementById('header');
        if (window.scrollY >= 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    }
    
    window.addEventListener('scroll', scrollHeader);
    
    /*=============== DARK/LIGHT THEME ===============*/
    const themeToggle = document.getElementById('theme-toggle');
    const htmlElement = document.documentElement;
    
    // Check initial theme preference
    const savedTheme = localStorage.getItem('selected-theme');
    if (savedTheme) {
        htmlElement.setAttribute('data-theme', savedTheme);
    }
    
    themeToggle.addEventListener('click', () => {
        const currentTheme = htmlElement.getAttribute('data-theme') || 'light';
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        
        htmlElement.setAttribute('data-theme', newTheme);
        localStorage.setItem('selected-theme', newTheme);
    });
    
    /*=============== SKILLS TABS ===============*/
    const tabs = document.querySelectorAll('.tab-item');
    const tabContents = document.querySelectorAll('.skills-group');
    
    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            // Remove active class from all tabs and contents
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('active'));
            
            // Add active class to clicked tab and corresponding content
            tab.classList.add('active');
            tabContents[index].classList.add('active');
        });
    });
    
    /*=============== FILTER PROJECTS ===============*/
    const filterButtons = document.querySelectorAll('.filter-button');
    const projectCards = document.querySelectorAll('.project-card');
    
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            
            // Add active class to clicked button
            button.classList.add('active');
            
            const filterValue = button.getAttribute('data-filter');
            
            projectCards.forEach(card => {
                const categoryValue = card.getAttribute('data-category');
                
                if (filterValue === 'all' || filterValue === categoryValue) {
                    card.style.display = 'block';
                    setTimeout(() => {
                        card.style.opacity = '1';
                        card.style.transform = 'scale(1)';
                    }, 100);
                } else {
                    card.style.opacity = '0';
                    card.style.transform = 'scale(0.8)';
                    setTimeout(() => {
                        card.style.display = 'none';
                    }, 300);
                }
            });
        });
    });
    
    /*=============== SCROLL ANIMATIONS ===============*/
    // Observer for skill progress bars
    const skillProgress = document.querySelectorAll('.skill-item');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-progress', 'in-view');
                
                // Set custom progress width
                const progressBar = entry.target.querySelector('.skill-progress');
                const percentage = entry.target.querySelector('.skill-percentage').textContent;
                progressBar.style.setProperty('--progress', percentage);
            }
        });
    }, { threshold: 0.5 });
    
    skillProgress.forEach(item => {
        observer.observe(item);
    });
    
    // Scroll to section smoothly when clicking on scroll indicator
    const scrollIndicator = document.querySelector('.scroll-indicator');
    if (scrollIndicator) {
        scrollIndicator.addEventListener('click', (e) => {
            e.preventDefault();
            const targetSection = document.querySelector(scrollIndicator.querySelector('a').getAttribute('href'));
            targetSection.scrollIntoView({ behavior: 'smooth' });
        });
    }
});