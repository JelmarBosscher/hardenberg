<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="utf-8">

<!--[if IE]><![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/setup.php'); ?>
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/head.php'); ?>

</head>

<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/header.php'); ?>


 <div class="main">
                <div class="mainWrapper clearfix">
                    <div class="mainSideLeft">
                        <aside>
                            <div class="mainSide">
                                <div class="sideWidget media video">
                                   	<jdoc:include type="modules" name="LeftMedia" style="xhtml" />
                                </div>
                                <div class="sideWidget events agenda">
                                    <jdoc:include type="modules" name="leftAgenda" style="xhtml" />
                                </div>
                                <div class="sideWidget news articles">
                                    <div class="sideWidgetContent">
                                    	<jdoc:include type="modules" name="leftNews" style="xhtml" />
                                    <div>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="mainContent">
                        <div class="mainContentArticles">
                            <div class="article clearfix">

                            	<jdoc:include type="component" />

                            </div>
                        </div>
                    </div>
                </div>
            </div>







       
       
       
       
        
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/footer.php'); ?>
<?php include_once(JPATH_ROOT . "/templates/" . $this->template . '/includes/sections/scripts.php'); ?>

</body>
</html>