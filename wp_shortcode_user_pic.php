function display_userpic() {
        if (is_user_logged_in()) {
                $current_user = wp_get_current_user();
                $id=$current_user->ID;
                return get_avatar($id, 0, 'userpic' );
        } 
}
add_shortcode('userpic','display_userpic');

