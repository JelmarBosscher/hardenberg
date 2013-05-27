<?php
defined('_JEXEC') or die('Restricted access');

    global $mainframe;
    jimport('joomla.filesystem.file');
    $slider = new JParameter(JFile::read(JPATH_BASE.DS.'templates'.DS.$mainframe->getTemplate().DS.'params.ini'));

    $slide_path = 'templates/' . $mainframe->getTemplate().DS.'images/slides/';

    $image1 = $slider->get( 'image1' );
    $caption1 = $slider->get( 'caption1' );

    $image2 = $slider->get( 'image2' );
    $caption2 = $slider->get( 'caption2' );

    $image3 = $slider->get( 'image3' );
    $caption3 = $slider->get( 'caption3' );

    $image4 = $slider->get( 'image4' );
    $caption4 = $slider->get( 'caption4' );

    $document	= &JFactory::getDocument();
    $renderer	= $document->loadRenderer('modules');
    $options	= array('style' => 'xhtml');
    $columns	= 'columns';
    $images	    = 'images';
    $main       = 'main';
    $mainSideLeft      = 'main';
    
?>


 
 
	<?php $i = $this->pagination->limitstart;
	$rowcount = $this->params->def('num_leading_articles', 1);
	for ($y = 0; $y < $rowcount && $i < $this->total; $y++, $i++) : ?>
			<?php $this->item =& $this->getItem($i, $this->params);
			echo $this->loadTemplate('item'); ?>
	<?php endfor; ?>



    <section id="columns" class="clearfix">
        <?php echo $renderer->render($columns, $options, null); ?>


    </section>

    <hr />

    <section id="images" class="clearfix">
    <?php echo $renderer->render($images, $options, null); ?>


    <section id="mainSideLeft" class="clearfix">
        <h1>DEEAASDASDASD</h1>
    <?php echo $renderer->render($mainSideLeft, $options, null); ?>

    </section>

    <section id="main" class="clearfix">
    <?php echo $renderer->render($main, $options, null); ?>



    </section>
                