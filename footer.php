        </div> <!-- /.container -->
        <footer class="tpchr-footer container-fluid">
            <div class="tpchr-footer-bottom row">
                <div class="tpchr-footer-bottom-phone col">
                    <?php
                        Output_Customizer_Setting(
                            'span',
                            array(),
                            'TPCHR-wp-theme_contact_phone1',
                            'span',
                            '',
                            '[PRIMARY CONTACT PHONE]'
                        );
                    ?>
                </div>
                <div class="tpchr-footer-bottom-copyright col">
                    <P>
                        COPYRIGHT &copy;
                        <?php
                            Output_Customizer_Setting(
                                'span',
                                array(),
                                'TPCHR-wp-theme_footer_cYear',
                                'span',
                                '',
                                '[COPYRIGHT YEAR]'
                            );
                        ?> • <?php
                            Output_Customizer_Setting(
                                'span',
                                array(),
                                get_bloginfo( 'name' ),
                                'span',
                                '',
                                '[BLOG NAME]'
                            );
                        ?>
                    </p>
                    <P>
                        <?php
                            Output_Customizer_Setting(
                                'span',
                                array(),
                                'TPCHR-wp-theme_footer_Address',
                                'span',
                                '',
                                '[CONTACT ADDRESS]'
                            );
                        ?> | <?php
                            Output_Customizer_Setting(
                                'span',
                                array(),
                                'TPCHR-wp-theme_contact_phone2',
                                'span',
                                '',
                                '[SECONDARY PHONE]'
                            );
                        ?>
                    </p>
                </div>
                <div class="tpchr-footer-bottom-social col">
                    asdfasf
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>
