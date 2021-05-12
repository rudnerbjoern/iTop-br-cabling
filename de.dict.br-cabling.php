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
    'Class:PatchCable/Attribute:remote_a_ci_id' => 'Seite \'A\' verbunden mit CI',
    'Class:PatchCable/Attribute:remote_a_ci_name' => 'Seite \'A\' verbunden mit CI Name',
    'Class:PatchCable/Attribute:remote_a_interface_id' => 'Seite \'A\' verbunden mit Port',
    'Class:PatchCable/Attribute:remote_a_interface_id_finalclass_recall' => 'CI Typ an Seite \'A\'',
    'Class:PatchCable/Attribute:remote_a_interface_name' => 'Seite \'A\' verbunden mit Port Name',
    'Class:PatchCable/Attribute:interfaceconnector_b_id' => 'Anschluss Seite B',
    'Class:PatchCable/Attribute:interfaceconnector_b_name' => 'Anschluss Seite B Name',
    'Class:PatchCable/Attribute:remote_b_ci_id' => 'Seite \'B\' verbunden mit CI',
    'Class:PatchCable/Attribute:remote_b_ci_name' => 'Seite \'B\' verbunden mit CI Name',
    'Class:PatchCable/Attribute:remote_b_interface_id' => 'Seite \'B\' verbunden mit Port',
    'Class:PatchCable/Attribute:remote_b_interface_id_finalclass_recall' => 'CI Typ an Seite \'B\'',
    'Class:PatchCable/Attribute:remote_b_interface_name' => 'Seite \'B\' verbunden mit Port Name',
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
