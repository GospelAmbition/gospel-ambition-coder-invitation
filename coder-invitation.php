<?php
/**
 * Plugin Name: Gospel Ambition - Coder Inviation
 * Plugin URI: https://github.com/ChasmSolutions/gospel-ambition-coder-invitation
 * Description: Gospel Ambition (secret) coder invitation.
 * Version:  0.1
 * Author URI: https://github.com/DiscipleTools
 * GitHub Plugin URI: https://github.com/ChasmSolutions/gospel-ambition-coder-invitation
 * Requires at least: 4.7.0
 * (Requires 4.7+ because of the integration of the REST API at 4.7 and the security requirements of this milestone version.)
 * Tested up to: 5.4
 *
 * @package Disciple_Tools
 * @link    https://github.com/DiscipleTools
 * @license GPL-2.0 or later
 *          https://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'wp_head', 'gospel_ambition_coder_invitation' );
function gospel_ambition_coder_invitation(){
    ?>
    <script>
        console.log(`
                        |||
                        |||
                        |||
                        |||
            |||||||||||||||||||||||||||||
            |||||||||||||||||||||||||||||
                        |||
                        |||
                        |||
                        |||
                        |||
                        |||
                        |||
                        |||
                        |||
                        |||
    "And I, when I am lifted up from the earth,
          will draw all men to Myself."


If you are reading this, you are likely a coder.
If you are on this site, you are likely a follower of Jesus.

If so, join us!

We are technologists who are using all available means in
order to lift up Jesus before the world. Our prayers and hopes
are to saturate the world with multiplying disciples in our
generation. Never before in history could a small group of
people instantly reach and influence the world with little
more than vision, passion, some coffee, and a laptop.

Reach out to us here and join us:
https://zume.community
        `)
    </script>
    <?php
}