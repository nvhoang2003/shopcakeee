@extends('master.clientmasterpage')

@section('main')
    <div class="container p-5">
        <div class="text-left p-3 testimonial " id="paragraph1">
            <h2 >Foundation</h2>
            <p> DCakeShop commits to customers about fresh bakery products that are completely free of preservatives, really healthy, good for health and always dedicated to serving customers. That is the foundation on which DMakeShop has existed and developed sustainably during the past time. </p>
        </div>
        <div class="text-right mt-3 p-3 bg-warning">
            <h2>Mission</h2>
            <p>
                DCakeShop not only gives users healthy and delicious cakes. We also provide our customers with the best quality service. Above all, we always listen to well-intentioned comments to strive to improve product quality, improve competitiveness and improve service quality to bring utility values suitable to customers. wishes and interests of customers.
            </p>
        </div>
        <div class="text-left mt-3 p-3 bg-secondary">
            <h2>Vision</h2>
            <p>We are now a national brand. And we are still trying our best to make the DCakeShop brand rise to the international level.</p>
        </div>
    </div>

    <script>
        function h2Mouseover(){
            document.getElementById("paragraph1").style.backgroundColor= ("pink");
            document.getElementById("paragraph1").style.fontStyle= ("italic");
        }
        let p1 = document.getElementById("paragraph1");
        p1.onmouseover = h2Mouseover;
        // function h2Mouseout(){
        //     for (let k = 0; k < 4; k++) {
        //         document.getElementsByTagName("h2")[k].style.fontStyle = ("normal");
        //     }
        // }
        // let h2 = document.getElementsByTagName("h2");
        // for (let l = 0; l < 4; l++) {
        //     h2[l].onmouseover= h2Mouseover;
        // }
        // for (let k = 0; k < 4; k++) {
        //     h2[k].onmouseout = h2Mouseout;
        //
        // }
    </script>

@endsection
