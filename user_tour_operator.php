
<?php

include "includes/db.php";
include "includes/class-autoload.inc.php";
?>

<!doctype html>

<?php include "partials/head.php"; ?>
<body >
<header >
    <?php include "partials/nav.php"; ?>

</header >
<main class="destination-main">
    <div class="container">
        <h1 class="display-1 text-center"> Club med </h1>
    <div class="row">
        <div class="col-12">
            <div class="media border p-3 flex-column flex-md-row">
              <img src="images/images1.jpeg" alt="#" class="mr-3" style="width:250px;">
              <div class="media-body align-self-center">
                <h4>My Name <small><i>Posted on May 20, 2018</i></small></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ipsum aliquam metus facilisis scelerisque. Quisque vitae condimentum nulla. Vestibulum lobortis ullamcorper augue id consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus at aliquet dui. Mauris dapibus lectus id laoreet iaculis. Duis auctor augue augue, eget lobortis quam auctor at.</p>
              </div>
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-12">
            <div class="media border p-3 flex-column flex-md-row">
              <div class="media-body align-self-center">
                <h4>My Name <small><i>Posted on May 20, 2018</i></small></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel ipsum aliquam metus facilisis scelerisque. Quisque vitae condimentum nulla. Vestibulum lobortis ullamcorper augue id consequat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Phasellus at aliquet dui. Mauris dapibus lectus id laoreet iaculis. Duis auctor augue augue, eget lobortis quam auctor at.</p>
              </div>
              <img src="images/images1.jpeg" alt="#" class="mr-3" style="width:250px;">
            </div>
		</div>
    </div>

</main >

<!--To Work with icons-->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<div class="container">
	
	<div class="card">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
        	    </div>
        	    <div class="col-md-10">
        	        <p>
        	            <a class="float-left" href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
                        <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>
        	            <span class="float-right"><i class="text-warning fa fa-star"></i></span>

        	       </p>
        	       <div class="clearfix"></div>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially 
                        unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                        and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>

        	    </div>
	        </div>
	        	<div class="card card-inner">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                    	        <p class="text-secondary text-center">15 Minutes Ago</p>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>Maniruzzaman Akash</strong></a></p>
                    	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially 
                                    unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, 
                                    nd more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
	    </div>
    </div>
    <div class="reviews-btn d-flex justify-content-center my-2">
        <a class="btn btn-outline-primary" href="user_add_review.php">add a review</a >
    </div>
</div>
<?php include "./partials/footer.php"; ?>
</body >
</html >