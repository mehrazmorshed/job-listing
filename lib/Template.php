<?php class Template{
	// path to template
	protected $template;
	// vars passed in
	protected $vars = array();

	// constructor
	public function __construct($template){
		$this->template = $template;
	}

	public function __get($key){
		return $this->vars[$key];
	}
}
