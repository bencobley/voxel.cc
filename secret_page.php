<?php require_once('protect_this.php'); ?>

<!doctype html>
<html lang="en" class="h-100">

<head>
    <?php require_once('head.php'); ?>
    <link rel="stylesheet" href="css/secretpagecss.php">
    <title>Secret Page</title>
</head>

<body class="d-flex flex-column h-100" id="company_summary">
    <!-- Navbar -->
    <?php require_once('nav_bar.php'); ?>
    <?php require_once('css/cssvariables.php'); ?>
    <br>
    <main role="main">
        <header class="masthead mb-5" style="background-image: url('https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/banner.jpg');"></header>
        <br>
        <div class="container flex-shrink-0" style="padding: 0 90px;">
            <h3>Development and Testing</h3>
        </div>
        <br>
        <nav class="horizontal_nav">
            <ul id="mainNav">
                <div class="container flex-shrink-0">
                    <li class="active"><a href="#company_summary">Company Summary</a></li>
                    <li><a href="#customer_base">Customer Base</a></li>
                    <li><a href="#competitor_analysis">Competitor Analysis</a></li>
                    <li><a href="#concept_development">Development & Feedback</a></li>
                    <li><a href="#validation">Validation</a></li>
                </div>
            </ul>
        </nav>
        <br>

        <div class="container flex-shrink-0" style="padding: 0 90px;">
            <section id="company_summary">
            <br>
                        <br>
                        <br>
                <div class="row">
                    <div class="col-sm">
                   
                        <h4>Company Summary</h4>
                        <br>
                        <p>Voxel’s goal is to spread creative technology by becoming the first smart home hardware platform that uses open source software. We have built an easy-to-use range of products that taps several strong veins: privacy, ease of setup, smart home automation and user-generated content.
                            Makers currently struggle to create smart home experiences as their current tools are tied to cloud services, difficult to set up, have unintuitive softwares, and offer limited privacy protection.
                        </p>

                    </div>
                    <div class="col-sm">
                        <img style="max-width: 80%; margin: auto; padding-top: 40px;" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/1.jpg">
                        <br>
                        <br>
                        <br>
                    </div>
                </div>
                <br>
                <h6>Deal</h6>
                <br>
                <p>Voxel is looking for £50,000 Seed Funding to support manufacturing efforts and fund development of a Kickstarter Crowdfunding Campaign. See investor summary <a href="">here</a></p>
                <br>
                <br>
                <br>
                <br>
                <div class="background1">
                    <h6>Team</h6>
                    <ul>
                        <li><b>Gabriele</b> loves quick prototypes, but hates wiring things up and coding. Working at Apple made him realise the importance of designing user-friendly, powerful tools that allow people to focus just on creating. </li><br>
                        <li><b>Oli</b> is a keen smart home enthusiast and has professional experience designing, making and testing consumer facing IOT tech from his time at Magic of Things Ltd.</li><br>
                        <li><b>Ben</b> A former engineer at Google X and Dyson, Ben has both leadership experience and extensive engineering skills spanning hardware and software.</li><br>
                        <li><b>Ellie</b> is passionate about user driven technology, and has professional experience of developing user focused installations at Jason Bruges Studio.</li><br>
                        <li><b>Melisa</b> is an expert in graphic design and user experience. She has professional experience designing marketing material and graphics at CD Projekt Red.</li><br>

                    </ul>
                </div>
                <br>
                <br>
                <h6>Core Company Values</h6>
                <br>
                <ul>
                    <li>Privacy</li>
                    <li>Community</li>
                    <li>Wide Integrations</li>
                    <li>Freedom</li>
                    <li>Accessibility</li>
                    <li>Ease of use</li>
                </ul>
            </section>
            <br>
            <br>
            <br>
            <section id="customer_base">
                <h4>Customer Base</h4>
                <br>
                <p>Following a first round of <a style="color: blue;" href="https://docs.google.com/forms/d/e/1FAIpQLSc6KoAXBtrIV0qBu7Vs1T4wgZgos4d34oR-uLv1ILZToXfi-Q/viewform?usp=sf_link" target="blank">survey based user interviews</a> conducted around Imperial College London and White City Advanced Hackspace, we segmented our customer base into 3 key segments.</p>
                <br>
                <br>
                <br>
                <br>
                <div>
                    <div class="row">
                        <div class="col-sm">
                            <b>The Tech Junkie</b><br><br>
                            <p>The tech junkie loves using smart home technology and integrating it into their home; even if the interactions are not that useful, it is all about the novelty factor. They buy products that are fun, quirky, cheap and easy to set up. They jump on the latest tech trends and enjoy showing off their smart home tech.</p>
                        </div>
                        <div class="col-sm">
                            <br>
                            <br>
                            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <b>The Home Improver</b><br><br>
                            <p>The home improver enjoys optimising their home and automating their devices. They are looking for tech that will provide useful experiences and are willing to pay for high quality devices. They may be concerned about privacy issues but they lack the technical knowledge to develop their own systems. They value a reliable product that is easy to set up and fits in well with their home.</p>
                        </div>
                        <div class="col-sm">
                            <br>
                            <br>
                            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <b>The Maker</b><br><br>
                            <p>The maker enjoys the challenge, learning experience and satisfaction of creating something useful. They love to share their creations and learn from like minded people. Makers can have a broad range of technical skills, some are experts and some are casual hobbyists. Maker’s will pay a premium for hardware that allows maximum ‘hackability’ but that is also reliable and easy to set up.</p>
                        </div>
                        <div class="col-sm">
                            <br>
                            <br>
                            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                        </div>
                        <div style="clear: both"></div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="background1">
                        <h6>Conclusion</h6><br>
                        <p>From primary and secondary research (detailed below), Voxel has decided to focus on the makers market. The lack of current products suited to this privacy aware demographic, its favourable spending power, receptivity to less developed products and the fact that we are makers ourselves has also helped to inform this decision. <br><br>
                            In addition to this, makers love to contribute to open source software which is an important facet of our business model; as Voxel grows we will rely on a dedicated and engaged user base to populate our community hub with tutorials, projects and contributions to our source code.<br><br>
                            A core value of our business is accessibility, whilst we target makers we also aim to excite smart home customers of all levels of expertise through a freely available open source programming platform that does not require pre-existing knowledge. Voxel aims to speak to all branches of the smart home market and expand laterally to meet the needs of an expanding user base.<br><br>
                        </p>
                    </div>
            </section>
            <br>
            <br>
            <br>
            <br>
            <br>
            <section id="competitor_analysis">
                <h4>Competitor Analysis</h4>
                <br>
                <div>
                    <div class="row">
                        <div class="col-sm">
                            <b>Arduino</b><br><br>
                            <ul>
                                <li>Well established electronics standard who sell open source microcontroller boards.</li>
                                <li>Strong community and dedicated user base.</li>
                                <li>Business model involves selling quality hardware and developing open source software. </li>
                                <li>Can be difficult for beginners and is not suitable for more advanced smart home applications.</li>
                            </ul>
                        </div>

                        <div class="col-sm">
                            <br><br>
                            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm">
                            <b>Sonoff</b><br><br>
                            <ul>
                                <li>Sonoff sell cheap smart home hardware such as plugs, switches and basic sensors.</li>
                                <li>Their products are popular with makers because they are easy to dissassemble, modify and reprogram.</li>
                                <li>Sonoff do not officially endorse modifications of their products, despite this being a popular use case.</li>
                                <li>They have their own app and cloud platform for users who wish to use the stock firmware.</li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <br><br>
                            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm">
                            <b>Home Assistant</b><br><br>
                            <ul>
                                <li>Purely open source software, a central smart home server that runs on a raspberry pi or virtual machine.</li>
                                <li>Fremium business model, a paid cloud service is available to enable remote access easily.</li>
                                <li>Hundreds of integrations and is able to support highly sophisticated setups. </li>
                                <li>Requires IT skills and programming knowledge to use. </li>
                            </ul>
                        </div>
                        <div class="col-sm">
                            <br><br>
                            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                        </div>
                    </div>
                    <div style="clear: both"></div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <div class="background1">
                        <p>Voxel offers three unique differentiators. Firstly, it’s completely open source. It puts privacy at the centre of its product by selling great hardware and not data. Second, it’s modular and infinitely customisable. It allows users to build whatever they can dream of in a matter of seconds. Last but not least, it has a powerful online platform that links directly the community to the product, making it extremely easy to upload, share and download projects. </p>
                    </div>
                    <br>
                    <br>
                    <br>

                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                    <br>
                    <br>
                    <br>
                </div>

            </section>
            <br>
            <br>
            <br>
            <section id="concept_development">
                <h4>Concept Development</h4>
                <br>
                <br>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                <br>
                <br>
                <br>
                <h6>Concept</h6>
                <p>The product was conceived with the mission of giving to the crazy inventors, smart home wizards and new makers the tools and flexibility to create whatever they want. The product development journey was guided by users’ feedback and focused on delivering something innovative and disruptive to the market.</p>
                <br>
                <br>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                <br>
                <br>
                <br>
                <h6>Initial User Engagement</h6>
                <br>
                <br>
                <p>Our research at the <a style="color: blue" href="https://forms.gle/iKQaHJzpA2GJi9Mi7" target="blank">Autodesk Makeathon </a>revealed that there would be a strong demand from makers over general consumers who perceived the concept as beyond their ability level and were less likely to get involved with the programming. We explored how users would interact with our product and what features they would find useful before feeding these insights back into the design process.</p>
            </section>
            <br>
            <br>
        </div>
        <section id="concept_development">
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;" id="carousel4">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/3.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/5.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/6.mp4" type="video/mp4">
                </video>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/3.jpg" class="slickimage3">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/4.png" type="video/mp4">
                </video>
            </div>
            <div class="container flex-shrink-0" style="padding: 0 90px;">
                <br>
                <br>
                <br>
                <h6>Looks-like Prototype</h6>
                <br>
                <br>
                <p>The product was initially prototyped using magnets and 3D printed parts to investigate the user interaction of snapping modules together and creating projects. We conducted 18 hours of user interviews with the prototypes and highlighted areas for improvement, such as a visual cue when 2 components were connected and a reduction in the size of the cubes. When asked how and where users would use the Voxel platform, Almost all interviewees expressed interest in placing the modules in their room, kitchen and living room. This information was directly used in the development of the first generation of tile sensors. </p>
                <br>
                <br>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;" id="carousel4">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/7.jpg" class="slickimage3">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/5.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/6.mp4" type="video/mp4">
                </video>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/3.jpg" class="slickimage3">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/4.png" type="video/mp4">
                </video>
            </div>
            <div class="container flex-shrink-0" style="padding: 0 90px;">
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h6>Technical Validation Prototype</h6>
                <br>
                <br>
                <p>To test the technical feasibility of our product, and to establish which existing platforms and services we would be able to integrate with, a works-like prototype was developed. This stage is critical when designing a product for the maker market as users have a highly sophisticated understanding of product development and technical feasibility. It was important that we were prepared for any technical questions during the next stage of validation.</p>
                <br>
                <br>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;" id="carousel4">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/12.jpg" class="slickimage3">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/11.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/13.mp4" type="video/mp4">
                </video>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/8.jpg" class="slickimage3">
            </div>
            <div class="container flex-shrink-0" style="padding: 0 90px;">
                <br>
                <br>
                <br>
                <h6>Design and Development</h6>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                <br>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                <br>
                <br>
                <br>
                <h6>Software UI Development</h6>
                <br>
                <p>When developing the software user interface and programming platform, it was important to cater for all ability levels. The beginner user who has no experience programming is able to download projects from our community with a single click, or use simple ‘drag and drop’ graphical coding based on an open source project such as blockly.</p>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                <br>
                <p>More advanced users are able to dig deeper into the platform and unlock greater control using Python and those with the highest technical knowledge can leave the Voxel platform behind completely, write their own firmware in c++ and flash it to their devices. Our products are designed to make this process as easy as possible.</p>
                <br>
                <br>
                <br>
                <br>
                <br>

                <div class="row">
                    <div class="col-sm">
                        <h6>Working Prototype</h6>
                        <br>
                        <p>With the industrial design complete and the early stage user feedback incorporated, a working prototype was developed for the next stage of testing. This was important as it brought us closer to a saleable product and would enable us to produce more accurate video assets in order to spark interest in the next stage of validation.</p>
                        <br>
                    </div>
                    <div class="col-sm">
                        <video style="width: 100%; height: 300px;" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                            <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH11_old.mp4" type="video/mp4">
                        </video>
                    </div>
                    <br>
        </section>
        <br>
        <br>
        <br>
        </div>
        <section id="validation">
            <div class="container flex-shrink-0" style="padding: 0 90px;">
                <br>
                <h6>Focus Groups</h6>
                <br>
                <p>The working prototype allowed us to conduct one on one interviews demonstrating hands-on interaction with the prototype and gaining more feedback about the product and concept. We expanded our reach beyond users with maker and tech experience and found that our privacy values resonated well in our focus groups.</p>
                <br>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;" id="carousel4">
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/FG3.JPG" class="slickimage3">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/FG2.mp4" type="video/mp4">
                </video>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/3.jpg" class="slickimage3">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/FG1.mp4" type="video/mp4">
                </video>
            </div>
            <div class="container flex-shrink-0" style="padding: 0 90px;">
                <br>
                <br>
                <br>
                <br>
                <h6>Social Media Makers Communities </h6>
                <br>
                <p>We targeted maker communities and forums on reddit and facebook and received over 100 pieces written of feedback from makers, including many experts in the field, including the manufacturer of the ESP8266 chip, around which our concept is based.The project was well received especially with regard to being open source and private.
                    From this research we realised we needed deeper technical specification and to differentiate ourselves from existing open source smart home platforms that only provide software. We adjusted our website accordingly and added an FAQ section.
                </p>
                <br>
                <br>
            </div>
            <div style="background-color: <?php echo $tertiary_colour; ?>; padding: 20px 0;">
                <div class="container flex-shrink-0" style="padding: 0 90px;">
                    <h4>Online User Feedback</h4>
                    <br>
                    <b>General comments</b>
                    <br>
                    <br>
                    <br>
                    <div style="max-width: 50%; margin: auto;">
                        <blockquote class="blockquote">
                            <p>Awesome prototype and concept! I'm constantly thinking that I would love in my lounge a simple setup that shows time, weather, tides, today's calendar, a pre-defined list of music playlists and some basic light control. There may be some creativity required for things that require more textual detail (i.e. calendar) but I like the low-res vibe for everything else.</p>
                        </blockquote>
                        <button class="btn btn-primary" onclick="hide1()">Show All Comments</button>
                    </div>
                    <br>
                </div>
                <div class="slickcarousel mx-auto" style="display: none; max-width: 2000px; padding: 10px;" id="carousel1">
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
                <div class="container flex-shrink-0" style="padding: 0 90px;">
                    <br>
                    <b>Specific Tech Questions</b>
                    <br>
                    <br>
                    <br>
                    <div style="max-width: 50%; margin: auto;">
                        <blockquote class="blockquote">
                            <p>The best feature is probably that it integrates with those other platforms. I think integration is probably the key to success in this field. Home automation and IoT in general are just starting to get past the stage where personal computers were in the mid-80s, when we had Apple, IBM, Commodore, Amiga and a host of others, each in its own silo.</p>
                        </blockquote>
                        <button class="btn btn-primary" onclick="hide2()">Show All Comments</button>
                    </div>
                    <br>
                </div>
                <div class="slickcarousel mx-auto" style="display: none; max-width: 2000px; padding: 10px;" id="carousel2">
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
                <div class="container flex-shrink-0" style="padding: 0 90px;">
                    <br>
                    <br>
                    <b>Price</b>
                    <br>
                    <br>
                    <p>Specific research was conducted to establish how much the target market would be willing to pay for the starter pack. From x results the average price was around $x, and this figure was used to inform the P&L spreadsheet. Several makers also expressed interest in collaborating and contributing to the open source software and we have created an email database of these potential contributors, as well as a database of those interested in updates about the kickstarter.</p>
                    <br>
                    <br>
                    <div style="max-width: 50%; margin: auto;">
                        <blockquote class="blockquote">
                            <p>My suggestion is use a SMB for a server (if required), as it's a pain to run openhab sometimes. I would say, for a starter pack between $50-100, again depending on what goes in it.</p>
                        </blockquote>
                        <button class="btn btn-primary" onclick="hide3()">Show All Comments</button>
                    </div>
                    <br>
                </div>
                <div class="slickcarousel mx-auto" style="display: none; max-width: 2000px; padding: 10px;" id="carousel3">
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
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/11.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/12.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/13.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/14.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/15.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/price/16.jpg" class="slickimage3">
                </div>
                <div class="container flex-shrink-0" style="padding: 0 90px;">

                    <br>
                    <b>Contributers</b>
                    <br>
                    <br>
                    <br>
                    <div style="max-width: 50%; margin: auto;">
                        <blockquote class="blockquote">
                            <p>I think one of the main things missing from what's out there at the moment, is plug and play hardware combined with a decent reporting interface. That someone non - techie but interested in automating/monitoring their homes, would enjoy looking at and derive value and insight from.

                                Where are you based? Are you looking for collaborators?</p>
                        </blockquote>
                        <button class="btn btn-primary" onclick="hide4()">Show All Comments</button>
                    </div>
                    <br>
                </div>
                <div class="slickcarousel mx-auto" style="display: none; max-width: 2000px; padding: 10px;" id="carousel5">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/1.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/2.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/3.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/4.jpg" class="slickimage3">
                </div>
            </div>

            <div class="container flex-shrink-0" style="padding: 0 90px;">
                <br>
                <br>
                <h6>Traction Testing</h6>
                <p>During our research on social media we left links to our website and sign-up links to our community. Our website portrays our starter pack as a finished product and includes a ‘fake door’ buy button to gather information on what percentage of website visitors would purchase our starter pack. We used google analytics to track our website activity.</p>
                <br>
                <br>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/10.jpg" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
                <br>
                <br>
                <ul style="text-align:center">
                    <h4>&bull; 5.5% buy button click-through rate</h4><br>
                    <h4>&bull; 18.8% product page click-through rate</h4><br>
                    <h4>&bull; 53% Bounce Rate</h4><br>
                    <h4>&bull; 1000 unique sessions from 68 countries</h4><br>
                </ul>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>



            </div>
        </section>
    </main>

    <?php require_once('footer.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.bundle.js"></script>
    <script src="slick/slick.js"></script>
    <script src="javascript/main.js"></script>
    <script src="replaceme.min.js"></script>

    <script>
        function hide1() {
            var x = document.getElementById("carousel1");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hide2() {
            var x = document.getElementById("carousel2");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hide3() {
            var x = document.getElementById("carousel3");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }

        function hide4() {
            var x = document.getElementById("carousel5");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>
    <script>
        // Cache selectors
        var lastId,
            topMenu = $("#mainNav"),
            topMenuHeight = topMenu.outerHeight() + 1,
            // All list items
            menuItems = topMenu.find("a"),
            // Anchors corresponding to menu items
            scrollItems = menuItems.map(function() {
                var item = $($(this).attr("href"));
                if (item.length) {
                    return item;
                }
            });

        // Bind click handler to menu items
        // so we can get a fancy scroll animation
        menuItems.click(function(e) {
            var href = $(this).attr("href"),
                offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
            $('html, body').stop().animate({
                scrollTop: offsetTop
            }, 850);
            e.preventDefault();
        });

        // Bind to scroll
        $(window).scroll(function() {
            // Get container scroll position
            var fromTop = $(this).scrollTop() + topMenuHeight;

            // Get id of current scroll item
            var cur = scrollItems.map(function() {
                if ($(this).offset().top < fromTop)
                    return this;
            });
            // Get the id of the current element
            cur = cur[cur.length - 1];
            var id = cur && cur.length ? cur[0].id : "";

            if (lastId !== id) {
                lastId = id;
                // Set/remove active class
                menuItems
                    .parent().removeClass("active")
                    .end().filter("[href=#" + id + "]").parent().addClass("active");
            }
        });
    </script>


</body>

</html>