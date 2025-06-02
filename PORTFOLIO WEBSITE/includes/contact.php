<section id="contact" class="contact section">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title">Contact</h2>
            <p class="section-subtitle">Get in touch</p>
        </div>
        
        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-card">
                    <i class="fas fa-envelope contact-icon"></i>
                    <h3 class="contact-title">Email</h3>
                    <p class="contact-data">tseleryan37@gmail.com</p>
                    <a href="mailto:tseleryan37@gmail.com" class="contact-button">
                        Write to me <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt contact-icon"></i>
                    <h3 class="contact-title">Location</h3>
                    <p class="contact-data">4 Dove Dale Road, Mt Hampden, Harare</p>
                    <a href="https://maps.google.com" target="_blank" class="contact-button">
                        View on map <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="contact-card">
                    <i class="fab fa-linkedin contact-icon"></i>
                    <h3 class="contact-title">LinkedIn</h3>
                    <p class="contact-data">Ryan Tsele</p>
                    <a href="https://www.linkedin.com/in/ryan-tsele-4a6a34306/" target="_blank" class="contact-button">
                        Connect <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="contact-card">
                    <i class="fab fa-whatsapp contact-icon"></i>
                    <h3 class="contact-title">WhatsApp</h3>
                    <p class="contact-data">Get in touch</p>
                    <a href="https://wa.me/c/263780047042" target="_blank" class="contact-button">
                        App me Today<i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            
            <div class="contact-form-container">
                <?php if($formSuccess): ?>
                    <div class="form-success">
                        <i class="fas fa-check-circle"></i>
                        <h3>Message sent successfully!</h3>
                        <p>Thank you for reaching out. I'll get back to you as soon as possible.</p>
                    </div>
                <?php else: ?>
                    <form action="<?php echo $_SERVER['PHP_SELF']; ?>#contact" method="post" class="contact-form">
                        <?php if($formError): ?>
                            <div class="form-error">
                                <p><?php echo $formError; ?></p>
                            </div>
                        <?php endif; ?>
                        
                        <div class="form-group">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" id="name" name="name" class="form-input" placeholder="Your name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" id="email" name="email" class="form-input" placeholder="Your email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message" class="form-label">Message</label>
                            <textarea id="message" name="message" class="form-textarea" placeholder="Your message" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary form-button">
                            Send Message <i class="fas fa-paper-plane"></i>
                        </button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>