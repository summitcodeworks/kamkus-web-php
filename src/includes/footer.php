    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <h3>About Kamkus College of Law</h3>
                    <div class="footer-logo">
                        <img src="<?php echo $base_url; ?>src/assets/public/LOGO.png" alt="Kamkus College of Law Logo">
                        <div>
                            <h4>Kamkus College of Law</h4>
                            <p>"An ISO Certified Institution"</p>
                        </div>
                    </div>
                    <p>Kamkus College of Law, established in 2007, stands as a premier educational institution managed by Bhagirath Sewa Sansthan. Our mission is to provide high-quality legal education that combines theoretical knowledge with practical training, ethical values, and social responsibility.</p>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul class="link-columns">
                        <li><a href="<?php echo $base_url; ?>src/pages/about/college.php"><i class="fas fa-angle-right"></i> About Us</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/academics/academics.php"><i class="fas fa-angle-right"></i> Academics</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/infrastructure/seminar-hall.php"><i class="fas fa-angle-right"></i> Infrastructure</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/committees/environmental.php"><i class="fas fa-angle-right"></i> Committees</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/about/rules.php"><i class="fas fa-angle-right"></i> Rules & Regulations</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/about/chief-mentor.php"><i class="fas fa-angle-right"></i> Chief Mentor</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/about/principal.php"><i class="fas fa-angle-right"></i> Principal's Desk</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/about/affiliation.php"><i class="fas fa-angle-right"></i> Affiliation</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/contact.php"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                        <li><a href="<?php echo $base_url; ?>src/pages/about/code-of-conduct.php"><i class="fas fa-angle-right"></i> Code of Conduct</a></li>
<!--                        <li><a href="--><?php //echo $base_url; ?><!--gallery.php"><i class="fas fa-angle-right"></i> Gallery</a></li>-->
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <ul class="contact-info-list">
                        <li><i class="fas fa-map-marker-alt"></i> <a href="https://maps.google.com/?q=B+Block,+Sector+23,+Sanjay+Nagar,+Ghaziabad,+Uttar+Pradesh,+201002" target="_blank">B Block, Sector 23, Sanjay Nagar, Ghaziabad, Uttar Pradesh, 201002</a></li>
                        <li><i class="fas fa-phone"></i> <a href="tel:+919310006444">+91 93100 06444</a>, <a href="tel:+918737906444">+91 87379 06444</a></li>
                        <li><i class="fas fa-envelope"></i> <a href="mailto:kamkus.law@gmail.com">kamkus.law@gmail.com</a></li>
                    </ul>
                    <div class="social-media">
                        <h4>Connect With Us</h4>
                        <div class="social-icons">
                            <a href="https://www.facebook.com/share/18apJYjE6w/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/kamkus_official?igsh=cXAzejEzbjYweWlt" class="instagram"><i class="fab fa-instagram"></i></a>
                            <a href="https://whatsapp.com/channel/0029Vb0YWnM77qVYk6ajup2N" class="whatsapp"><i class="fab fa-whatsapp"></i> Join our channel</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="copyright-text">
                    <p>&copy; <?php echo date('Y'); ?> Kamkus College of Law. All Rights Reserved.</p>
                    <p>Designed and maintained by Techpro IT Solutions</p>
                </div>
                <div class="terms">
                    <a href="<?php echo $base_url; ?>privacy-policy.html">Privacy Policy</a>
                    <a href="<?php echo $base_url; ?>terms-of-use.html">Terms of Use</a>
                </div>
                <div class="visitors">
                    <span>Visitors: <?php echo (isset($visitor_count)) ? $visitor_count : '8125'; ?></span>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo $base_url; ?>src/scripts/js/main.js"></script>
    <script src="<?php echo $base_url; ?>src/scripts/js/carousel.js"></script>
</body>
</html> 