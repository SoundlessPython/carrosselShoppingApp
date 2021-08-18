<?php /* Template Name: UmarsTemplate */ 

    
    $embed = get_field("video");
    $map = get_field("map");
    $image = get_field("image");

get_header(); ?>



<style>


	main{
		max-width:1200px; 
		margin: 0 auto;
		padding: 0 20px;
	}

	.my-class img{
		width: 100%;
		height: auto;
		max-width: 400px;
	}
</style>


<main>


	<div class="my-class">

		
        <h3> Here is a satisfying video for you!</h3>
        <?PHP var_dump($embed);?>

        <h3>Let's see if this works</h3>
        <img src="<?php echo $map;?>" />
        
        <h3>I am pretty sure this will work though</h3>
        <img src="<?php echo $image;?>" />
	</div>

</main>



<?php get_footer(); ?>