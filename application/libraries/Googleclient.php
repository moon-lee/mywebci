<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Googleclient
{
    public function __construct() 
    {
        $CI =& get_instance();
        $CI->config->load('google_auth');

        require_once APPPATH."third_party/google-api-php/vendor/autoload.php";
        
        $this->client = new Google_Client();
        $this->client->setApplicationName($CI->config->item('application_name'));
        $this->client->setClientId($CI->config->item('client_id'));
        $this->client->setClientSecret($CI->config->item('client_secret'));
        $this->client->setRedirectUri($CI->config->item('redirect_uri'));
        $this->client->setScopes($CI->config->item('scopes'));
        $this->client->setAccessType($CI->config->item('access_type'));
        $this->client->setApprovalPrompt('auto');

        $this->oauth2 = new Google_Service_Oauth2($this->client);
        $this->gCalendar = new Google_Service_Calendar($this->client);

    }
    /**
     * Request authorization from the user. 
     */
    public function authUrl()
    {
        return $this->client->createAuthUrl();
    }

    public function getAuthenticate($code)
    {
        return $this->client->authenticate($code);
    }

    public function getAccessToken()
    {
        return $this->client->getAccessToken();
    }

    public function setAccessToken($token)
    {
        return $this->client->setAccessToken($token);
    }

    public function revokeToken()
    {
        return $this->client->revokeToken();
    }

    public function getUserInfo()
    {
        return $this->oauth2->userinfo->get();
    }

    public function isAccessTokenExpired()
    {
        return $this->client->isAccessTokenExpired();
    }

    public function getCalendarService()
    {
        return $this->gCalendar;
    }

    public function getCalendarList()
    {
        return $this->gCalendar->calendarList->get('en.australian#holiday@group.v.calendar.google.com')->getSummary();
    }

    public function getEvents()
    {
        $events = $this->gCalendar->events->listEvents('en.australian#holiday@group.v.calendar.google.com');
        
        // $data = array();

        // while(true) {
        //     foreach ($events->getItems() as $event) {
        //         array_push ($data, $event->getSummary());
        //     }
        // }

        return json_encode($events);
    }
}


/* End of file Googleclient.php */
