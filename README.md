# kaas-core documenatation

1. Install **CPT UI plugin** ['https://wordpress.org/plugins/custom-post-type-ui/'] and create post types.
    * Then import the code.
2. Install **ACF pro plugin** ['https://www.advancedcustomfields.com/pro/']
    * Create field groups for each post type.
    * Then import the code.
3. Install **Visualizer: Tables and Charts Manager for WordPress** ['https://wordpress.org/plugins/visualizer/'] 
    * link this plugin to insights post using ACF pro.
4. Upload **PrivateContent plugin** in wordpress.
    * Also Upload the add-on plugins with the private content plugin that is,
        * PrivateContent - Mail Actions Add-on
        * PrivateContent - Secure Links Add-on
    * Create **Users in PrivateContent** plugin and assign categories to every users.
    * Assign categories to the post 
    * Restrict the categories according to the user category to restrict the content. *(last step)*
    * Enable Password recovery system in Password recovery in PrivateContent - Mail Actions
5. Install **WP Webhooks** ['https://wordpress.org/plugins/wp-webhooks/']
    * Go to Wordpress -> Settings -> WP Webhooks
    * Go to Settings in Wp Webhooks and Activate the Triggers and Actions accordingly and save them.
    * Then go to Receive data and copy the link from Webhook URL.
6. Install Plugin **WP Mail SMTP by WPForms** ['https://wordpress.org/plugins/wp-mail-smtp/'] for sending mails.

