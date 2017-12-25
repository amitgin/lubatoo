<?php
/**
 * This is the front page code
 * Template Name: Founders
 */
get_header();

global $post;
$single_page_layout = esc_attr( get_post_meta($post->ID, 'accesspress_store_sidebar_layout', true) );
if (empty($single_page_layout)) {
    $single_page_layout = esc_attr( get_theme_mod('single_page_layout','right-sidebar') );
}
if (is_page('cart') || is_page('checkout')) {
    $single_page_layout = "no-sidebar";
}
$breadcrumb = intval( get_theme_mod('breadcrumb_options_page','1') );
$archive_bread = esc_url( get_theme_mod('breadcrumb_page_image') );
if($archive_bread){
    $bread_archive = $archive_bread;
}else{
  $bread_archive = esc_url ( get_template_directory_uri().'/images/about-us-bg.jpg' );
}
if($breadcrumb == '1') :
?>
<div class="page_header_wrap clearfix" style="background:url('<?php echo $bread_archive; ?>') no-repeat center; background-size: cover;">
    <div class="ak-container">
        <header class="entry-header">
            <?php the_title('<h2 class="entry-title">', '</h2>'); ?>
        </header><!-- .entry-header -->
        <?php accesspress_breadcrumbs() ?>
    </div>
</div>
<?php endif; ?>
<div class="inner">
    <main id="main" class="site-main clearfix <?php echo $single_page_layout; ?>">
        <?php if ($single_page_layout == 'both-sidebar'): ?>
            <div id="primary-wrap" class="clearfix">
        <?php endif; ?>

<div id="primary" class="content-area">
<!-- **************************** Custom Code Start ******************************************-->
    <style type="text/css">
        @media (min-width: 600px) {
            .founder-box {
                display: block;
            }
            .founder-wrap {
                text-align: justify;
                padding: 0px 10px;
                float: left;
            }
            .founder-wrap p {
                margin-top: 10px;
            }
            .founder {
                text-align: center;
                padding: 10px;
            }
            .image {
                float: right;
                height: 150px;
                max-width: 150px;
                border-radius: 75px;
            }
        }

        @media (min-width: 1000px) {
            .founder-box {
                display: flex;
            }
            .founder-wrap {
                text-align: justify;
                padding: 0px 20px;
            }
            .founder-wrap p {
                margin-top: 40px;
            }
            .founder {
                text-align: center;
                padding: 10px;
            }
            .image {
                vertical-align: middle;
                height: 150px;
                max-width: 150px;
                border-radius: 75px;
            }
        }
    </style>
<div id="" class="founder-box" style="margin-top: 30px;">
<div id="" class="founder-wrap"><strong>Amit Gautam, Founder and Director</strong> of Lubatoo, has over a decade of experience in Product Management, E-commerce, Analytics, Cloud Computing, Mobile Commerce and go-to Market strategy amongst others. He has demonstrated technical and leadership skills to spearhead the top consumer app, Lubatoo. His farsightedness coupled with his unique ability to connect the dots from strategy to tactics has helped.</div>
<div id="" class="founder"><a href="https://www.lubatoo.com/wp-content/uploads/2017/02/Amit-Gautam.jpg"><img class="image" src="https://www.lubatoo.com/wp-content/uploads/2017/02/Amit-Gautam.jpg" alt="" width="150" height="150" /></a></div>
</div>
<div id="" class="founder-box">
<div id="" class="founder"><a href="https://www.lubatoo.com/wp-content/uploads/2017/12/Neelam.jpg"><img class="image" src="https://www.lubatoo.com/wp-content/uploads/2017/12/Neelam.jpg" alt="Neelam Gautam" width="150" height="150" /></a></div>
<div id="" class="founder-wrap"><p><strong>Neelam Gautam, Co-Founder and Director</strong> of Lubatoo, has over a decade of experience in Market Analyst and Team Management. He is also one of sales head in state lavel.</p></div>
</div>
<div id="" class="founder-box">
<div id="" class="founder-wrap"><p><strong>Ravneet Kumar, Co-Founder and Director</strong> of Lubatoo, has over a decade of experience in Market Analyst and Team Management. He is also one of sales head in state lavel.</p></div>
<div id="" class="founder"><img class="image" src="https://www.lubatoo.com/wp-content/uploads/2017/02/Ravneet.jpg" alt="" width="150" height="150" /></div>
</div>
<div>
<?php
    $size = "<script>screen.width;</script>";
    echo $size;
    if($size>=800){
        echo "Good Morning !";
    }else{
        echo "Good Night !";
    }
?>
</div>
<!-- **************************** Custom Code End ******************************************-->
</div><!-- #primary -->

            <?php
                if ($single_page_layout == 'both-sidebar' || $single_page_layout == 'left-sidebar'):
                    get_sidebar('left');
                endif;
            ?>

        <?php if ($single_page_layout == 'both-sidebar'): ?>
            </div>
        <?php endif; ?>

            <?php
                if ($single_page_layout == 'both-sidebar' || $single_page_layout == 'right-sidebar'):
                    get_sidebar('right');
                endif;
            ?>
    </main>
</div>
<?php get_footer();
