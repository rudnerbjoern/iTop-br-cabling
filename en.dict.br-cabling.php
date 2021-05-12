<?php

/**
 * @copyright   Copyright (C) 2021 Björn Rudner
 * @license     https://www.gnu.org/licenses/gpl-3.0.en.html
 * @version     2021-04-15
 *
 * Localized data
 */

//
// Class: PatchCable
//

Dict::Add('EN US', 'English', 'English', array(
    // Dictionary entries go here
    'Class:PatchCable' => 'Patch Cable',
    'Class:PatchCable/Attribute:patchcablecolor_id' => 'Main Patch Cable Color',
    'Class:PatchCable/Attribute:interfaceconnector_a_id' => 'Connector type on side A',
    'Class:PatchCable/Attribute:interfaceconnector_a_name' => 'Connector type on side A name',
    'Class:PatchCable/Attribute:remote_a_ci_id' => '\'A\' side connected to equipment',
    'Class:PatchCable/Attribute:remote_a_ci_name' => '\'A\' side connected to equipment name',
    'Class:PatchCable/Attribute:remote_a_id' => '\'A\' side connected to port',
    'Class:PatchCable/Attribute:remote_a_id_finalclass_recall' => 'Equipment type on \'A\' side',
    'Class:PatchCable/Attribute:remote_a_name' => '\'A\' side connected to equipment name',
    'Class:PatchCable/Attribute:interfaceconnector_b_id' => 'Connector type on side B',
    'Class:PatchCable/Attribute:interfaceconnector_b_name' => 'Connector type on side B name',
    'Class:PatchCable/Attribute:remote_b_ci_id' => '\'B\' side connected to equipment',
    'Class:PatchCable/Attribute:remote_b_ci_name' => '\'B\' side connected to equipment name',
    'Class:PatchCable/Attribute:remote_b_id' => '\'B\' side connected to port',
    'Class:PatchCable/Attribute:remote_b_id_finalclass_recall' => 'Equipment type on \'B\' side',
    'Class:PatchCable/Attribute:remote_b_name' => '\'B\' side connected to port name',
    'Class:PatchCable/Attribute:length' => 'Cable length',
    'Class:PatchCable/Attribute:straight-crossed' => 'Straight or Crossed Cable',
    'Class:PatchCable/Attribute:straight-crossed/Value:straight' => 'Straight',
    'Class:PatchCable/Attribute:straight-crossed/Value:crossed' => 'Crossed',
));

//
// Class: PatchCableColor
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchCableColor' => 'Patch Cable Color',
    'Class:PatchCableColor/Attribute:name' => 'Name',
    'Class:PatchCableColor/Attribute:comment' => 'Comment',
    'Class:PatchCableColor/Attribute:patchcable_list' => 'Patch Cable List',
));
