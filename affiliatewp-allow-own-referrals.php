<?php
/**
 * Plugin Name: AffiliateWP - Allow Own Referrals
 * Plugin URI: http://affiliatewp.com/addons/allow-own-referrals
 * Description: Allows an affiliate to use their own referral links and earn a commission on their purchases
 * Author: Pippin Williamson and Andrew Munro
 * Author URI: http://affiliatewp.com
 * Version: 1.0
 * Text Domain: 
 * Domain Path: languages
 */

add_filter( 'affwp_is_customer_email_affiliate_email', '__return_false' );