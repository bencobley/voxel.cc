<?php require_once('protect_this.php'); ?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <!-- Google Analytics -->
    <?php require_once('head.php'); ?>
    <title>Secret Page</title>
</head>

<body class="d-flex flex-column h-100">
    <!-- Navbar -->
    <?php require_once('nav_bar.php'); ?>
    <?php require_once('css/cssvariables.php'); ?>

    <main role="main">
        <div class="container flex-shrink-0">
            <div class="horizontal_nav">
                <ul>
                    <li><a href="secret_page#company_summary">Company Summary</a></li>
                    <li><a href="secret_page#market_analysis">Market and Competitor Analysis</a></li>
                    <li><a href="secret_page#customer_base">Customer Base</a></li>
                    <li><a href="secret_page#concept_development">Concept Development</a></li>
                    <li><a href="secret_page#validation">Validation</a></li>
                    <li><a href="secret_page#business">Business Model and Strategy</a></li>
                </ul>
                <h3>Investor Information Page</h3>
                <br>
                <p>This page provides investors with a brief overview of Voxel’s internal development, including market analysis, product development, user testing, business development and our future plans.</p>
                <br>
                <a id="company_summary"></a>
                <h4>Company Summary</h4>
                <br>
                <h6>Business</h6>
                <ul>
                    <li>Voxel’s goal is to spread creative, privacy focused, smart home technology by becoming the first smart home hardware platform that uses open source software. Voxel taps several strong veins: privacy, smart home customisation and community generated content.</li><br>
                    <li>Our target users struggle to create smart home experiences that fit their specific needs: Existing products are tied to cloud services operated by big tech companies and are designed to lock users into specific ecosystems with deliberately limited integrations. Devices are often difficult to set up, have unintuitive software and generate profit from user data analysis.</li><br>
                    <li>Voxel has created a line of modular, magnetic smart home hardware that allows users to start creating useful experiences in seconds. Voxel hardware is easy to expand or reconfigure, and our wide range of sensors, screens and smart plugs encourage returning customers. </li><br>
                    <li>The online platform hosts the Voxel community where users can receive support, upload, share and download creations. We encourage users to reprogram, tinker and hack our hardware and to contribute to our open source software, adding value to our business and expanding the reach and functionality of our platform.</li><br>
                </ul>
                <h6>Market</h6>
                <ul>
                    <li>In an expanding smart home market, Voxel targets makers (technology and DIY enthusiasts), tech savvy users and home improvers. Voxel is suitable for all ability levels. Users with no electronics or programming knowledge can download projects from our community hub, those looking for greater control can use our graphical ‘drag and drop’ coding system and users with advanced technical knowledge can code in c++ and flash firmware directly to the device.</li><br>
                    <li>We have received interest across vertical market opportunities such as mass market electronics consumers and as an educational tool to teach electronics and programming in schools or makerspaces. </li><br>
                    <li>Key competitors include:<br>
                        - Sonoff; a company who develop smart home hardware that can be reprogrammed relatively
                        easily (although they do not officially support this).<br>
                        - Arduino; open source hardware and software company that produce microcontroller boards
                        - Big tech companies such as google and amazon, who use their smart home products as part of
                        a wider business strategy.<br>
                        - Home Assistant; Open source freeware designed to run on a Raspberry Pi. Acts as a server to
                        control other smart home devices.</li>
                </ul>
                <br>
                <br>
                <br>
                <a id="market_analysis"></a>
                <h4>Our Vision</h4>
                <p>In 2020, the smart homes market is estimated to reach $40 billion and by 2023, it's expected to penetrate almost 54% of households around the world.<br>

                    There are a number of pitfalls when setting up a Smart Home: People struggle to create smart home experiences that fit their specific needs: Existing products are tied to cloud services operated by big tech companies and are designed to lock users into specific ecosystems with deliberately limited integrations. Devices are often difficult to set up, have unintuitive software and generate profit from user data analysis.<br>

                    As avid techies and makers ourselves, we have been frustrated by the lack of configurability and customisation possible with existing solutions and we value complete control over the products we own.<br>

                    There is a market need for a smart home product that puts creativity, exploration and privacy first; an expandable system that allows makers, techies and home-improvers to go from idea to implementation in seconds.<br>
                </p>
                <br>
                <br>
                <br>
                <h4>Customer Base</h4>
                <p>Following a first round of user investigation interviews conducted around Imperial College London and White City Advanced Hackspace, we segmented our customer base into 3 key sections.</p>
                <br>
                <div>
                    <div style="float: left; max-width: 50%">
                        <b>The Tech Junkie</b><br>
                        <p>The tech junkie loves using smart home technology and integrating it into their home; even if the interactions are not that useful, it is all about the novelty factor. They buy products that are fun, quirky, cheap and easy to set up. They jump on the latest tech trends and enjoy showing off their smart home tech.
                        </p>
                    </div>
                    <br>
                    <br>
                    <br>

                    <div style="float: right; max-width: 50%">
                        <b>The Home Improver</b><br>
                        <p>The home improver enjoys optimising their home and automating their devices. They are looking for tech that will provide useful experiences and are willing to pay for high quality devices. They may be concerned about privacy issues but they lack the technical knowledge to develop their own systems. They value a reliable product that is easy to set up and fits in well with their home.
                        </p>
                    </div>

                    <div style="float: left; max-width: 50%">
                        <b>The Maker</b><br>
                        <p>The maker enjoys the challenge, learning experience and satisfaction of creating something useful. They love to share their creations and learn from like minded people. Makers typically have a high level of technical knowledge and are privacy conscious. Therefore they place a lot of value on open source software. Maker’s will pay a premium for hardware that allows maximum ‘hackability’ but that is also reliable and easy to set up.
                        </p>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <br>
                <br>
                <p>From primary and secondary research (detailed below), Voxel has decided to focus on the makers market. The lack of current products suited to this privacy aware demographic, its favourable spending power, receptivity to less developed products and the fact that we are makers ourselves has also helped to inform this decision. <br>
                    In addition to this, makers love to contribute to open source software which is an important facet of our business model; as Voxel grows we will rely on a dedicated and engaged user base to populate our community hub with tutorials, projects and contributions to our source code.<br>
                    A core value of our business is accessibility, whilst we target makers we also aim to excite smart home customers of all levels of expertise through a freely available open source programming platform that does not require pre-existing knowledge. Voxel aims to speak to all branches of the smart home market and expand laterally to meet the needs of an expanding user base.<br>
                </p>
                <br>
                <h4>Market and Competitor Analysis</h4>
                <br>
                <a id="customer_base"></a>
                <h6>Market</h6>
                <p>The Global Smart Home Market was valued at USD 64.33 billion in 2017 and is projected to reach USD 176.59 billion by 2025, growing at a CAGR of 13.5% from 2018 to 2025.<br>
                    The growth in the smart home market is driven by a number of factors. These include technological advancements, energy saving and monitoring, the need to monitor the home remotely, rapid proliferation of smart technologies and media systems. There is a growing concern and consideration for privacy and safety issues with many devices proven vulnerable to hacking and others sending non encrypted personal information to remote overseas servers.<br>
                    The smart home market can be segmented by application into lighting control, security & access control, entertainment systems, HVAC control, home healthcare, smart kitchen, and home appliances. Voxel primarily focuses on lighting control, entertainment systems and home appliances but is designed to allow integration across these segments in future, in keeping with our company values.<br>
                </p>
            </div>
        </div>

        <div style="background-color: <?php echo $tertiary_colour; ?>; padding: 20px 0;">
            <div class="container flex-shrink-0">
                <h4>Online User Feedback</h4>
                <br>
                <p>General comments</p>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/1.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/2.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/3.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/4.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/5.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/6.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/7.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/8.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/9.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/10.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/11.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/12.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/13.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/14.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/15.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/16.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/17.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/18.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/19.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/20.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/21.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/22.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/23.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/24.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/25.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/26.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/27.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/28.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/29.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/30.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/31.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/32.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/33.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/34.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pos/35.jpg" class="slickimage3">
            </div>
            <div class="container flex-shrink-0">
                <p>Specific Tech Questions</p>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/1.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/2.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/3.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/4.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/5.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/6.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/7.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/8.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/9.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/10.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/11.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/12.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/13.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/14.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/15.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/16.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/17.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/18.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/19.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/20.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/21.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/22.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/23.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/24.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/25.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/26.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/27.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/28.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/29.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/30.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/31.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/tech/32.jpg" class="slickimage3">
            </div>
            <div class="container flex-shrink-0">
                <p>Contributers & Price</p>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/1.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/2.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/3.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/1.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/2.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/3.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/4.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/5.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/6.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/7.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/8.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/9.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/10.jpg" class="slickimage3">
            </div>
            <!-- <div class="container flex-shrink-0">
                <h6>Price</h6>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/1.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/2.jpg" class="slickimage3">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/3.jpg" class="slickimage3">

            </div> -->
        </div>
        <div class="container flex-shrink-0">
            <br>
            <BR>
            <p>
                Enim nunc faucibus a pellentesque sit. Elementum facilisis leo vel fringilla est ullamcorper eget nulla. Tellus at urna condimentum mattis pellentesque id nibh tortor. Nunc mattis enim ut tellus elementum sagittis. Quam pellentesque nec nam aliquam sem et. Viverra aliquet eget sit amet tellus cras adipiscing enim eu. Curabitur gravida arcu ac tortor dignissim convallis. Urna et pharetra pharetra massa massa ultricies mi. At in tellus integer feugiat. Metus vulputate eu scelerisque felis. Elit pellentesque habitant morbi tristique senectus et netus et malesuada. Blandit volutpat maecenas volutpat blandit aliquam. Faucibus scelerisque eleifend donec pretium vulputate sapien. Libero volutpat sed cras ornare arcu dui vivamus arcu felis. Ut tortor pretium viverra suspendisse. Sit amet venenatis urna cursus. Dictum at tempor commodo ullamcorper a lacus.<br>

                Convallis a cras semper auctor neque vitae tempus quam. In cursus turpis massa tincidunt. Urna et pharetra pharetra massa massa ultricies mi quis hendrerit. Malesuada fames ac turpis egestas sed tempus. Neque sodales ut etiam sit amet nisl purus. Facilisis volutpat est velit egestas. Risus nullam eget felis eget. In nisl nisi scelerisque eu ultrices vitae. Lectus vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt. Diam sit amet nisl suscipit adipiscing bibendum est. At in tellus integer feugiat scelerisque varius morbi enim. Donec et odio pellentesque diam volutpat commodo. Tellus orci ac auctor augue mauris augue. Nunc mi ipsum faucibus vitae aliquet nec ullamcorper sit. At augue eget arcu dictum varius duis. Accumsan sit amet nulla facilisi morbi tempus. Diam vel quam elementum pulvinar etiam non quam lacus. Bibendum neque egestas congue quisque egestas diam in. Nec ullamcorper sit amet risus nullam eget felis eget. Consectetur purus ut faucibus pulvinar elementum integer enim.</p>
        </div>
    </main>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="slick/slick.js"></script>

    <script src="javascript/main.js"></script>

    <script src="replaceme.min.js"></script>



</body>

</html>