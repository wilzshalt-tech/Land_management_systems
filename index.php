<?php include 'includes/header.php';?>
<div class="slideshow-container">
        <div class="slides fade">
            <img src="images/image1.png" alt="Image 1">
            <div class="text"> caption for image1</div>
        </div>
        <div class="slides fade">
            <img src="images/image2.png" alt="Image 2">
            <div class="text"> caption for image2</div>
        </div>
        <div class="slides fade">
            <img src="images/image3.png" alt="Image 3">
            <div class="text">caption for image3</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
<div class="search">
    <div class="searchbar">
<form action="" method="post">
<input type="search" name="search" id="" placeholder="search for your property" required>
<input type="submit" value="search" class="btn-search">
</form>
    </div>
 <div class="land">
    <h1>
 instructions
    </h1><hr>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio omnis cumque consequatur nam atque quaerat optio iusto? Consequatur sequi reprehenderit eaque velit esse adipisci, recusandae, nemo perferendis debitis laboriosam tempore.

    </p>
    <div class="report-div">
    <a href="#"><div class="report-property"> Report a Property</div></a>
    <a href="#"><div class="missing-property"> Report Missing Properties</div></a>
    </div>
 </div>
</div>

<?php include 'includes/footer.php';?>