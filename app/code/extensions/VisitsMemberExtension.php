<?php
class VisitsMemberExtension extends DataExtension {
    
    private static $last_visited_seconds_ago_online = 900;  // timeframe in seconds to display user as "online"
    
    private static $db = array(
        'LastVisited' => 'Datetime',
        'NumVisit' => 'Int',
    );
    
    public function IsOnline(){
        return ($this->owner->obj('LastVisited')->DiffIn('seconds') < Config::inst()->get('VisitsMemberExtension', 'last_visited_seconds_ago_online')); 
    }

    public function memberLoggedIn() {
        $this->logVisit();
    }

    public function memberAutoLoggedIn() {
        $this->logVisit();
    }

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldsToTab('Root.Main', array(
            ReadonlyField::create('LastVisited', 'Last visited'),
            ReadonlyField::create('NumVisit', 'Number of visits')
        ));
    }

    protected function logVisit() {
        if(!Security::database_is_ready()) return;

        DB::query(sprintf(
            'UPDATE "Member" SET "LastVisited" = %s, "NumVisit" = "NumVisit" + 1 WHERE "ID" = %d',
            DB::get_conn()->now(),
            $this->owner->ID
        ));
    }
}