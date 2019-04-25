        </div> <!-- /.container-fluid -->
        <footer class="tpchr-footer container-fluid">
            <div class="tpchr-footer-bottom row">
                <div class="tpchr-footer-bottom-phone col-sm-4">
                    <?php
                        Output_Customizer_Setting('span',array(),'TPCHR-wp-theme_contact_phone1','span','','[PRIMARY CONTACT PHONE]');
                    ?>
                </div>
                <div class="tpchr-footer-bottom-copyright col-sm-4">
                    <P>
                        COPYRIGHT &copy;
                        <?php
                            Output_Customizer_Setting('span',array(),'TPCHR-wp-theme_footer_cYear','span','','[COPYRIGHT YEAR]');
                        ?> • <?php
                            Output_Customizer_Setting('span',array(),get_bloginfo( 'name' ),'span','','[BLOG NAME]');
                        ?>
                    </p>
                    <P>
                        <?php
                            Output_Customizer_Setting('span',array(),'TPCHR-wp-theme_footer_Address','span','','[CONTACT ADDRESS]');
                        ?> | <?php
                            Output_Customizer_Setting('span',array(),'TPCHR-wp-theme_contact_phone2','span','','[SECONDARY PHONE]');
                        ?>
                    </p>
                </div>
                <div class="tpchr-footer-bottom-social col-sm-4">
                    asdfasf
                </div>
            </div>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>



<!--
tpchr-footer
tpchr-footer-bottom
tpchr-footer-bottom-phone
tpchr-footer-bottom-copyright
tpchr-footer-bottom-social
-->
