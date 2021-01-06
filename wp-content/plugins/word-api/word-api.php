<?php
/**
 * Plugin Name: Word-api
 **/

add_action( 'rest_api_init', function () {
  register_rest_route( 'myplugin/v1', '/author/', array(
    'methods' => 'GET',
    'callback' => 'my_awesome_func',
  ) );
} );
/* tesing gi5 */
function my_awesome_func ( $data ) {
  
    $name = $data->get_param( 'name' );
    $pass = $data->get_param( 'pass' );
     $creds = array();
    $creds['user_login'] = $name;
    $creds['user_password'] = $pass;
    $creds['remember'] = true;
    $user = wp_signon( $creds, false );
    if ( is_wp_error($user) ){
        return 0;
    }else{
        return $user->data;
    }
}
/* -------------------Insert posts ==--------------*/
add_action( 'rest_api_init', function () {

  register_rest_route( 'addpost/v1', '/posts/', array(
    'methods' => 'GET',
    'callback' => 'Post_add',
  ) );
} );

function Post_add ( $data ) {
   $postdata = $data->get_param( 'postdata' );
   $new =  unserialize($postdata);
   $posttile = $new['pots_title'];
   $post_content = $new['content'];
   $tags = $new['tags'];
   $tagname = explode(",",$tags);

   $createpost = array(
            'post_type' => 'post', // Custom Post Type Slug
            'post_status' => 'publish',
            'post_title' => $posttile,
            'post_content' => $post_content,

          );
    $post_id = wp_insert_post($createpost);
    wp_set_object_terms($post_id,$tagname,'post_tag', true);
    if($post_id){
       return 1;
    }else{
        return 0;
    }

}
    /*   -------------grt the post ------------------------------ */

add_action( 'rest_api_init', function () {

  register_rest_route( 'getpost/v2', '/posts/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'get_Post_data',
  ) );
} );

function get_Post_data( $data ) {
    $dataid = $data['id']; 
    $finalarray = array();
    $tagsall = get_the_tags('25'); 
    foreach($tagsall as $tagname){
        $tgsarray[] = $tagname->name;
    }
    $tgsarray1 = implode(",",$tgsarray);
     $post_id = get_post($dataid);
     $finalarray['post_title']   = $post_id->post_title;
     $finalarray['post_content'] = $post_id->post_content;
     $finalarray['tags']         = $tgsarray1;
 
     return $finalarray;
}

/* -------------------update posts ==--------------*/
add_action( 'rest_api_init', function () {

  register_rest_route( 'updatepost/v1', '/posts/(?P<id>\d+)', array(
    'methods' => 'PUT',
    'callback' => 'Post_update',
  ) );
} );

function Post_update ( $data ) {
   

    // 3


 // START 1

    echo "START AT: ".date('y-m-d H:i:s');
     //$postdata = $data->get_param( 'postdata' );
     $dataid = 25;//$data['id'];

       $createpost = array(
                'post_type' => 'post', // Custom Post Type Slug
                'post_status' => 'publish',
                'post_title' => $posttile,
                'post_content' => $post_content,

              );
        $post_id = wp_insert_post($createpost);
        wp_set_object_terms($post_id,$tagname,'post_tag', true);
        if($post_id){
           return 1;
        }else{
            return 0;
        }
    echo "END AT: ".date('y-m-d H:i:s');

 // END 1  
 
  // START 2

    echo "START AT: ".date('y-m-d H:i:s');

    echo "END AT: ".date('y-m-d H:i:s');
 // END 2 

    echo "START AT: ".date('y-m-d H:i:s');

    echo "END AT: ".date('y-m-d H:i:s');
  // START 3

 // END 3     
   

}
/* -------delete =---------*/


/* -------------------update posts ==--------------*/
add_action( 'rest_api_init', function () {

  register_rest_route( 'deletepost/v2', '/posts/(?P<id>\d+)', array(
    'methods' => 'GET',
    'callback' => 'Post_update',
  ) );
} );

function Post_Delete ( $data ) {
   
     
    // 3


 // START 1
    
    echo "START AT: ".date('y-m-d H:i:s');
          echo  $dataid = $data['id'];
         wp_delete_post(  $dataid );
    echo "END AT: ".date('y-m-d H:i:s');

 // END 1  
 
   

}
 ?>