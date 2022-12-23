<?php
if (!defined('BASEPATH'))
exit('No direct script access allowed');

class Pages extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){

        $this->data['title'] = "W3Codify Online Code Optimization";
        $this->data['description'] = "Easy and fastest way to optimize your code and all our tools are easy to use. Experience with lots of tools like Json Beautify, XML Beautify, JSON Minify, XML Minify and many more.";
        $this->data['keywords'] = "HTML, CSS, SQL, JavaScript, PHP, Java, C++, jQuery, Bootstrap, C#, XML, MySQL, Python, NodeJS, React, Graphics, Angular, R, AI, Git, Programming, Web Development, Learning, Lessons, Beautify, Minify, Optimization";

        $this->data['subview'] = '';
        $this->load->view('all_pages/homePage', $this->data);

    }

    public function getJsonBeautifyPage(){

        $this->data['title'] = "JSON Beautify";
        $this->data['description'] = "JSON Beautify - Tool used for formatting json code in indentation way. Easy and faster to use.";
        $this->data['keywords'] = "HTML, CSS, SQL, JavaScript, PHP, Java, C++, jQuery, Bootstrap, C#, XML, MySQL, Python, NodeJS, React, Graphics, Angular, R, AI, Git, Programming, Web Development, Learning, Lessons, Beautify, Minify, Optimization";
        $this->data['route_name'] = "beautify-json";

        $this->data['subview'] = 'all_pages/jsonBeautify';
        $this->load->view('all_pages/innerLayout', $this->data);

    }

    public function getXMLBeautifyPage(){

        $this->data['title'] = "XML Beautify";
        $this->data['description'] = "XML Beautify - Tool used for formatting xml code in indentation way. Easy and faster to use.";
        $this->data['keywords'] = "HTML, CSS, SQL, JavaScript, PHP, Java, C++, jQuery, Bootstrap, C#, XML, MySQL, Python, NodeJS, React, Graphics, Angular, R, AI, Git, Programming, Web Development, Learning, Lessons, Beautify, Minify, Optimization";
        $this->data['route_name'] = "beautify-xml";

        $this->data['subview'] = 'all_pages/xmlBeautify';
        $this->load->view('all_pages/innerLayout', $this->data);

    }

    public function getJsonMinifyPage(){

        $this->data['title'] = "JSON Minify";
        $this->data['description'] = "JSON Minify - Tool used for formatting json code in minified way. Easy and faster to use.";
        $this->data['keywords'] = "HTML, CSS, SQL, JavaScript, PHP, Java, C++, jQuery, Bootstrap, C#, XML, MySQL, Python, NodeJS, React, Graphics, Angular, R, AI, Git, Programming, Web Development, Learning, Lessons, Beautify, Minify, Optimization";
        $this->data['route_name'] = "minify-json";

        $this->data['subview'] = 'all_pages/jsonMinify';
        $this->load->view('all_pages/innerLayout', $this->data);

    }

    public function getXMLMinifyPage(){

        $this->data['title'] = "XML Minify";
        $this->data['description'] = "XML Minify - Tool used for formatting xml code in minified way. Easy and faster to use.";
        $this->data['keywords'] = "HTML, CSS, SQL, JavaScript, PHP, Java, C++, jQuery, Bootstrap, C#, XML, MySQL, Python, NodeJS, React, Graphics, Angular, R, AI, Git, Programming, Web Development, Learning, Lessons, Beautify, Minify, Optimization";
        $this->data['route_name'] = "minify-xml";

        $this->data['subview'] = 'all_pages/xmlMinify';
        $this->load->view('all_pages/innerLayout', $this->data);

    }

    public function getAboutPage(){
        echo "About Page"; exit;
    }

    public function getContactPage(){
        echo "Contact Page"; exit;
        // $this->data['subview'] = 'home/weight_list.php';
        // $this->load->view('layouts/layout', $this->data);
    }


}

?>
