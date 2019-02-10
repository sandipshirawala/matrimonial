<?php 
$settings_logo=$facebook_url=$google_plus_url=$twitter_url=$pinterest_url=$instagram_url=$settings_address=$settings_phone=$settings_email=$settings_toll_free_no=$settings_website_title=$settings_tax_title=$settings_tax_percentage=$settings_gst_number=$settings_invoice_declaration=$settings_home_state="";
$settings_res = $this->db->get("tbl_settings");

foreach($settings_res->result() as $setting_row)
{
    $settings_logo=$setting_row->settings_logo;
    $facebook_url=$setting_row->facebook_url;
    $google_plus_url=$setting_row->google_plus_url;
    $twitter_url=$setting_row->twitter_url;
    $pinterest_url=$setting_row->pinterest_url;
    $instagram_url=$setting_row->instagram_url;
    $min_single_qty=$setting_row->settings_single_min_qty;
    $min_total_qty=$setting_row->settings_total_min_qty;
    $settings_address=$setting_row->settings_address;
    $settings_phone=$setting_row->settings_phone;
    $settings_email=$setting_row->settings_contact_email;
    $settings_toll_free_no=$setting_row->settings_toll_free;
    $settings_website_title=$setting_row->settings_website_title;

   
}



$cms_about=$cms_footer=$cms_terms_conditions=$cms_privacy="";
$cms_res=$this->db->get("tbl_cms");
foreach($cms_res->result() as $cms_row)
{
    $cms_footer=$cms_row->cms_footer;
    $cms_about=$cms_row->cms_about_us;
    $cms_terms_conditions=$cms_row->cms_terms_conditions;
    $cms_privacy=$cms_row->cms_privacy_policy;
    
}
?>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url(); ?>template/user/css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url(); ?>template/user/js/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>template/user/js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url(); ?>template/user/css/style.css" rel='stylesheet' type='text/css' />
<link href='https://fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="<?php echo base_url(); ?>template/user/css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
