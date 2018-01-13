/*
 * Add support for Custom Post Types to Yoast Seo Premium.
 * The content of this file is preliminary.
 * You will have to make the additions and edits every time your plugin updates.
 */
 
// Edit the file „/premium/classes/premium-link-suggestions-service.php“

// Search for:

'tax_query' => $this->get_tax_query( $prominent_word_id ),

// add directly beneath it:

'post_type' => array('X', 'Y', 'Z'),

/*
 * You have to exchange X, Y and Z with the names of your individual custom post types. The CPT will the show up
 * in the suggestion widget in the Wordpress GUI.
 *
 * If you use posts and pages too, you have to add them to the above array too.
 *
 * There are other places where you might want to change code, in order to use CPT with Yoast SEO. But they are
 * more complex and only affect functions regarding the link counting or aggregation/caching in the back end.
 *
 */
