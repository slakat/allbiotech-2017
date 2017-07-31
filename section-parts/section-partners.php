<section id="sponsors">
            <div class="container">
                <div class="row">
                    <div class="">
                    
                        
                        <div id="sponsors-carousel" class="" style="opacity: 1; display: block;">

                         <?php

                        if( get_field('partners','option') ):

                        // loop through the rows of data
                           
                        while ( have_rows('partners','option') ) : the_row();

                     // display a sub field value
                            echo '
                            
                            <div class=""><div class="sponsor col-sm-4">
                                <img class="img-responsive" src="'.get_sub_field('logo').'" alt="">
                                 </div>';
                               


                            endwhile;
                            

                        else :

                        // no rows found

                    endif; ?>

                           
                            
                            </div>
       </div>
                        
                    </div>
                </div>
            </div>
        </section>