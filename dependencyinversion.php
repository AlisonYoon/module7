<?php
// DEPENDENCY INVERSION
interface HasAlert {
    public function alert();
}
class SMSAlert implements HasAlert {
    public function alert()
    {
        // TODO: Implement alert() method.
    }
}
class EmailAlert implements HasAlert {
    public function alert()
    {
        // TODO: Implement alert() method.
    }
}
class EmergencyAlertSystem { // it trusts what's happening inside is correct.
    public function __construct(HasAlert $alertSystem){...}   //what __construct takes in is very generic and abstract.
    public function notifyCivilians() { /* calls this->alertSystem->alert */ }
}
$smsEmergencyAlert = new EmergencyAlertSystem(new SMSAlert())
$emailEmergencyAlert = new EmergencyAlertSystem(new EmailAlert())