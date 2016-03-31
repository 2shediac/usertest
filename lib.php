<?php
    function user_contact_recaptchaenabled() {
        global $CFG;
        return !empty($CFG->recaptchapublickey) && !empty($CFG->recaptchaprivatekey);
    }

    function user_contact_getallstandardrecipients($bid) {
        $debug = false;

        $blockcontext = context_block::instance($bid);
        $contactpersons = get_users_by_capability($blockcontext, 'block/user_contact:contactperson', 'u.id, u.firstname, u.lastname, u.email, u.mailformat', 'u.lastname ASC','','','','',false);
        if ($debug) {
            echo '****** Written from line '.__LINE__.' of '.__FILE__.' ********<br />';
            echo '<hr />';
            echo 'contactperson (block/user_contact:contactperson)<br />';
            print_object($contactpersons);
        }

        return $contactpersons;
    }

    function user_contact_getallhiddenrecipients($cid,$bid) {
        global $sid;

        $debug = false;

        if ($cid == SITEID) {
            $blockcontext = context_system::instance(0);
        } else {
            $blockcontext = context_block::instance($bid);
        }
        $hiddenrecipients = get_users_by_capability($blockcontext, 'block/user_contact:hiddenrecipient', 'u.id, u.firstname, u.lastname, u.email, u.mailformat', 'u.lastname ASC','','','','',false);
        if ($debug) {
            echo '****** Written from line '.__LINE__.' of '.__FILE__.' ********<br />';
            echo '<hr />';
            echo 'hiddencollector (block/user_contact:hiddenrecipients)<br />';
            print_object($hiddenrecipients);
        }

        return $hiddenrecipients;
    }
?>