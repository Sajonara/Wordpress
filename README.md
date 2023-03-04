# Wordpress

In this repository I add some tips, tricks and describe how you add features to your Wordpress. You might want to add some features to your functions.php file or manipulate files from plug-ins.

## Add limited custom post type compatibility to Yoast SEO premium

I found out that Yoast SEO premium was not built with custom post types in mind. Their source code has to be altered in dozens of files if you really want full support, like in all dashboard widgets and counting, etc. **But** you can integrate support for link proposals for custom post types easily, by following the steps [in this file](https://github.com/Sajonara/Wordpress/blob/master/sn_add_cpt_support_to_yoast_seo_premium.php).

## Add custom post types to your site's search corpus

When you integrate custom post types, they won't show up in your search results by default. The content of [this page](https://github.com/Sajonara/Wordpress/blob/master/sn_define_search_corpus.php) will help you to add your custom post types to the search corpus.
