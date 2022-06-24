<?php /* Template Name: Strona główna */ ?>
<?php get_header(); ?>


<main>

<section class="cta-section" style="position: relative">
    
    <div class="container px-4 px-lg-0" >
       
        <div class="row" >
           
            <div class="col-lg-7 col-12 d-flex  flex-column justify-content-end align-items-center  align-items-lg-start pt-4 pt-lg-0 pb-md-5" style="z-index: 1;">
                <div><h2 class="text-secondary fw-semibold "><?php the_field('naglowek_sekcji_1_')?></h2></div>
                <div>
                    <p class="h4 fw-semibold text-white col-lg-9  ">
                    <?php the_field('podnaglowek_-_sekcja_1')?>
                </p>
                </div>

                
                

            </div>
            <div class="col-lg-5" style="z-index: 1;">
                <div class="my-5 " >
                 
                  <?php echo do_shortcode('[contact-form-7 id="9" html_id="contactForm" html_class="rounded p-5" ]')?>
                </div>
                <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
            </div>
        
    </div>

    </div>
    <div class="bg-overflow"></div>
</section>

<section id="" class="pt-5 pb-5 px-4 px-lg-0 offer-section">
    <div class="container px-4 px-lg-0" >
      
            <div class="col-md-8">
                <h1 class="text-primary fw-semibold"><?php the_field('naglowek_sekcji_1_')?></h1>
                <h4 class="text-primary pb-3"> <?php the_field('naglowek_sekcji_1_')?> </h4>
                <div class="col-10 col-lg-12 text-algin-jus"><?php the_field('opis_sekcji_2')?> </div>
                <a class="mt-3 btn btn-secondary btn px-5 py-3 btn-lg "  type="submit">Zamów ubezpieczenie</a>
             
            </div>
            
       
    </div>
</section>

</main>

<?php get_footer(); ?>