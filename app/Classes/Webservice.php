<?php

namespace App\Classes;

class Webservice 
{
    
    public $token = '6ba2a50bc0b0b11f9f4df3277596cf6b';
    public $domainname = 'http://localhost/moodle37';
    
    public function getCourses() {
        $serverurl = $this->domainname . '/webservice/soap/server.php'. '?wsdl=1&wstoken=' . $this->token;
        $client = new \SoapClient($serverurl);
        $get_courses = 'core_course_get_courses';
        $course = new \stdClass();
        $course->ids = array();
      
        try {
            $courses = $client->__soapCall($get_courses, array($course));
        } catch (Exception $e) { print_r($e); }
            if (isset($courses)) {
                return $courses;
            }
        }

        public function getCourseContent($courseid) {
            $serverurl = $this->domainname . '/webservice/soap/server.php'. '?wsdl=1&wstoken=' . $this->token;
            $client = new \SoapClient($serverurl);
            $get_course_contents = 'core_course_get_contents';
            //$courseid = 6;
            
            try {
                //$course_contents = $client->__soapCall($get_course_contents, array('courseid' => $courseid, 'options' => [['name' => 'excludemodules', 'value' => 0],['name' => 'excludecontents', 'value' => 0]]));
                $course_contents = $client->__soapCall($get_course_contents, array($courseid, 'options' => [['name' => 'excludemodules', 'value' => 0],['name' => 'excludecontents', 'value' => 0]]));
            } catch (Exception $e) { print_r($e); }
                if (isset($course_contents)) {
                    return $course_contents;
                }
    
            }

    }
