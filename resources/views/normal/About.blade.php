@extends('master.clientmasterpage')

@section('main')
    <div class="container p-5">
        <div class="text-left p-3" id="paragraph1" style="background-color: #9f3f3f">
            <h2 >Foundation</h2>
            <p> DCakeShop commits to customers about fresh bakery products that are completely free of preservatives, really healthy, good for health and always dedicated to serving customers. That is the foundation on which DMakeShop has existed and developed sustainably during the past time. </p>
        </div>
        <div class="text-right mt-3 p-3" id="paragraph2" style="background-color: #bbbb2a">
            <h2>Mission</h2>
            <p>
                DCakeShop not only gives users healthy and delicious cakes. We also provide our customers with the best quality service. Above all, we always listen to well-intentioned comments to strive to improve product quality, improve competitiveness and improve service quality to bring utility values suitable to customers. wishes and interests of customers.
            </p>
        </div>
        <div class="text-left mt-3 p-3" id="paragraph3" style="background-color: #d775d7">
            <h2>Vision</h2>
            <p>We are now a national brand. And we are still trying our best to make the DCakeShop brand rise to the international level.</p>
        </div>
    </div>

    <script>
        function p1Mouseover(){
            document.getElementById("paragraph1").style.backgroundColor= ("red");
            document.getElementById("paragraph1").style.fontStyle= ("italic");
        }
        function p1Mouseout(){
            document.getElementById("paragraph1").style.backgroundColor= ("#9f3f3f");
            document.getElementById("paragraph1").style.fontStyle= ("normal");
        }
        let p1 = document.getElementById("paragraph1");
        p1.onmouseover = p1Mouseover;
        p1.onmouseout = p1Mouseout;

        function p2Mouseover(){
            document.getElementById("paragraph2").style.backgroundColor= ("yellow");
            document.getElementById("paragraph2").style.fontStyle= ("italic");
        }
        function p2Mouseout(){
            document.getElementById("paragraph2").style.backgroundColor= ("#bbbb2a");
            document.getElementById("paragraph2").style.fontStyle= ("normal");
        }
        let p2 = document.getElementById("paragraph2");
        p2.onmouseover = p2Mouseover;
        p2.onmouseout = p2Mouseout;

        function p3Mouseover(){
            document.getElementById("paragraph3").style.backgroundColor= ("purple");
            document.getElementById("paragraph3").style.fontStyle= ("italic");
        }
        function p3Mouseout(){
            document.getElementById("paragraph3").style.backgroundColor= ("#d775d7");
            document.getElementById("paragraph3").style.fontStyle= ("normal");
        }
        let p3 = document.getElementById("paragraph3");
        p3.onmouseover = p3Mouseover;
        p3.onmouseout = p3Mouseout;


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
