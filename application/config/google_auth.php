<?php

defined('BASEPATH') OR exit('No direct script access allowed');

    $config['client_id']            = '102966704484-scjthdf9hdqgodo0i7v8spd6vob51k09.apps.googleusercontent.com';
    $config['client_secret']        = '5nGn_mzUqAFQViJhZU2lCrzZ';
    $config['redirect_uri']         = base_url('main/login_with_google');
    $config['application_name']     = 'googlelogin';
    $config['access_type']          = 'online';
    $config['scopes']               = array('profile','email','https://www.googleapis.com/auth/calendar');
    $config['calendar_id']          = 'en.australian#holiday@group.v.calendar.google.com';


/* End of file google_auth.php */

