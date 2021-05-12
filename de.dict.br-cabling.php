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

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchCable' => 'Patchkabel',
    'Class:PatchCable/Attribute:patchcablecolor_id' => 'Patchkabel Farbe',
    'Class:PatchCable/Attribute:interfaceconnector_a_id' => 'Anschluss Seite A',
    'Class:PatchCable/Attribute:interfaceconnector_a_name' => 'Anschluss Seite A Name',
    'Class:PatchCable/Attribute:remote_a_ci_id' => '\'A\' side connected to equipment',
    'Class:PatchCable/Attribute:remote_a_ci_name' => '\'A\' side connected to equipment name',
    'Class:PatchCable/Attribute:remote_a_id' => '\'A\' side connected to port',
    'Class:PatchCable/Attribute:remote_a_id_finalclass_recall' => 'Equipment type on \'A\' side',
    'Class:PatchCable/Attribute:remote_a_name' => '\'A\' side connected to equipment name',
    'Class:PatchCable/Attribute:interfaceconnector_b_id' => 'Anschluss Seite B',
    'Class:PatchCable/Attribute:interfaceconnector_b_name' => 'Anschluss Seite B Name',
    'Class:PatchCable/Attribute:remote_b_ci_id' => '\'B\' side connected to equipment',
    'Class:PatchCable/Attribute:remote_b_ci_name' => '\'B\' side connected to equipment name',
    'Class:PatchCable/Attribute:remote_b_id' => '\'B\' side connected to port',
    'Class:PatchCable/Attribute:remote_b_id_finalclass_recall' => 'Equipment type on \'B\' side',
    'Class:PatchCable/Attribute:remote_b_name' => '\'B\' side connected to port name',
    'Class:PatchCable/Attribute:length' => 'Kabellänge',
    'Class:PatchCable/Attribute:straight-crossed' => 'Normal oder gekreuztes Kabel',
    'Class:PatchCable/Attribute:straight-crossed/Value:straight' => 'Normal',
    'Class:PatchCable/Attribute:straight-crossed/Value:crossed' => 'Gekreuzt',
));

//
// Class: PatchCableColor
//

Dict::Add('DE DE', 'German', 'Deutsch', array(
    'Class:PatchCableColor' => 'Patchkabel Farbe',
    'Class:PatchCableColor/Attribute:name' => 'Name',
    'Class:PatchCableColor/Attribute:comment' => 'Anmerkung',
    'Class:PatchCableColor/Attribute:patchcable_list' => 'Patchkabel Liste',
));
