<?php

class DataTransfer
{
    function doDataTransfer($bean, $events, $arguments)
    {
        $action  = $_REQUEST['action'];

        if ($action == 'ConvertLead') //Must confirm it only triggers on conversion!!
        {
            //echo "<pre>"; print_r($bean); die;
            $lead_id  = $bean->id;
            $contact_id = $bean->contact_id;

            //load goals relation
            $bean->load_relationship('leads_eciu_crm_training_goals_1');

            //Remove goals relationship
            $tgoals = array();
            foreach ($bean->leads_eciu_crm_training_goals_1->getBeans() as $goal)
            {
                $goal_id = $goal->id;
                $tgoals[] = $goal_id;
                $bean->leads_eciu_crm_training_goals_1->delete($lead_id, $goal_id);
            }


            //load actuals relationship
            $bean->load_relationship('leads_eciu_crm_training_actuals_1');

            //Remove actual relationship
            $tactuals = array();
            foreach ($bean->leads_eciu_crm_training_actuals_1->getBeans() as $actual)
            {
                $actual_id = $actual->id;
                $tactuals[] = $actual_id;
                $bean->leads_eciu_crm_training_actuals_1->delete($lead_id, $actual_id);
            }

            $bean->save();


            $contact = new Contact();
            $contact->retrieve($contact_id);

            //link goals with contact module
            $contact->load_relationship('eciu_crm_training_goals_contacts');
            foreach ($tgoals as $goal)
            {
                $contact->eciu_crm_training_goals_contacts->add($goal);
            }


            //link actuals with contact module
            $contact->load_relationship('eciu_crm_training_actuals_contacts');
            foreach ($tactuals as $actual)
            {
                $contact->eciu_crm_training_actuals_contacts->add($actual);
            }

        }
    }
}

?>