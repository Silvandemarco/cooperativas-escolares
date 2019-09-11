<?php
	function wpmu_list_sites() {
	
	$subsites = get_sites();
	
	if ( ! empty ( $subsites ) ) {
		
		echo '<section class="subsites-container">';
		
			echo '<ul class="subsites">';
	
			foreach( $subsites as $subsite ) {
			
				$subsite_id = get_object_vars( $subsite )["blog_id"];
				$subsite_name = get_blog_details( $subsite_id )->blogname;
				$subsite_link = get_blog_details( $subsite_id )->siteurl;
				echo '<li class="site-' . $subsite_id . '"><a href="' . $subsite_link . '">' . $subsite_name . '</a></li>';
		
			}
			
			echo '</ul>';
			
		echo '</section>';
	
	}
	
}
add_action( 'wpmu_before_header', 'wpmu_list_sites' );

function make_list_shortcode()
    {
    $subsites = get_sites(['public' => 1, 'number' => 500, 'orderby' => 'last_updated', 'order' => 'DESC', ]);
    if (!empty($subsites))
        {
        $html = '<div class="icon-bullets-greater" style="display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;">';
        foreach($subsites as $subsite)
            {
            $subsite_id = $subsite->blog_id;
            $subsite_name = get_blog_details($subsite_id)->blogname;
            $subsite_link = get_blog_details($subsite_id)->siteurl;
            $subsite_domain = get_blog_details($subsite_id)->domain;
            $subsite_path = get_blog_details($subsite_id)->path;

            // Switch to Blog
            switch_to_blog( $subsite->blog_id );
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );

            // Added the image tag and src path
            if ($subsite_domain != 'localhost') {
            	$html.= '
            <div class="col-lg-4 col-md-6 col-xs-12">
            <a href="' . $subsite_link . '">
	            <div class="services-item text-center">
	              <div class="icon">
	                <i class="lni-cog"></i>
	              </div>
	              <h4>' . $subsite_name . '</h4>
	              <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
	            </div>
            </a>
          </div>
            ';
            }
            // <li style="list-style: none!important;" class="site-' . $subsite_id . '" ><img src="'.$logo.'" /><a href="' . $subsite_link . '" target="_blank">' . $subsite_name . '</a> at ' . $subsite_domain . '' . $subsite_path . ' </li>
}
        $html.= '</div>';
            
        return $html;
        }
    }

add_shortcode('list_sites', 'make_list_shortcode');
?>