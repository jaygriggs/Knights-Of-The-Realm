<center>
    <div id="map">
        <?php
        
        class Map
        {
            function __construct()
            {
             $this->makemap(); 
         }

         function makemap()
         {
            for ($x=0;$x<100;$x++) {
                echo ($x%2==0) ? "<div class=\"square light\"id='{$x}'>".($x+1)."</div>" 
                : "<div class=\"square dark\"id='{$x}'>". ($x+1)."</div>";
            }
        }
        
    }
    $Map = new Map();
    ?>
</div>
</br></br>





