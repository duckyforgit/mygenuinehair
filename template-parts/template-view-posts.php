<?php 
$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '-1',
    'post_status' => array(
        'publish',
        'pending',
        'draft',
        'private',
        'trash'
    )
) );
?>
<div class="wrapper" id="full-width-page-wrapper">
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <div class="<?php echo esc_attr( $container ); ?>" id="content">

        <div class="row">

            <div class="col-md-12 content-area" id="primary">

                <main class="site-main" id="main" role="main"><?php
$query = new WP_Query( array(
    'post_type' => 'post',
    'posts_per_page' => '-1',
    'post_status' => array(
        'publish',
        'pending',
        'draft',
        'private',
        'trash'
    )
) );
?>
<div class="entry-content">
    <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

       <!--  <div class="wpuf-dashboard-container">

    <h2 class="page-head">
        <span class="colour">maureen's Dashboard</span>
    </h2>

                        <div class="post_count">
                You have created <span>10</span> (Posts)            </div>
            
        
        <div class="items-table-container">
            <table class="items-table post" cellpadding="0" cellspacing="0">
                <thead>
                    <tr class="items-list-header">
                        <th>Featured Image</th>                        <th>Title</th>

                        
                        
                        
                        <th>Status</th>

                        
                        
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                                            <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/this-is-so-awesome/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/this-is-so-awesome/" title="Permalink to This is so awesome!" rel="bookmark">This is so awesome!</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=648&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=648&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/how-are-the-holidays/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/download-07439047-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="download-07439047" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/download-07439047-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/download-07439047-75x75.jpg 75w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/download-07439047-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/download-07439047.jpg 225w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/how-are-the-holidays/" title="Permalink to How are the Holidays?" rel="bookmark">How are the Holidays?</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=629&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=629&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/post-about-the-world/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/post-about-the-world/" title="Permalink to Post about the world" rel="bookmark">Post about the world</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=389&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=389&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/hello-world/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/hello-world/" title="Permalink to Hello world!" rel="bookmark">Hello world!</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=1&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=1&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/travel-tips-for-south-africa/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/travel-tips-for-south-africa/" title="Permalink to Travel Tips for South Africa" rel="bookmark">Travel Tips for South Africa</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=58&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=58&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/chinas-last-wild-bears/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/chinas-last-wild-bears/" title="Permalink to China’s Last Wild Animals" rel="bookmark">China’s Last Wild Animals</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=527&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=527&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/stories-from-landlocked-lands/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-5-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-5-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-5-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-5-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-5-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/stories-from-landlocked-lands/" title="Permalink to Stories from Landlocked Lands" rel="bookmark">Stories from Landlocked Lands</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=53&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=53&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/the-rise-of-moroccan-reggae/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-2-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-2-1-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-2-1-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-2-1-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-2-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/the-rise-of-moroccan-reggae/" title="Permalink to The Rise of Moroccan Reggae" rel="bookmark">The Rise of Moroccan Reggae</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=526&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=526&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/bangkoks-hidden-foodstalls/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-1024x1024.jpg 1024w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-768x768.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-1536x1536.jpg 1536w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-100x100.jpg 100w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1-116x116.jpg 116w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-1-1.jpg 1920w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/bangkoks-hidden-foodstalls/" title="Permalink to Bangkok’s Hidden Foodstalls" rel="bookmark">Bangkok’s Hidden Foodstalls</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=525&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=525&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                                        <tr>
                                                            <td>
                                    <a href="http://localhost:8080/mygenuinehair/hello-world-2/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-4-1-150x150.jpg" class="attachment-thumbnail size-thumbnail wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-4-1-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-4-1-600x600.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-4-1-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-4-1-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                                                        <td>
                                
                                    <a href="http://localhost:8080/mygenuinehair/hello-world-2/" title="Permalink to Qualm Inspiration for Everybody" rel="bookmark">Qualm Inspiration for Everybody</a>

                                                            </td>

                                                        
                                                        <td>
                                <span style="color:#33CC33">Live</span>                            </td>

                            
                            
                                    <td>
                                                                                        <a href="http://localhost:8080/mygenuinehair/edit-2/?pid=524&amp;_wpnonce=8bab4c9f1d">Edit</a>
                                                
                                                                                    <a href="/mygenuinehair/dashboard/?action=del&amp;pid=524&amp;_wpnonce=10786cf20a" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                                                            </td>
                                </tr>
                                
                        </tbody>
                    </table>
                </div>

                <div class="wpuf-pagination">
                                    </div>
                
        </div>
            <div class="wpuf-author">
                <h3>Author Info</h3>
                <div class="wpuf-author-inside odd">
                    <div class="wpuf-user-image"><img alt="" src="http://0.gravatar.com/avatar/34811d28c87f251fa397abbeab89fd4d?s=80&amp;d=mm&amp;r=g" srcset="http://0.gravatar.com/avatar/34811d28c87f251fa397abbeab89fd4d?s=160&amp;d=mm&amp;r=g 2x" class="avatar avatar-80 photo" height="80" width="80" loading="lazy"></div>
                    <div class="wpuf-author-body">
                                                <p class="wpuf-user-name"><a href="http://localhost:8080/mygenuinehair/author/maureen/">maureen</a></p>
                        <p class="wpuf-author-info"></p>
                    </div>
                </div>
            </div>--><!-- .author -->
            

        
    <!--</div> -->
<table>
 
    <tr>
        <th>Post Title</th>
        <th>Post Excerpt</th>
        <th>Post Status</th>
        <th>Actions</th>
    </tr>
 
    
        <?php
if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
 
<tr>
    <td><?php echo get_the_title(); ?></td>
    <td><?php the_excerpt(); ?></td>
    <td><?php echo get_post_status( get_the_ID() ) ?></td>
    <?php
$edit_post = add_query_arg( 'post', get_the_ID(), get_permalink( 61 + $_POST['_wp_http_referer'] ) );
echo $edit_post;
?>
    <td><a href="<?php echo $edit_post; ?>">Edit</a> <a href="#">Delete</a></td>
</tr>
 
<?php endwhile; endif; ?>
    
 
</table>
</article>
</div>
<?php
get_footer(); 