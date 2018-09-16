<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Googleclient
{
    private $client;
    private $oauth2;
    private $gCalendar;
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
        $this->CI->config->load('google_auth');

        require_once APPPATH."third_party/google-api-php/vendor/autoload.php";
        
        $this->client = new Google_Client();
        $this->client->setApplicationName($this->CI->config->item('application_name'));
        $this->client->setClientId($this->CI->config->item('client_id'));
        $this->client->setClientSecret($this->CI->config->item('client_secret'));
        $this->client->setRedirectUri($this->CI->config->item('redirect_uri'));
        $this->client->setScopes($this->CI->config->item('scopes'));
        $this->client->setAccessType($this->CI->config->item('access_type'));
        $this->client->setApprovalPrompt('auto');
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

    public function revokeToken()
    {
        return $this->client->revokeToken();
    }

    public function getUserInfo($accessToken)
    {
        $this->client->setAccessToken($accessToken);
        $this->$oauth2 = new Google_Service_Oauth2($this->client);
        return $this->$oauth2->userinfo->get();
    }

    public function isAccessTokenExpired()
    {
        return $this->client->isAccessTokenExpired();
    }

    public function getCalendarService($accessToken)
    {
        $this->client->setAccessToken($accessToken);
        $this->gCalendar = new Google_Service_Calendar($this->client);
        return $this->gCalendar;
    }

    public function getCalendarList($accessToken)
    {
        $this->client->setAccessToken($accessToken);
        $this->gCalendar = new Google_Service_Calendar($this->client);
        return $this->gCalendar->calendarList->listCalendarList();
    }

    public function getEvents($accessToken, $tMin = false, $tMax = false)
    {
        if (! $tMin) {
            $tMin = date("c", strtotime(date('Y-m-01 ').' 00:00:00'));
        } else {
            $tMin = date("c", strtotime($tMin));
        }

        if (! $tMax) {
            $tMax = date("c", strtotime(date('Y-m-t ').' 23:59:59'));
        } else {
            $tMax = date("c", strtotime($tMax));
        }

        $optParams = array(
            'orderBy'      => 'startTime',
            'singleEvents' => true,
            'timeMin'      => $tMin,
            'timeMax'      => $tMax,
            'timeZone'     => 'Australia/Brisbane',

        );

        $this->client->setAccessToken($accessToken);
        $this->gCalendar = new Google_Service_Calendar($this->client);
        $results = $this->gCalendar->events->listEvents($this->CI->config->item('calendar_id'), $optParams);

        $data = array();
        foreach ($results->getItems() as $item) {
            array_push(
                    $data,
                    array(
                        'id'          => $item->getId(),
                        'title'       => $item->getSummary(),
                        'start'       => $item->getStart()->date,
                        'end'         => $item->getEnd()->date,
                    )
                );
        }
        return json_encode($data);
    }
}


/* End of file Googleclient.php */
