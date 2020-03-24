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
        <div class="cont">
            <h1>Development and Testing</h1>
        </div>
        <br>
        <br>
        <nav class="horizontal_nav">
            <ul id="mainNav">
                <div class="container flex-shrink-0">
                    <li class="active"><a href="#company_summary">Welcome</a></li>
                    <li><a href="#customer">Understanding Our Customers</a></li>
                    <li><a href="#competitor_analysis">Competitor Analysis</a></li>
                    <li><a href="#concept_development">Development & Feedback</a></li>
                    <li><a href="#validation">Validation</a></li>
                </div>
            </ul>
        </nav>
        <br>

        <div class="cont">
            <section id="company_summary">
                <br>
                <br>
                <h4>Welcome</h4>
                <br>
                <p>This page provides investors with an overview of Voxel’s prototyping and user testing process, the feedback gained, and the resulting changes made.</p>
                <br>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/1.jpg" style="padding-left: 200px; max-width:80%;">
                <br>
                <br>
                <br>
                <p>Voxel is looking for £50,000 Seed Funding to support manufacturing efforts and fund development of a Kickstarter campaign.</a></p>
                <a href="https://voxelmedia.s3.eu-west-2.amazonaws.com/report.pdf" class="btn btn-primary">Download May 2020 Investment Note</a>
                <br>
                <br>
                <br>
                <h6>About Us</h6>
                <br>
                <p>We are Voxel. We are a team of passionate makers, and we started this project after identifying a need in the community for a smart home that puts privacy, creativity and exploration first. Frustrated by data concerns and lack of configurability and customizability with existing solutions, we believe everyone deserves complete control over products they own.</p>
                <br>
                <p>In user testing, this idea strongly resonated with a diversity of like-minded people. <a style="color:blue;" href="#tractiontesting">Traction Testing <a> also showed good retention and click-through with makers on the site. Feedback has been overwhelmingly positive, so we will be launching a Kickstarter campaign.</p>


                <br>
                <br>
                <h6>Team</h6>
            </section>
        </div>
        <div style="margin: auto;">
            <div class="slickcarousel mx-auto" style="max-width: 2000px;">
                <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU2.png" class="slickimage">
                    <div style="padding: 15px;" class="aboutuscontainer">
                        <p style="text-align: center;">Ben - CEO</p>
                        <p>A former engineer at Google X and Dyson, Ben has both leadership experience and extensive engineering skills spanning hardware and software. He started this project after a LOT of frustration over his smart home. </p>
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU7.jpg" class="internshiplogo">
                    </div>
                </div>
                <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU3.png" class="slickimage">
                    <div style="padding: 15px;" class="aboutuscontainer">
                        <p style=" text-align: center;">Ellie - COO</p>
                        <p>Ellie is passionate about user driven technology, and has professional experience of developing user focused installations at Jason Bruges Studio. Ellie and her Amazon Alexa have a love-hate relationship. </p>
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU8.png" class="internshiplogo" style="padding-top: 20px;">
                    </div>
                </div>
                <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU4.png" class="slickimage">
                    <div style="padding: 15px;" class="aboutuscontainer">
                        <p style="text-align: center;">Gabi - CCO</p>
                        <p>Gabi loves quick prototypes, but hates wiring things up and coding. Working at Apple made him realise the importance of designing user-friendly, powerful tools that allow people to focus just on creating.</p>
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU9.jpg" class="internshiplogo">
                    </div>
                </div>
                <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU5.png" class="slickimage">
                    <div style="padding: 15px;" class="aboutuscontainer">
                        <p style="text-align: center;">Melisa - CMO</p>
                        <p>Melisa is an expert in graphic design and user experience. She has professional experience designing marketing material and graphics at CD Projekt Red. Melisa is working on a side project to bring back the humble fax machine. </p>
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU10.png" class="internshiplogo">
                    </div>
                </div>
                <div><img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU6.png" class="slickimage">
                    <div style="padding: 15px;" class="aboutuscontainer">
                        <p style="text-align: center;">Oli - CTO</p>
                        <p>Oli is our hardware expert, he is a keen smart home enthusiast (he has 7 smart lava lamps!) and has professional experience developing consumer facing IOT tech from his time at Magic of Things Ltd.</p>
                        <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/AU/AU11.png" class="internshiplogo">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <div class="cont">
            <section id="customer">

                <h4>Understanding our Customers</h4>
                <br>
                <p>The idea for this business was motivated by a desire to solve a problem that affected us personally as makers. It was now time to explore whether the same problems are faced by other people.</p>
                <br>
                <br>
                <b>Key objectives</b>
                <br>
                <p>To understand what being a ‘maker’ really means, understand who this product applies to, and develop personas that will enable us to meet user needs. </p>
                <br>
                <br>
                <b>Activities</b>
                <br>
                <p>We are fortunate to be part of a community of maker-minded people at Imperial; in the Design Engineering Department and at the Advanced Hackspace. We also spoke to parents in the Department, friends and family, and educators in making. </p>
                <br>
                <p>In total 20+ hours of qualitative <a style="color: blue;" href="https://docs.google.com/forms/d/e/1FAIpQLSc6KoAXBtrIV0qBu7Vs1T4wgZgos4d34oR-uLv1ILZToXfi-Q/viewform?usp=sf_link">long-format user interviews</a> were undertaken with participants of all ages, and a range of experience in making and smart homes. We appreciated that the diversity of backgrounds of interviewees was limited, however this provided a good start. </p>
                <br>
                <br>
                <b>Results</b>
                <br>
                <p>We were surprised to find that our target user group ‘makers’ was really four distinct segments. The feedback was highly valuable in showing that interest in the product was motivated by various different needs. Personas were developed to capture these segments.</p>
                <br>
                <br>
                <b>Changes</b>
                <br>
                <p>Analysis and review of user interviews, helping develop accurate persona profiles that encapsulated the needs and preferences of the four specific subgroups. </p>
                <br>
                <br>
                <br>
        </div>
        <div class="cont" style="background-color: <?php echo $tertiary_colour; ?>;">
            <h6>Persona Development</h6>
            <br>
            <br>
            <div>
                <div class="row">
                    <div class="col-sm">
                        <b>The Tech Junkie</b><br><br>
                        <p>The tech junkie loves using smart home technology and integrating it into their home; even if the interactions are not that useful, it is all about the novelty factor. They buy products that are fun, quirky and easy to set up. They jump on the latest tech trends and enjoy showing off their smart home tech.</p>
                    </div>
                    <div class="col-sm">
                        <br>
                        <br>
                        <img style="max-width: 400px;" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/personas/1.png">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <b>The Home Improver</b><br><br>
                        <p>The home improver enjoys optimising their home and automating their devices. They are looking for tech that will provide useful functionality, customizability and are willing to pay for high quality devices. They may be concerned about privacy issues but they lack the technical knowledge to develop their own systems. They value a reliable product that is easy to set up and fits in well with their home.</p>
                    </div>
                    <div class="col-sm">
                        <br>
                        <br>
                        <img style="max-width: 400px;" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/personas/2.png">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <b>The Beginner Tinkerer</b><br><br>
                        <p>The beginner tinkerer enjoys the challenge, learning experience and satisfaction of creating something themselves. They might be new to making but they are keen to get stuck in. The project might not be useful to daily life but they hope to move towards that. The beginner tinkerer loves to share their creations and learn from like minded people. </p>
                    </div>
                    <div class="col-sm">
                        <br>
                        <br>
                        <img style="max-width: 400px;" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/personas/3.png">
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <b>The Advanced Hacker</b><br><br>
                        <p>Advanced Hackers are expert makers. They will pay a premium for hardware that is designed for maximum ‘hackability’ and is well-documented online. Projects can either be useful or useless, what is important is that the building process is an exciting challenge. They may share their creations with the community online, and will certainly use the community to help solve errors!</p>
                    </div>
                    <div class="col-sm">
                        <br>
                        <br>
                        <img style="max-width: 400px;" src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/personas/4.png">
                    </div>
                    <div style="clear: both"></div>
                </div>
                <br>
                <br>
                <br>
            </div>
            </section>
        </div>
        <div class="cont">
            <br>
            <br>
            <h6>User Preference Analysis</h6><br>
            <br>
            <br>
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png" class="d-block h-100 w-100" style="object-fit: cover; max-width: 800px; margin: auto;">
            <br>
            <br>
            <section id="competitor_analysis">
                <h4>Competitive Product Analysis </h4>
                <br>
                <br>
                <b>Key objectives:</b>
                <p>To understand why a customer would or would not choose to invest in a Voxel product, and the price points at which we are competing. To understand commonalities between customers and areas in which Voxel can differentiate itself. </p>
                <br>
                <br>
                <b>Activities: </b>
                <p>Desk research into products available online, including a deep dive into the reviews for each. </p>
                <br>
                <br>
                <b>Results:</b>
                <p>Table summarising functions, price, pro and cons of competitors for each subgroup. </p>
                <br>
                <br>
                <h6>The Tech Junkie: Competition</h6>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                <br>
                <br>
                <h6>The Home Improver: Competition</h6>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                <br>
                <br>
                <br>
                <h6>The Beginner Tinkerer: Competition</h6>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                <br>
                <br>
                <br>
                <h6>The Advanced Hacker: Competition</h6>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/WH/WH13.png">
                <br>
                <br>
                <br>
            </section>
        </div>
        <div class="cont">
            <section id="competitor_analysis" style="padding: 20px; background-color: <?php echo $tertiary_colour; ?>;">
                <h6>How Does Voxel Differ From the Competition?</h6>
                <br>
                <p>Our vision is unique in encapsulating all of the below:</p>
                <ol>
                    <li> A fully open-source, privacy first ecosystem.</li>
                    <li> Modular, infinitely expandable and easy to use hardware. </li>
                    <li> An exciting community where creators can share their projects and find inspiration. </li>
                </ol>
            </section>
            <br>
            <br>
            <br>
            <br>
            <section id="concept_development">
                <h4>Concept Development</h4>
                <br>
                <p>The product was conceived with the mission of giving to the crazy inventors, smart home wizards and new makers the tools and flexibility to create whatever they want. The product development journey was guided by users’ feedback and focused on delivering something innovative and disruptive to the market.</p>
                <br>
                <p>The Cubes concept was chosen for two main reasons: first, the cubic shape is simple and iconic, suggesting in hardware the modularity of the whole system. Second, cubes were chosen as a strong form in balancing the combining of maker components with premium smart home equipment. </p>
                <br>
            </section>
        </div>

        <div class="cont">
            <section id="concept_development">
                <h6>Prototype A: Technical Validation</h6>
                <br>
                <br>
                <b>Activity: </b>
                <p>A technical prototype was built, made up of the components that form the modules in the Cubes concept. </p>
                <br>
                <br>
                <b>Key objective:</b>
                <p>To test the technical feasibility of the Cubes product idea, and establish which services could be integrated. This was critical in designing a product for the maker market, as users have a strong understanding of technical feasibility.</p>
                <br>
                <br>
                <br>
            </section>
        </div>
        <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/12.jpg" class="slickimage3">
            <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/pcb.mp4" type="video/mp4">
            </video>
            <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/13.mp4" type="video/mp4">
            </video>
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/8.jpg" class="slickimage3">
        </div>
        <div class="cont">
            <section id="concept_development">
                <b>Feedback: </b>
                <p> The prototype demonstrated that the technical challenge of assembling a diverse range of modules into a modularised system was possible. The internal components are fundamentally simple, the next challenge was to package them in such a way that communicates the added value of a modular system.</p>
                <br>
                <br>
                <b>Changes:</b>
                <p> We realised that while the LED matrix fully matched the block dimensions, the sensors’ circuit was considerably smaller. To optimise space and reduce costs, the sensors’ embodiment was reimagined into a flat tile-shaped module.</p>
                <br>
                <br>
                <br>
                <h6>Prototype B: Visual Prototype</h6>
                <br>
                <br>
                <b>Activity: </b>
                <p>The creation of visual prototypes using magnets and 3D printed parts. User interviews were conducted including the prototypes (see next section).</p>
                <br>
                <br>
                <b>Key objective:</b>
                <p>To understand various product specifics:</p>
                <ul>
                    <li>Magnet strength and conductivity</li>
                    <li>Module size </li>
                    <li>Magnets position </li>
                    <li>Colour, material and finish</li>
                    <li>Module shape</li>
                </ul>
                <br>
                <br>
            </section>
        </div>
        <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
            <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/front_sound.MP4" type="video/mp4">
            </video>
            <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/multiplay.MP4" type="video/mp4">
            </video>
            <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/BC_closeup_blocks.MP4" type="video/mp4">
            </video>
            <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sound_block1.MP4" type="video/mp4">
            </video>
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/7.jpg" class="slickimage3">
        </div>
        <div class="cont">
            <section id="concept_development">
                <div class="cont">
                    <b>Feedback: </b>
                    <ul>
                        <li>Users felt that the modules were missing a visual cue after they snapped blocks together.</li>
                        <li>Users were expecting smaller cubes and tiles for easier use with one hand. </li>
                        <li>Users expressed interest in placing the modules in their room, kitchen and living room, pushing us to focus on the development of sensors that matched the needs of those rooms.</li>
                    </ul>
                    <br>
                    <br>
                    <b>Changes:</b>
                    <ul>
                        <li>We redesigned the modules to follow more rounded outlines and softer overall shapes, and a more homely material finish and feel. </li>
                        <li>We redesigned several key interactions such as the multi-input module as it did not provide the desired affordance. </li>
                        <li>We designed a UI for the LED matrix that showed a visual cue after every snapping interaction.</li>
                    </ul>
                    <br>
                    <br>
                    <br>
                    <h6>Concept and Prototype User Testing </h6>
                    <br>
                    <br>
                    <b>Activity: </b>
                    <p>Running a stand at the <a style="color:blue;" href="https://www.imperialhackspace.com/events/design-engineering-society-makeathon-2020/">Autodesk Makeathon 2020 <a>to interview users. Brand imagery, visual prototype prompts and post-it note inspiration boards were used to discuss ideas. </p>
                    <br>
            </section>
        </div>
        <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
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
        <div class="cont">
            <section id="concept_development">
                <b>Feedback: </b>
                <ul>
                    <li>The price users were expecting to pay was far higher than our original expectations, perceived value was high: averaging around £100, we expected around £50. </li>
                    <li>Users showed a surprising amount of interest in the use cases offered by the LED matrix display, pushing us to develop further its UI and possible interactions.</li>
                    <li>The possibility in projects did not come across well in communication. </li>
                </ul>
                <br>
                <br>
                <b>Changes:</b>
                <ul>
                    <li>We designed more than 20 new demonstration display interactions for specific use cases suggested by users.</li>
                    <li>Higher perceived value feedback was incorporated into financial forecasting happening in parallel. </li>
                    <li>We went back to the drawing board with brand communication, resulting in the ‘Own your smart home’ branding you see today. </li>
                </ul>
                <br>
                <br>
                <h4>Hardware Design Iteration</h4>
            </section>
        </div>
        <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sketch/1.PNG" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sketch/3.PNG" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sketch/4.PNG" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sketch/5.PNG" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sketch/6.PNG" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/sketch/7.PNG" class="slickimage3">
        </div>
        <br>
        <br>
        <br>
        <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cad/1.png" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cad/3.png" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cad/4.png" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cad/5.png" class="slickimage3">
            <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cad/6.png" class="slickimage3">
        </div>
        <div class="cont">
            <section id="concept_development">
                <br>
                <br>
                <br>
                <h6>Prototype C: Assemble-at-home Prototype</h6>
                <br>
                <br>
                <b>Activity: </b>
                <p>Hands-on testing with assemble-at-home prototype. For this quick test, participants were readily available friends and family (and other group members!).</p>
                <br>
                <br>
                <b>Key objective:</b>
                <p>To test the idea that the modules could be assembled at home, reinforcing the idea of ‘open’ design, while reducing manufacturing costs. Key ideas to test:</p>
                <ul>
                    <li>User self-assembly feasibility</li>
                    <li>Ease of assembly - targeting 4 minute maximum assembly time</li>
                    <li>Design for manufacturing</li>
                    <li>User experience in assembly interaction</li>
                </ul>
                <br>
                <br>
                <b>Feedback: </b>
                <p>Hands-on testing with assemble-at-home prototype. For this quick test, participants were readily available friends and family (and other group members!).</p>
                <br>
                <br>
                <b>Changes:</b>
                <p>To test the idea that the modules could be assembled at home, reinforcing the idea of ‘open’ design, while reducing manufacturing costs. Key ideas to test:</p>
                <ul>
                    <li>We simplified the assembly process by narrowing it down to 4 steps.</li>
                    <li>The internal CAD design of the device was redesigned to guide the user as it slides in the components.</li>
                    <li>Design for manufacturing</li>
                    <li>We improved the packaging by designing and including a storyboard that users can refer to during the assembly process.</li>
                </ul>
                <br>
                <div class="row">
                    <div class="col-sm">
                        <h6>Software UI Development</h6>
                        <br>
                        <br>
                        <b>Activity: </b>
                        <p>Hands-on testing with assemble-at-home prototype. For this quick test, participants were readily available friends and family (and other group members!).</p>
                        <br>
                        <br>
                        <b>Key objective:</b>
                        <p>To test the idea that the modules could be assembled at home, reinforcing the idea of ‘open’ design, while reducing manufacturing costs. Key ideas to test:</p>
                        <ul>
                            <li>User self-assembly feasibility</li>
                            <li>Ease of assembly - targeting 4 minute maximum assembly time</li>
                            <li>Design for manufacturing</li>
                            <li>User experience in assembly interaction</li>
                        </ul>
                        <br>
                        <br>
                        <b>Feedback: </b>
                        <p>Hands-on testing with assemble-at-home prototype. For this quick test, participants were readily available friends and family (and other group members!).</p>
                        <br>
                        <br>
                        <b>Changes:</b>
                        <p>To test the idea that the modules could be assembled at home, reinforcing the idea of ‘open’ design, while reducing manufacturing costs. Key ideas to test:</p>
                        <ul>
                            <li>We simplified the assembly process by narrowing it down to 4 steps.</li>
                            <li>The internal CAD design of the device was redesigned to guide the user as it slides in the components.</li>
                            <li>Design for manufacturing</li>
                            <li>We improved the packaging by designing and including a storyboard that users can refer to during the assembly process.</li>
                        </ul>
                        <br>
                    </div>
                    <div class="col-sm">
                        <video style="width: 100%; height: 300px;" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                            <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/ui.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
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
            <div class="cont">
                <br>
                <h6>Focus Groups</h6>
                <br>
                <p>The working prototype allowed us to conduct one on one interviews demonstrating hands-on interaction with the prototype and gaining more feedback about the product and concept. We expanded our reach beyond users with maker and tech experience and found that our privacy values resonated well in our focus groups.</p>
                <br>
            </div>
            <div class="slickcarousel mx-auto" style="max-width: 2000px; padding: 10px;">
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/11.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/FG2.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/10.mp4" type="video/mp4">
                </video>
                <video class="slickimage3" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                    <source src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/FG1.mp4" type="video/mp4">
                </video>
                <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/FG3.JPG" class="slickimage3">
            </div>
            <div class="cont">
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
                <div class="cont">
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
                        <button class="btn btn-primary" style="margin-left: 35px;" onclick="hide1()">Show All Comments</button>
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
                <div class="cont">
                    <br>
                    <b>Specific Tech Questions</b>
                    <br>
                    <br>
                    <br>
                    <div style="max-width: 50%; margin: auto;">
                        <blockquote class="blockquote">
                            <p>The best feature is probably that it integrates with those other platforms. I think integration is probably the key to success in this field. Home automation and IoT in general are just starting to get past the stage where personal computers were in the mid-80s, when we had Apple, IBM, Commodore, Amiga and a host of others, each in its own silo.</p>
                        </blockquote>
                        <button class="btn btn-primary" onclick="hide2()" style="margin-left: 35px;">Show All Comments</button>
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
                <div class="cont">
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
                        <button class="btn btn-primary" onclick="hide3()" style="margin-left: 35px;">Show All Comments</button>
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
                <div class="cont">

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
                        <button class="btn btn-primary" onclick="hide3()" style="margin-left: 35px;">Show All Comments</button>
                    </div>
                    <br>
                </div>
                <div class="slickcarousel mx-auto" style="display: none; max-width: 2000px; padding: 10px;" id="carousel4">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/1.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/2.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/3.jpg" class="slickimage3">
                    <img src="https://voxelmedia.s3.eu-west-2.amazonaws.com/SP/cont/4.jpg" class="slickimage3">
                </div>
            </div>

            <div class="cont">
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
                    <h4>&bull; 11% buy button click-through rate</h4><br>
                    <h4>&bull; 37.6% product page click-through rate</h4><br>
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
            var x = document.getElementById("carousel4");
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