   <!-- /.services start  -->
         <section class="services">
           <div class="feat bg-gray pt-5 pb-5">
            <div class="container">
           
                  <div class="row">
               
                    <div class="section-head col-sm-12">
                      <h4><span>Our Serv</span>ices</h4>
                        <?php if( get_field('subtitle','option') ): ?>
                          <?php the_field('subtitle','option'); ?>
                        <?php endif; ?>
                      
                    </div>
                  </div>
           
            <?php
                $args = array(
                    'post_parent' => 23,
                    'post_type'   => 'page',
                    'order'       => 'ASC',
                    'posts_per_page' => -1
                );
                
                $child_query = new WP_Query( $args );
                ?>
             <div class="row">
                 <?php while ( $child_query->have_posts() ) : $child_query->the_post(); ?>
                
                <div class="col-lg-4 col-sm-6">
               
                  <div class="item">
                    <div <?php post_class(); ?>>  
                        <?php  
                        if ( has_post_thumbnail() ) {
                            the_post_thumbnail('page-thumb-mine');
                        }
                        ?>
                        <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
                        <?php the_excerpt(); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn custom-btn service-btn">Read More</a>
                  </div>
                  
                </div>
                 <?php endwhile; ?>
             </div>
           <?php
                wp_reset_postdata(); ?>
            
             
           </div>   
        </div>

    </section>
    
  
       	
        <!-- /.services end  -->
