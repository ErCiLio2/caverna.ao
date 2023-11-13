<main class="main-conatctos">

    <div class="formas-de-contacto">
        <div>
            <h3>Localizaçao:</h3>
            <div id = "gps-caverna">
            </div><!-- Gps-cavrena-->
        </div>
        <div>
            <h3>Telefone:</h3>
            <ul>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
            </ul>
        </div>
        <div>
            <h3>Redes Sociais</h3>
            <ul>
                <li><a href="tel:+2449854324325">Facebook</a></li>
                <li><a href="tel:+2449854324325">Instagram</a></li>
                <li><a href="tel:+2449854324325">Twiter</a></li>
            </ul>
        </div>
        <div>
            <h3>Telefone:</h3>
            <ul>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
                <li><a href="tel:+2449854324325">2449854324325</a></li>
            </ul>
        </div>
    </div>

</main>

         
<script>
    $(function(){
        $(document).ready(function(){
            GFG();
        })
    })
    function  GFG(){
        var CustomOp = {
            center:new google.maps.LatLng(-8.842419, 13.272645),
            zoom:17, 
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };
            
        // Map object
        var map = new google.maps.Map(
            document.getElementById("gps-caverna"),
            CustomOp
        );
    }
</script>