        </div> <!-- /.container-fluid -->
        <footer class="tpchr-footer container-fluid">
            <div class="tpchr-footer-bottom row">
                <div class="tpchr-footer-bottom-phone col-sm-4">
                    <a href="tel:<?php Customizer_Setting_Out('TPCHR-wp-theme_contact_phone1', ''); ?>"><?php Customizer_Setting_Out('TPCHR-wp-theme_contact_phone1', '[PRIMARY CONTACT PHONE]'); ?></a>
                </div>
                <div class="tpchr-footer-bottom-copyright col-sm-4">
                    COPYRIGHT &copy;
                    <span>
                        <?php Customizer_Setting_Out('TPCHR-wp-theme_footer_cYear', '[COPYRIGHT YEAR]'); ?>
                    </span>
                    •
                    <span>
                        <?php Customizer_Setting_Out(get_bloginfo( 'name' ), '[BLOG NAME]'); ?>
                    </span>
                    <br />
                    <span>
                        <?php Customizer_Setting_Out('TPCHR-wp-theme_footer_Address', '[CONTACT ADDRESS]'); ?>
                    </span>
                    |
                    <span>
                        <?php Customizer_Setting_Out('TPCHR-wp-theme_contact_phone2', '[SECONDARY PHONE]'); ?>
                    </span>
                    <br />
                    Privacy Policy
                    <br />
                    Sitemap
                </div>
                <div class="tpchr-footer-bottom-social col-sm-4">
                    <ul>
                        <li>
                            <a class="tpchr-footer-bottom-social-fb">
                                <img width="45px" height="45px" />
                            </a>
                        </li>
                        <li>
                            <a>
                                <img />
                            </a>
                        </li>
                        <li>
                            <a>
                                <img />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
