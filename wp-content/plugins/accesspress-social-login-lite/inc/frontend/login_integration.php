<?php
defined( 'ABSPATH' ) or die( "No script kiddies please!" );
$options = get_option( APSL_SETTINGS );

$redirect_to = isset( $_REQUEST['redirect_to'] ) ? $_REQUEST['redirect_to'] : '';

$encoded_url = urlencode( $redirect_to );
?>
<div class='apsl-login-networks theme-<?php echo $options['apsl_icon_theme']; ?> clearfix'>
    <span class='apsl-login-new-text'><?php echo $options['apsl_title_text_field']; ?></span>
    <?php
    if(isset($_SESSION['apsl_login_error_flag']) && $_SESSION['apsl_login_error_flag'] == '1'){ ?>
        <div class='apsl-error'><?php _e('You have Access Denied. Please authorize the app to login.', 'accesspress-social-login-lite' ); ?></div>
        <?php
        unset($_SESSION['apsl_login_error_flag']);
    } ?>

    <?php if ( isset( $_REQUEST['error'] ) || isset( $_REQUEST['denied'] ) ) { ?>
        <div class='apsl-error'>
            <?php _e( 'You have Access Denied. Please authorize the app to login.', 'accesspress-social-login-lite' ); ?>
        </div>
    <?php } ?>
    <div class='social-networks'>
        <?php
        foreach ( $options['network_ordering'] as $key => $value ):
            if ( $options["apsl_{$value}_settings"]["apsl_{$value}_enable"] === 'enable' ) { ?>
                <a href="<?php echo wp_login_url(); ?>?apsl_login_id=<?php echo $value; ?>_login<?php
                if ( $encoded_url ) {
                    echo "&state=" . base64_encode( "redirect_to=$encoded_url" );
                }
                ?>" title='<?php
                   _e( 'Login with', 'accesspress-social-login-lite' );
                   echo ' ' . $value;
                   ?>' >
                    <div class="apsl-icon-block icon-<?php echo $value; ?> clearfix">
                        <i class="fa fa-<?php echo $value; ?>"></i>
                        <span class="apsl-login-text"><?php _e( 'Login', 'accesspress-social-login-lite' ); ?></span>
                        <span class="apsl-long-login-text"><?php _e( 'Login with', 'accesspress-social-login-lite' ); ?><?php echo ' ' . $value; ?></span>
                    </div>
                </a>
                <?php
            }
        endforeach;
        ?>
    </div>
</div>
