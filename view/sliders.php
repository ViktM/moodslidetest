<!-- CONTAINER FOR THE MOODSLIDES  -->


<div class="container">


    <!-- SLIDERS STARTS HERE - Each has id ($key) for JS and onmouseup referring to "this" slider -->

    <div class="row">

        <h2 class="col-md-2">Agitated</h2>

        <div class="col-md-6 slider" id="slider_1"><input id="mood1" onmouseup="mouseUp(this)" type="range" min="1" max="5" value="3"></div>

        <h2 class="col-md-3">Calm</h2>

    </div>




    <div class="row">

        <h2 class="col-md-2">Happy</h2>

        <div class="col-md-6 slider" id="slider_2"><input id="mood2" onmouseup="mouseUp(this)" type="range" min="1" max="5" value="3"></div>

        <h2 class="col-md-3">Sad</h2>

    </div>



    <div class="row">

        <h2 class="col-md-2">Tired</h2>

        <div class="col-md-6 slider" id="slider_3"><input id="mood3" onmouseup="mouseUp(this)" type="range" min="1" max="5" value="3"></div>

        <h2 class="col-md-3">Wide Awake</h2>

    </div>




    <div class="row">

        <h2 class="col-md-2">Scared</h2>

        <div class="col-md-6 slider" id="slider_4"><input id="mood4" onmouseup="mouseUp(this)" type="range" min="1" max="5" value="3"></div>

        <h2 class="col-md-3">Fearless</h2>

    </div>


</div>


<!-- Cards to display the selection of the movies - Before use pictures are replaced with emoticon logos
    Onmouseup it will display the movies according to the mood values
-->
<div class="container">

<div id="cards" >

    <div class="row">

        <div class="col-md-2" >
                     
            
            <img src="view/logos/emoti1.png" alt="emoticon1" height="320" width="180"/>
            
            <h4>No Content Yet <br> Click on the Moodslider</h4>
            
        </div>

        <div class="col-md-2" >
            
            <img src="view/logos/emoti2.png" alt="emoticon2" height="320" width="180"/>
            
            <h4>No Content Yet <br> Click on the Moodslider</h4>
                       
        </div>

        <div class="col-md-2" >
            
            <img src="view/logos/emoti3.png" alt="emoticon3" height="320" width="180"/>
            
            <h4>No Content Yet <br> Click on the Moodslider</h4>
            
        </div>

        <div class="col-md-2" >
                       
            <img src="view/logos/emoti4.png" alt="emoticon4" height="320" width="180"/>
            
            <h4>No Content Yet <br> Click on the Moodslider</h4>            
            
        </div>

        <div class="col-md-2" >
            
            <img src="view/logos/emoti5.png" alt="emoticon5" height="320" width="180"/>
            
            <h4>No Content Yet <br> Click on the Moodslider</h4>           
            
        </div>

    </div>

</div>
</div>
