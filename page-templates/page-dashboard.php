<?php
/**
 * Template Name: Dashboard
 *
 * Template for displaying a dashboard page.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('inner');
$container = get_theme_mod( 'understrap_container_type' );
?>
 

<div class="wrapper" id="page-wrapper">

	<div class="col-md content-area" id="content" tabindex="-1">


			<main class="site-main" id="main">
 				<article>

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				
				<h1><?php the_title(); ?></h1>

<style>
	body .wpuf-dashboard-container .items-table-container, body .wpuf-dashboard-container .wpuf-dashboard-content.invoices {
    max-width: 100%;
    overflow-y: auto;
}
body .wpuf-dashboard-container table.items-table {
    width: 100%;
    margin-top: 0px;
    border: 1.0218px solid #DAE1F5;
    font-family: 'Open Sans', sans-serif !important;
    color: #000 !important;
    font-size: 16px !important;
    font-weight: 400 !important;
}
body .wpuf-dashboard-container table.items-table tr {
    text-align: left;
    border: 1px solid #DAE1F5;
}
body .wpuf-dashboard-container table.items-table th {
    box-shadow: 0px 10px 20px rgb(0 0 0 / 7%);
}
body .wpuf-dashboard-container table.items-table th, body .wpuf-dashboard-container table.items-table td {
    border: 0;
    padding: 10px;
}
body .wpuf-dashboard-container table.items-table tr {
    text-align: left;
    border: 1px solid #DAE1F5;
}
body .wpuf-dashboard-container table.items-table th, body .wpuf-dashboard-container table.items-table td {
    border: 0;
    padding: 10px;
}body .wpuf-dashboard-container table.items-table a {
    text-decoration: none;
    box-shadow: none;
    color: #000 !important;
}img.wp-post-image, article img, figure, img, #secondary img {
    max-width: 100%;
    height: auto;
}body .wpuf-pagination .page-numbers.current {
    padding: 2px 8px;
    margin: 2px;
    border: 1px solid #4A5154;
    font-weight: bold;
    background-color: #4A5154;
    color: #FFF;
    border-radius: 5px;
    -moz-border-radius: 5px;
}body .wpuf-pagination .page-numbers {
    padding: 2px 8px;
    margin: 2px;
    border: 1px solid #4A5154;
    text-decoration: none;
    color: #4A5154;
    background: #fff;
    border-radius: 5px;
    -moz-border-radius: 5px;
}body .wpuf-dashboard-container:after {
    clear: both;
    content: "";
    display: table;
}body .wpuf-author {
    margin: 20px 0;
}body .wpuf-author h3 {
    margin: 0 !important;
    background: #CFCFCF;
    text-align: left;
    padding: 3px 10px;
}body .wpuf-author .wpuf-author-inside {
    background: none repeat scroll 0 0 #F0F0F0;
    border-bottom: 2px solid #DDDDDD;
    height: auto;
    padding-left: 10px;
    padding-top: 15px;
    margin-bottom: 15px;
}body .wpuf-author .wpuf-author-inside .wpuf-user-image {
    float: left;
    padding-right: 15px;
}avatar {
    border-radius: 50%;
    float: left;
}
img.wp-post-image, article img, figure, img, #secondary img {
    max-width: 100%;
    height: auto;
}body .wpuf-author .wpuf-author-inside p {
    margin-bottom: 10px !important;
}body .wpuf-author .wpuf-author-inside p.wpuf-user-name a {
    color: #335160;
    font-size: 1.2em;
    font-weight: bold;
}body .wpuf-author .wpuf-author-inside p.wpuf-author-info {
    padding-top: 8px;
    word-wrap: break-word;
}body .wpuf-author .wpuf-author-inside::after {
    clear: both;
    content: "";
    display: table;
}body .wpuf-author::after {
    clear: both;
    content: "";
    display: table;
}
</style>
<div class="wpuf-dashboard-container">

    <h2 class="page-head">
        <span class="colour">maureen's Dashboard</span>
    </h2>

        <div class="post_count">You have created <span>14</span> (Posts)</div>
            
        
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
<a href="http://localhost:8080/mygenuinehair/having-a-blast-this-weekend/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-536bcb39-150x150.jpg" class="attachment-post-image size-post-image wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-536bcb39-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-536bcb39-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-536bcb39-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/having-a-blast-this-weekend/" title="Permalink to Having a Blast this Weekend" rel="bookmark">Having a Blast this Weekend</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
  <a href="http://localhost:8080/mygenuinehair/edit/?pid=780&amp;_wpnonce=fe0067e124">Edit</a>
                                                
<a href="/mygenuinehair/dashboard/?action=del&amp;pid=780&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
</td>
</tr>
<tr>
<td>
<a href="http://localhost:8080/mygenuinehair/my-new-summer-dress/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/my-new-summer-dress/" title="Permalink to My New Summer Dress" rel="bookmark">My New Summer Dress</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
<a href="http://localhost:8080/mygenuinehair/edit/?pid=754&amp;_wpnonce=fe0067e124">Edit</a>
                                                
      <a href="/mygenuinehair/dashboard/?action=del&amp;pid=754&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
</td>
</tr>
<tr>
<td>
<a href="http://localhost:8080/mygenuinehair/new-published-post/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/new-published-post/" title="Permalink to new published post" rel="bookmark">new published post</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
    <a href="http://localhost:8080/mygenuinehair/edit/?pid=753&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=753&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
</td>
</tr>
<tr>
<td>
<a href="http://localhost:8080/mygenuinehair/1-3/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/1-3/" title="Permalink to 1" rel="bookmark">1</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
    <a href="http://localhost:8080/mygenuinehair/edit/?pid=752&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=752&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
</td>
</tr>
<tr>
<td>
<a href="http://localhost:8080/mygenuinehair/1-2/"><img src="http://localhost:8080/mygenuinehair/wp-content/plugins/wp-user-frontend/assets/images/no-image.png" class="attachment-thumbnail wp-post-image" alt="No Image" title="No Image"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/1-2/" title="Permalink to 1" rel="bookmark">1</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
    <a href="http://localhost:8080/mygenuinehair/edit/?pid=751&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=751&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
</td>
</tr>
<tr>
<td>
<a href="http://localhost:8080/mygenuinehair/preview-my-article/"><img width="150" height="150" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-150x150.jpg" class="attachment-post-image size-post-image wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-150x150.jpg 150w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-75x75.jpg 75w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-300x300.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2021/06/banner-100x100.jpg 100w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/preview-my-article/" title="Permalink to Preview my article" rel="bookmark">Preview my article</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
<a href="http://localhost:8080/mygenuinehair/edit/?pid=672&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=672&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
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
<a href="http://localhost:8080/mygenuinehair/edit/?pid=389&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=389&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
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
<a href="http://localhost:8080/mygenuinehair/edit/?pid=1&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=1&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
</td>
</tr>
<tr>
<td>
<a href="http://localhost:8080/mygenuinehair/travel-tips-for-south-africa/"><img width="150" height="127" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1.jpg" class="attachment-post-image size-post-image wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1.jpg 1920w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-300x254.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-1024x867.jpg 1024w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-768x650.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-1536x1301.jpg 1536w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-600x508.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-3-1-137x116.jpg 137w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
<td>

<a href="http://localhost:8080/mygenuinehair/travel-tips-for-south-africa/" title="Permalink to Travel Tips for South Africa" rel="bookmark">Travel Tips for South Africa</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                            </td>



<td>
<a href="http://localhost:8080/mygenuinehair/edit/?pid=58&amp;_wpnonce=fe0067e124">Edit</a>

<a href="/mygenuinehair/dashboard/?action=del&amp;pid=58&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
                                            </td>
</tr>
                        <tr>
                            <td>
    <a href="http://localhost:8080/mygenuinehair/chinas-last-wild-bears/"><img width="150" height="115" src="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1.jpg" class="attachment-post-image size-post-image wp-post-image" alt="" loading="lazy" srcset="http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1.jpg 1920w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-300x230.jpg 300w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-1024x785.jpg 1024w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-768x588.jpg 768w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-1536x1177.jpg 1536w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-600x460.jpg 600w, http://localhost:8080/mygenuinehair/wp-content/uploads/2018/10/blog-post-6-1-151x116.jpg 151w" sizes="(max-width: 150px) 100vw, 150px"></a>                                </td>
                        <td>

    <a href="http://localhost:8080/mygenuinehair/chinas-last-wild-bears/" title="Permalink to China’s Last Wild Animals" rel="bookmark">China’s Last Wild Animals</a>

</td>


<td>
<span style="color:#33CC33">Live</span>                           																	</td>

<td>
    <a href="http://localhost:8080/mygenuinehair/edit/?pid=527&amp;_wpnonce=fe0067e124">Edit</a>
                                                
            <a href="/mygenuinehair/dashboard/?action=del&amp;pid=527&amp;_wpnonce=2177a4301c" onclick="return confirm('Are you sure you want to delete this post ?');"><span style="color: red;">Delete</span></a>
    </td>
</tr>
                                
        </tbody>
                    </table>
                </div>

                <div class="wpuf-pagination">
                    <span aria-current="page" class="page-numbers current">1</span>
<a class="page-numbers" href="/mygenuinehair/dashboard/?pagenum=2">2</a>
<a class="next page-numbers" href="/mygenuinehair/dashboard/?pagenum=2">»</a></div>
                
        </div>	