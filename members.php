<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/member.css">
</head>

<body class="lang_tw index">
    <?php
    // include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <div id="Wapper">
        <div class="bread">
            <a href="./">HOME</a>
            <a class="active">MEMBERS</a>
        </div>
        <section class="row">
            <div class="col-xl-8 col-9 col-auto">
                <h1 class="h1title">Members</h1>
                <div class="title-line"></div>
            </div>
            <div class="col-10 col-auto member-main">
                <div>
                    <div class="mimg">
                        <img src="dist/images/member/TSAI-Ping-Ju.png" alt="蔡秉儒">
                    </div>
                    <div class="info">
                        <div class="name-en">TSAI Ping-Ju</div>
                        <div class="name-tw">蔡秉儒</div>
                        <div class="stext">Born in Tainan in 1993, Tsai Ping-Ju is a student of M.F.A Program, Department of Art and Design, National Taipei University of Education. From majoring in metal sculpture during college to now specializing in Art Theory and Critique, the turn implies his expectation to have more flexibility and openness in different forms of creation and multiple art practices. Tsai currently focuses on the subject of identity. He tries to pay close attention to various narratives of individuals' lives under the single correctness of certain value, in order to dig tortuous paths alongside the Avenue of Ideology.</div>
                    </div>
                </div>
                <div>
                    <div class="mimg">
                        <img src="dist/images/member/LI-Kuei-Pi.png" alt="李奎壁">
                    </div>
                    <div class="info">
                        <div class="name-en">LI Kuei-Pi</div>
                        <div class="name-tw">李奎壁</div>
                        <div class="stext">Li Kuei-Pi was born in Tainan in 1991. She received her MFA from Taipei National University of the Arts in 2017, and currently lives in Taipei. Her work engages in transnational mobility and labor experience, in which she converts objects created from labor and intervenes in the labor process, transforming the meaning of the products to convey her critical viewpoints about the modern material world. <br><br>

                        Li specializes in utilizing objects from the site of labor work before employing means of imitation, reproduction and remaking to entrap the audience in her elaborately conceived works, in which the audience become performers as well as part of the exhibited works. Meanwhile, she makes use of historical clues embedded in the objects to include issues related to the identity of different communities in her discussion about production systems. For the artist, history is not simply a string of linearly associated events but the result formed through a gradually changing process of production systems. The changes in the latter also indicate changes in techniques and instruments. Therefore, one of her constant focus is how to incorporate these changes into her creations while involving the audience in the completion of these works.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="member-list bgblack">
            <div class="text-center">
                <div class="bdr">MEMBER LIST</div>
                <h2 class="h2title">The Footprints of Maroon</h2>
            </div>
            <ul id="project1"></ul>
            <h2 class="h2title">Astronesian Atlas</h2>
            <ul id="project2"></ul>
            <h2 class="h2title">AQUARIUM</h2>
            <ul id="project3"></ul>
        </section>
    </div>
    <?php include "quote/template/footer.php"; ?>
    <script>
        let p1 = document.getElementById('project1')
        let p2 = document.getElementById('project2')
        let p3 = document.getElementById('project3')
        $.ajax({
            type: "GET",
            async: true,
            url:"dist/data/data.json",
            dataType: "json",    
            success: function(msg) {
                let template = "";
                msg.forEach(function(value,i) {
                    template += `<li>
                        <a href="member.php?name=${value.photo}">
                            <div class="mimg">
                                <img src="dist/images/member/${value.photo}.png" alt="">
                            </div>
                            <div class="mpsrel">
                                <div class="name">${value.name}</div>
                                <div class="title">${value.title}r</div>
                                <div class="deco"><i></i></div>
                            </div>
                        </a>
                    </li>`
                    if(i == 10){
                        p1.innerHTML = `${template}`;
                        template = "";                        
                    }else if(i == 13){
                        p2.innerHTML = `${template}`;
                        template = ""; 
                    }else if(i == 28){
                        p3.innerHTML = `${template}`;
                        template = "";
                    }
                });
            }  
        })
    </script>
</body>

</html>