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
    'Class:PatchCable' => 'Patch Cable',
    'Class:PatchCable/Attribute:patchcablecolor_id' => 'Main Patch Cable Color',
    'Class:PatchCable/Attribute:interfaceconnector_a_id' => 'Connector type on side A',
    'Class:PatchCable/Attribute:interfaceconnector_a_name' => 'Connector type on side A name',
    'Class:PatchCable/Attribute:remote_a_ci_id' => '\'A\' side connected to equipment',
    'Class:PatchCable/Attribute:remote_a_ci_name' => '\'A\' side connected to equipment name',
    'Class:PatchCable/Attribute:remote_a_interface_id' => '\'A\' side connected to port',
    'Class:PatchCable/Attribute:remote_a_interface_id_finalclass_recall' => 'Equipment type on \'A\' side',
    'Class:PatchCable/Attribute:remote_a_interface_name' => '\'A\' side connected to equipment name',
    'Class:PatchCable/Attribute:interfaceconnector_b_id' => 'Connector type on side B',
    'Class:PatchCable/Attribute:interfaceconnector_b_name' => 'Connector type on side B name',
    'Class:PatchCable/Attribute:remote_b_ci_id' => '\'B\' side connected to equipment',
    'Class:PatchCable/Attribute:remote_b_ci_name' => '\'B\' side connected to equipment name',
    'Class:PatchCable/Attribute:remote_b_interface_id' => '\'B\' side connected to port',
    'Class:PatchCable/Attribute:remote_b_interface_id_finalclass_recall' => 'Equipment type on \'B\' side',
    'Class:PatchCable/Attribute:remote_b_interface_name' => '\'B\' side connected to port name',
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

//
// Class: PhysicalInterface
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PhysicalInterface:patchcable' => 'Patch Cable',
    'Class:PhysicalInterface/Attribute:patchcable_id' => 'Patch Cable',
    'Class:PhysicalInterface/Attribute:patchcable_name' => 'Patch Cable Name',
    'Class:PhysicalInterface/Attribute:patchcable_remote_port_id' => 'Patch Cable Remote Port',
    'Class:PhysicalInterface/Attribute:patchcable_remote_port_name' => 'Patch Cable Remote Port Name',
));

//
// Class: PatchPanel
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchPanel' => 'Patch Panel',
    'Class:PatchPanel+' => '',
    'Class:PatchPanel/Attribute:patchpanelport_list' => 'Ports',
    'Class:PatchPanel/Attribute:patchpanelport_list+' => '',
));

//
// Class: PatchPanelPort
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:PatchPanelPort' => 'Patch Panel Port',
    'Class:PatchPanelPort/Attribute:connectableci_id' => 'Patch Panel this port belongs',
    'Class:PatchPanelPort/Attribute:connectableci_name' => 'Name of Patch Panel this port belongs',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_id' => 'Connected to Remote Patch Panel Port',
    'Class:PatchPanelPort/Attribute:remotebackpanelport_name' => 'Connected to Remote Patch Panel Port Name',
));
