    <div class="banner">
        
        <h1>Level 3 Calculus (L3MAC)</h1>

        <div class="slides" id="slides">

            <?php 
                $directory = "images/class";
                $images = glob($directory . "/*.jpg");
                
                foreach($images as $image) {
                    ?>
                    <img class="slide" src="<?php echo $image ?>" alt="class photo">
                    <?php
                }
            ?>

        </div>

        <div class="buttons">
            <button id="prev" onclick="prevSlide()">&lt;</button>
            <button id="next" onclick="nextSlide()">&gt;</button>
        </div>

    </div>

    <div class="blocks">

        <div class="block" onclick="location.href='index.php?page=subpages/3.5_complex'">
            <h1>3.5</h1>
            <p>Complex Numbers</p>
        </div>        

        <div class="block" onclick="location.href='index.php?page=subpages/3.6_diff'">
            <h1>3.6</h1>
            <p>Differentiation</p>
        </div>        

        <div class="block" onclick="location.href='index.php?page=subpages/3.7_int'">
            <h1>3.7</h1>
            <p>Integration</p>
        </div>        

    </div>

    <div class="summary">

        <div class="text-left">
            <h2>Course Outline</h2>
            <p>• Level 3 Mathematics with Calculus</p>
        </div>
    
        <div class="vr"></div>
        
        <p>L3MAC is a specialised course in mathematics. It is designed for students who has specialised 
        in mathematics at level 2 NCEA and who want to pursue their study of calculus at NCEA level 3. 
        It contains the following subject areas: Trigonometry, Algebra of Complex Numbers, Differentiation and Integration.</p>

    </div>

    <script>
        setInterval(nextSlide, 4000); // auto slideshow
    </script>