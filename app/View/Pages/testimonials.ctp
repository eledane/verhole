<?php
if(empty($pageData['modulesData']['testimonial'])) {
	header('Location: '.$this->Html->getAbsoluteLangLink("/"));die();
} else {
	echo $this->Element('pageHeading',
			array(
				'heading' => 'Customer Stories',
				'background' => 'customer-stories.jpg'
			)
		);
	echo $this->element('testimonialDetail',array(
		'data' => $pageData['modulesData']['testimonial']
	));
	echo $this->element('relatedTestimonials', array(
		'data' => $pageData['modulesData']['testimonials']
	));
}