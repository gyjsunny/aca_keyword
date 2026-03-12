<?php include "quote/template/head.php"; ?>
<link rel="stylesheet" href="dist/css/project.css">
</head>

<body class="lang_tw index">
    <?php
    // include "quote/template/added.php";
    include "quote/template/nav.php";
    ?>
    <div id="Wapper" class="project-h">
        <div class="bread">
            <a href="./">index</a>
            <a class="active">PROJECT</a>
        </div>
        <h1 class="h1title mb80">Project</h1>
        <div class="tab-wrap">
            <div class="tab-inner">
                <a href="#" class="active">
                    <span class="en">PHASE 1</span>
                    <span class="tw">第一期</span>
                </a>
                <a href="#">
                    <span class="en">PHASE 2</span>
                    <span class="tw">第二期</span>
                </a>
            </div>
        </div>
        <div class="project-container">
            <ul class="project-list bgblack fserif active">
                <li>
                    <a href="The-footprints-of-Maroon.php">
                        <div class="tname">The Footprints of Maroon</div>
                        <div class="name">by <b>LI Kuei-Pi</b></div>
                    </a>
                </li>
                <li>
                    <a href="Astronesian-Atlas.php">
                        <div class="tname">Astronesian Atlas</div>
                        <div class="name">by <b>Rikey Tēnn</b></div>
                    </a>
                </li>
                <li>
                    <a href="Aquarium.php">
                        <div class="tname">AQUARIUM</div>
                        <div class="name">by <b>Issay Roriguez</b></div>
                    </a>
                </li>
            </ul>
            <ul class="project-list bgblack fserif">
                <li>
                    <a href="#.php">
                        <div class="tname">Injustice Systems</div>
                        <div class="name">by <b>Anna Ehrenstein</b></div>
                    </a>
                </li>
                <li>
                    <a href="#.php">
                        <div class="tname">Fortified Hill Village</div>
                        <div class="name">by <b>JUAN Po-Yuan</b></div>
                    </a>
                </li>
                <li>
                    <a href="#.php">
                        <div class="tname">The Body's Tale of Vengeance & Mercy</div>
                        <div class="name">by <b>LEE Tzu-Tong</b></div>
                    </a>
                </li>
                <li>
                    <a href="#.php">
                        <div class="tname">Post Censorship Self-Mapping Workshop</div>
                        <div class="name">by <b>Lisistrata Lusandiana</b></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <?php include "quote/template/footer.php"; ?>
    <script>
        const tabs = document.querySelectorAll('.tab-inner a');
        const lists = document.querySelectorAll('ul.project-list');

        tabs.forEach((tab, index) => {

            tab.addEventListener('click', e => {

                e.preventDefault();

                console.dir(e.currentTarget)
                // tab active
                tabs.forEach(t => t.classList.remove('active'));
                tab.classList.add('active');

                // list active
                lists.forEach(list => list.classList.remove('active'));
                lists[index].classList.add('active');

            });

        });
    </script>
</body>

</html>