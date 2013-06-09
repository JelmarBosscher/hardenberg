<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


            <div class="headerContainer">
                <header class="clearfix">
                    <div class="headerContent clearfix">
                        <a class="logo ir" href="">
                            <h1>PRO Hardenberg</h1>
                        </a>                    
                    </div>
                        <?php if($this->countModules('mainMenu')) : ?>
                        
                        <nav class="mainMenu">
                            
                            <jdoc:include type="modules" name="mainMenu" />

                        </nav>
                        
                        <?php endif;?>



                    <div class="searchPosition searchTop">
                         <jdoc:include type="modules" name="searchTop" style="xhtml" />
                    </div>
                    </header>

                </div>



        <div class="wrapper">
            <div class="main">


                    <div class="headerSlider">
                        <div class="headerSliderContent">
                                <div class="headerSliderImages">
                                    
                                    <div class="flexslider">
                                      <ul class="slides">
                                        <li>
                                            <jdoc:include type="modules" name="sliderFirst" style="xhtml" />
                                        </li>
                                        <li>
                                            <jdoc:include type="modules" name="sliderSecond" style="xhtml" />
                                        </li>
                                        <li>
                                            <jdoc:include type="modules" name="sliderThird" style="xhtml" />
                                        </li>
                                        <li>
                                            <jdoc:include type="modules" name="sliderFourth" style="xhtml" />
                                        </li>
                                        <li>
                                            <jdoc:include type="modules" name="sliderFifth" style="xhtml" />
                                        </li>

                                      </ul>
                                    </div>

                                </div>
                               
                            </div>
                        </div>