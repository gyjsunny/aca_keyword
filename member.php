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
            <a href="members.php">MEMBERS</a>
            <a class="active">LI Kuei-Pi</a>
        </div>
        <section class="row member-info">
            <div class="col-xl-8 col-lg-10 col-auto">
                <div class="text-center">
                    <h2></h2>
                    <h1></h1>
                    <div class="mimg"><img src="" alt=""></div>
                </div>
                <div class="stext"></div>
                <div class="mail"></div>
            </div>
        </section>
        <section class="bgblack text-center artwork">
            <div><b class="bdr">PROJECT</b></div>
            <div class="info" id="artwork-info"></div>
            
                <!-- <h5>The Footprints of Maroon</h5>
                <h3 class="mt">Voice</h3>
                <div class="tag">
                    <span>#Voice</span>
                </div> -->
            <div><a href="#" class="readmore">READ MORE</a></div>
        </section>
    </div>
    <?php include "quote/template/footer.php"; ?>
    <script>
        let artwork = document.getElementById('artwork-info')
        let url = location.href;
	    let URL = url.split("name=");
        let name = URL[1];
        let url_data = {
            0:"The-footprints-of-Maroon.php",
            1:"Voice.php",
            2:"Local-and-virtual-interface.php",
            3:"Mahila-Zine-7.php",
            4:"Astronesian-Atlas.php",
            5:"The-History-of-the-Territory.php",
            6:"We—In-between-kita-and-kami.php",
            7:"Aquarium-poetry-workshop.php",
            8:"Aquarium.php"
        }
        $.ajax({
            type: "GET",
            async: true,
            url:"dist/data/data.json",
            dataType: "json",    
            success: function(msg) {
                let template = "";
                msg.forEach(function(value,i) {
                    
                    if(value.photo == name){
                        $('.member-info h2').html(value.title)
                        $('.member-info h1,.bread .active').html(value.name)
                        $('.member-info .stext').html(nl2br(value.intro))      
                        $('.readmore').attr('href',url_data[value.projectId])                
                        if(value.photo != "Member-Shau-lou-Young" && value.photo != "Member-Charulata-Mukherjee"){
                            $('.member-info .mimg img').attr('src',"dist/images/member/"+value.photo+".png")
                        }

                        let tagsAry = value.tag.split("# ");
                        let tags = "";
                        tagsAry.forEach(function(v){
                            if(v != ""){
                                tags += `<span># ${v}</span>`
                            }
                        })
                        if(value.mail != "-"){
                            template = `
                                <span>Email</span>
                                <a href="mailto:${value.mail}">${value.mail}</a>`
                        }
                        if(value.blog != "-"){
                            template += `<br>
                                <span>Blog</span>
                                <a href="${value.blog}">${value.blog}</a>`
                            
                        }
                        $('.member-info .mail').html(`${template}`)
                        if(value.photo == "Member-LI-Kuei-Pi" || value.photo == "Member-Rikey-Tenn-1" || value.photo == "Member-Issay-Rodriguez"){
                            template = ` <h3>${value.project}</h3> `
                            artwork.innerHTML = `${template}`;
                            console.log(template)
                        }else{
                            if(i <= 10) template = `<h5>The Footprints of Maroon</h5>`;
                            else if(i >=11 && i<=13) template = `<h5>Astronesian Atlas</h5>`;
                            else template = `<h5>AQUARIUM</h5>`;
                            template += `
                            <h3 class="mt">${value.project}</h3>
                            <div class="tag">${tags}</div> `
                            artwork.innerHTML = `${template}`;
                        }
                    }
                    
                });
            }  
        })
    </script>
</body>

</html>