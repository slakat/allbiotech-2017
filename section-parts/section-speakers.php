<section id="speakers" class="section-speakers section-padding section-meta onepage-section">
            <div class="container">
                <div class="row">

                    
				<!-- Section title -->
				<div class="section-title-area">
				<h5 class="section-subtitle"></h5>
					<h2 class="section-title"><span class="title-section-bg">Speakers <small></small></span></h2>
				</div>
				<!-- /Section title -->

                    
                    <ul id="list-speaker" class="list-unstyled"> 
                        
                         <?php 



                         // check if the repeater field has rows of data
                    if( get_field('speakers','option') ):

                        // loop through the rows of data
                        while ( have_rows('speakers','option') ) : the_row();



                            // display a sub field value
                            echo

                            '<li class="col-lg-3 col-md-3 col-sm-4" style="display: list-item;">
                            <div class="speaker">
                                <figure class="effect-ming">
                                    <img class="img-responsive" src="'.get_sub_field('photo').'" alt="">
                                    <figcaption>
                                        <span><a class="popup-modal" href="#modal-'.get_sub_field('id').'"><img class="img-responsive" src="'.get_template_directory_uri().'/assets/images/plus.png" alt=""></a></span>
                                    </figcaption>           
                                </figure>
                                
                                <div class="caption text-center">
                                    <h4>'.get_sub_field('name').'</h4>
                                    <p class="company">'.get_sub_field('company').'</p>
                                </div>   
                            </div>
                        </li>';

                        endwhile;

                    else :

                        // no rows found

                    endif; ?>

                    
                    </ul>
                    
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                    	<a id="loadmore" class="btn btn-theme-primary-outline">Ver más expositores</a>
                    </div>
                    
                </div>
            </div>
        </section>


        <?php 



                         // check if the repeater field has rows of data
                    if( get_field('speakers','option') ):

                        // loop through the rows of data
                        while ( have_rows('speakers','option') ) : the_row();



                            // display a sub field value
                            echo

                            '
                <div id="modal-'.get_sub_field('id').'" class="white-popup-block mfp-hide">
    <div id="speaker-detail" class="col-lg-10 col-lg-offset-1">
            <div class="row">
                <button title="Close (Esc)" type="button" class="mfp-close">×</button>
                
                <div class="col-md-5 col-lg-5 no-padding">
                    <img class="img-responsive" src="'.get_sub_field('photo').'" alt="">
                </div>
                    
                <div class="col-md-7 col-lg-7">
                    <h2>'.get_sub_field('name').'</h2>
                    <p class="lead">'.get_sub_field('position').', '.get_sub_field('company').'</p>
                    <ul class="social list-inline list-unstyled">
                        <li><a target="_blank" href="https://'.get_sub_field('facebook').'"><i class="fa fa-2x fa-facebook-square"></i></a></li>
                        <li><a target="_blank" href="https://'.get_sub_field('twitter').'"><i class="fa fa-2x fa-twitter-square"></i></a></li>
                        <li><a target="_blank" href="https://'.get_sub_field('linkedin').'"><i class="fa fa-2x fa-linkedin-square"></i></a></li>
                    </ul>
                    
                    <div id="content" class="mCustomScrollbar _mCS_3"><div id="mCSB_3" class="mCustomScrollBox mCS-dark-3 mCSB_vertical mCSB_inside" tabindex="0"><div id="mCSB_3_container" class="mCSB_container" style="position:relative; top:0; left:0;" dir="ltr">'.get_sub_field('description').'
                    </div><div id="mCSB_3_scrollbar_vertical" class="mCSB_scrollTools mCSB_3_scrollbar mCS-dark-3 mCSB_scrollTools_vertical" style="display: block;"><div class="mCSB_draggerContainer"><div id="mCSB_3_dragger_vertical" class="mCSB_dragger" style="position: absolute; min-height: 30px; display: block; height: 113px; max-height: 220px;" oncontextmenu="return false;"><div class="mCSB_dragger_bar" style="line-height: 30px;"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                </div>
            
            </div>
        </div>
</div>


                        ';

                        endwhile;

                    else :

                        // no rows found

                    endif; ?>
