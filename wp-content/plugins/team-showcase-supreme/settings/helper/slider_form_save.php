<?php

$slider = sanitize_text_field($_POST['slider_activation']);
$slider .= "|"; // . sanitize_text_field($_POST['effect_type']);
$slider .= "|" . sanitize_text_field($_POST['effect_duration']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_active']);
$slider .= "|" . sanitize_text_field($_POST['icon_style']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_icon_size']);
//0 - 5

$slider .= "|" . sanitize_text_field($_POST['prev_next_icon_border_radius']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_bgcolor']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_color']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_hover_bgcolor']);
$slider .= "|" . sanitize_text_field($_POST['prev_next_hover_color']);
//6 - 10

$slider .= "|" . sanitize_text_field($_POST['indicator_activation']);
$slider .= "|" . sanitize_text_field($_POST['indicator_width']);
$slider .= "|" . sanitize_text_field($_POST['indicator_height']);
$slider .= "|" . sanitize_text_field($_POST['indicator_active_color']);
$slider .= "|" . sanitize_text_field($_POST['indicator_color']);
//11 - 15

$slider .= "|" . sanitize_text_field($_POST['indicator_border_radius']);
$slider .= "|" . sanitize_text_field($_POST['indicator_margin']);
$slider .= "|";
$slider .= "|";
$slider .= "|";
//16 - 20

/* Contact Info Field Start */
$slider .= "|" . sanitize_text_field($_POST['contact_activation']);
$slider .= "|" . sanitize_text_field($_POST['contact_font_family']);
$slider .= "|" . sanitize_text_field($_POST['contact_font_size']);
$slider .= "|" . sanitize_text_field($_POST['contact_line_height']);
$slider .= "|" . sanitize_text_field($_POST['contact_margin_top']);

/* 21 - 25 */

$slider .= "|" . sanitize_text_field($_POST['contact_margin_bottom']);
$slider .= "|" . sanitize_text_field($_POST['contact_text_align']);
$slider .= "|" . sanitize_text_field($_POST['contact_label_font_color']);
$slider .= "|" . sanitize_text_field($_POST['contact_label_font_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['contact_content_font_color']);

/* 26 - 30 */

$slider .= "|" . sanitize_text_field($_POST['contact_content_font_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['contact_label_font_weight']);
$slider .= "|" . sanitize_text_field($_POST['contact_content_font_weight']);
$slider .= "|" . sanitize_text_field($_POST['contact_label_text_transform']);
$slider .= "|" . sanitize_text_field($_POST['contact_content_text_transform']);

/* 31 - 35 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 36 - 40 */

//Member Title Start
$slider .= "|" . (isset($_POST['member_margin_top']) ? sanitize_text_field($_POST['member_margin_top']) : '');
$slider .= "|" . (isset($_POST['member_margin_bottom']) ? sanitize_text_field($_POST['member_margin_bottom']) : '');
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 41 - 45 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 46 - 50 */

//Designation Start
$slider .= "|" . (isset($_POST['designation_margin_top']) ? sanitize_text_field($_POST['designation_margin_top']) : '');
$slider .= "|" . (isset($_POST['designation_margin_bottom']) ? sanitize_text_field($_POST['designation_margin_bottom']) : '');
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 51 - 55 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 56 - 60 */

//Social Icon Start
$slider .= "|" . (isset($_POST['social_margin_top']) ?  sanitize_text_field($_POST['social_margin_top']) : '');
$slider .= "|" . (isset($_POST['social_margin_bottom']) ?  sanitize_text_field($_POST['social_margin_bottom']) : '');
$slider .= "|" . (isset($_POST['social_icon_number']) ?  sanitize_text_field($_POST['social_icon_number']) : 4);
$slider .= "|";
$slider .= "|";
/* 61 - 65 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 66 - 70 */

//Description Settings
$slider .= "|" . sanitize_text_field($_POST['description_activation']);
$slider .= "|" . sanitize_text_field($_POST['description_number_of_words']);
$slider .= "|" . sanitize_text_field($_POST['description_font_size']);
$slider .= "|" . sanitize_text_field($_POST['description_line_height']);
$slider .= "|" . sanitize_text_field($_POST['description_font_color']);
/* 71 - 75 */

$slider .= "|" . sanitize_text_field($_POST['description_font_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['description_font_family']);
$slider .= "|" . sanitize_text_field($_POST['description_font_weight']);
$slider .= "|" . sanitize_text_field($_POST['description_text_transform']);
$slider .= "|" . sanitize_text_field($_POST['description_text_align']);
/* 76 - 80 */

$slider .= "|" . sanitize_text_field($_POST['description_margin_top']);
$slider .= "|" . sanitize_text_field($_POST['description_margin_bottom']);
$slider .= "|" . sanitize_text_field($_POST['contact_content_font_weight']);
$slider .= "|" . sanitize_text_field($_POST['contact_label_text_transform']);
$slider .= "|" . sanitize_text_field($_POST['contact_content_text_transform']);
/* 81 - 85 */

// Search Settings
$slider .= "|" . (isset($_POST['search_activation']) ? sanitize_text_field($_POST['search_activation']) : '');
$slider .= "|" . (isset($_POST['search_placeholder']) ? sanitize_text_field($_POST['search_placeholder']) : 'Search Members...');
$slider .= "|" . (isset($_POST['search_align']) ? sanitize_text_field($_POST['search_align']) : 'flex-end');
$slider .= "|" . (isset($_POST['search_border_width']) ? sanitize_text_field($_POST['search_border_width']) : '1');
$slider .= "|" . (isset($_POST['search_border_color']) ? sanitize_text_field($_POST['search_border_color']) : 'rgba(0, 8, 51, 0.94)');
/* 86 - 90 */

$slider .= "|" . (isset($_POST['search_border_radius']) ? sanitize_text_field($_POST['search_border_radius']) : '50');
$slider .= "|" . (isset($_POST['search_font_color']) ? sanitize_text_field($_POST['search_font_color']) : 'rgb(0, 0, 0)');
$slider .= "|" . (isset($_POST['search_margin_bottom']) ? sanitize_text_field($_POST['search_margin_bottom']) : '10');
$slider .= "|" . (isset($_POST['search_placeholder_font_color']) ? sanitize_text_field($_POST['search_placeholder_font_color']) : 'rgb(0, 0, 0)');
$slider .= "|" . (isset($_POST['search_height']) ? sanitize_text_field($_POST['search_height']) : '40');
/* 91 - 95 */

/* Category Start */
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 96 - 100 */

$slider .= "|" . sanitize_text_field($_POST['category_activation']);
$slider .= "|" . sanitize_text_field($_POST['category_font_size']);
$slider .= "|" . sanitize_text_field($_POST['category_font_color']);
$slider .= "|" . sanitize_text_field($_POST['category_font_hover_color']);
$slider .= "|" . sanitize_text_field($_POST['category_border_width']);
/* 101 - 105 */

$slider .= "|" . sanitize_text_field($_POST['category_border_color']);
$slider .= "|" . sanitize_text_field($_POST['category_background_color']);
$slider .= "|" . sanitize_text_field($_POST['category_active_background_color']);
$slider .= "|" . sanitize_text_field($_POST['category_active_font_color']);
$slider .= "|" . sanitize_text_field($_POST['category_active_border_color']);
/* 106 - 110 */

$slider .= "|" . sanitize_text_field($_POST['category_font_weight']);
$slider .= "|" . sanitize_text_field($_POST['category_font_family']);
$slider .= "|" . sanitize_text_field($_POST['category_margin_bottom']);
$slider .= "|" . sanitize_text_field($_POST['category_menu_height']);
$slider .= "|" . sanitize_text_field($_POST['category_margin_right']);
/* 111 - 115 */

$slider .= "|" . sanitize_text_field($_POST['category_padding_right_left']);
$slider .= "|" . sanitize_text_field($_POST['category_position']);
$slider .= "|" . sanitize_text_field($_POST['category_border_raidus']);
$slider .= "|";
$slider .= "|";
/* 116 - 120 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 121 - 125 */

// miscellaneous
$slider .= "|" . sanitize_text_field($_POST['item_align']);
$slider .= "|" . sanitize_text_field($_POST['item_margin']);
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 126 - 130 */

// Modal Template
$slider .= "|" . (isset($_POST['modal_template_number']) ? sanitize_text_field($_POST['modal_template_number']) : '');
// Template 01
$slider .= "|" . (isset($_POST['modal_01_name_font_size']) ? sanitize_text_field($_POST['modal_01_name_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_01_name_font_color']) ? sanitize_text_field($_POST['modal_01_name_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_01_designation_font_size']) ? sanitize_text_field($_POST['modal_01_designation_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_01_designation_font_color']) ? sanitize_text_field($_POST['modal_01_designation_font_color']) : '');
/* 131 - 135 */

$slider .= "|" . (isset($_POST['modal_01_description_font_size']) ? sanitize_text_field($_POST['modal_01_description_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_01_description_font_color']) ? sanitize_text_field($_POST['modal_01_description_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_01_contact_label_font_size']) ? sanitize_text_field($_POST['modal_01_contact_label_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_01_contact_label_font_color']) ? sanitize_text_field($_POST['modal_01_contact_label_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_01_contact_content_font_size']) ? sanitize_text_field($_POST['modal_01_contact_content_font_size']) : '');
/* 136 - 140 */

$slider .= "|" . (isset($_POST['modal_01_contact_content_font_color']) ? sanitize_text_field($_POST['modal_01_contact_content_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_01_name_font_family']) ? sanitize_text_field($_POST['modal_01_name_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_01_designation_font_family']) ? sanitize_text_field($_POST['modal_01_designation_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_01_description_font_family']) ? sanitize_text_field($_POST['modal_01_description_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_01_contact_label_font_family']) ? sanitize_text_field($_POST['modal_01_contact_label_font_family']) : '');
/* 141 - 145 */

$slider .= "|" . (isset($_POST['modal_01_contact_content_font_family']) ? sanitize_text_field($_POST['modal_01_contact_content_font_family']) : '');
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 146 - 150 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 151 - 155 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 156 - 160 */

// Template 02
$slider .= "|" . (isset($_POST['modal_02_name_font_size']) ? sanitize_text_field($_POST['modal_02_name_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_02_name_font_color']) ? sanitize_text_field($_POST['modal_02_name_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_02_designation_font_size']) ? sanitize_text_field($_POST['modal_02_designation_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_02_designation_font_color']) ? sanitize_text_field($_POST['modal_02_designation_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_02_description_font_size']) ? sanitize_text_field($_POST['modal_02_description_font_size']) : '');
/* 161 - 165 */

$slider .= "|" . (isset($_POST['modal_02_description_font_color']) ? sanitize_text_field($_POST['modal_02_description_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_02_contact_label_font_size']) ? sanitize_text_field($_POST['modal_02_contact_label_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_02_contact_label_font_color']) ? sanitize_text_field($_POST['modal_02_contact_label_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_02_contact_content_font_size']) ? sanitize_text_field($_POST['modal_02_contact_content_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_02_contact_content_font_color']) ? sanitize_text_field($_POST['modal_02_contact_content_font_color']) : '');
/* 166 - 170 */

$slider .= "|" . (isset($_POST['modal_02_name_font_family']) ? sanitize_text_field($_POST['modal_02_name_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_02_designation_font_family']) ? sanitize_text_field($_POST['modal_02_designation_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_02_description_font_family']) ? sanitize_text_field($_POST['modal_02_description_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_02_contact_label_font_family']) ? sanitize_text_field($_POST['modal_02_contact_label_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_02_contact_content_font_family']) ? sanitize_text_field($_POST['modal_02_contact_content_font_family']) : '');
/* 171 - 175 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 176 - 180 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 181 - 185 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 186 - 190 */

// Template 03
$slider .= "|" . (isset($_POST['modal_03_name_font_size']) ? sanitize_text_field($_POST['modal_03_name_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_03_name_font_color']) ? sanitize_text_field($_POST['modal_03_name_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_03_designation_font_size']) ? sanitize_text_field($_POST['modal_03_designation_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_03_designation_font_color']) ? sanitize_text_field($_POST['modal_03_designation_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_03_description_font_size']) ? sanitize_text_field($_POST['modal_03_description_font_size']) : '');
/* 191 - 195 */

$slider .= "|" . (isset($_POST['modal_03_description_font_color']) ? sanitize_text_field($_POST['modal_03_description_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_03_contact_label_font_size']) ? sanitize_text_field($_POST['modal_03_contact_label_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_03_contact_label_font_color']) ? sanitize_text_field($_POST['modal_03_contact_label_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_03_contact_content_font_size']) ? sanitize_text_field($_POST['modal_03_contact_content_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_03_contact_content_font_color']) ? sanitize_text_field($_POST['modal_03_contact_content_font_color']) : '');
/* 196 - 200 */

$slider .= "|" . (isset($_POST['modal_03_name_font_family']) ? sanitize_text_field($_POST['modal_03_name_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_03_designation_font_family']) ? sanitize_text_field($_POST['modal_03_designation_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_03_description_font_family']) ? sanitize_text_field($_POST['modal_03_description_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_03_contact_label_font_family']) ? sanitize_text_field($_POST['modal_03_contact_label_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_03_contact_content_font_family']) ? sanitize_text_field($_POST['modal_03_contact_content_font_family']) : '');
/* 201 - 205 */

$slider .= "|" . (isset($_POST['modal_03_accent_color']) ? sanitize_text_field($_POST['modal_03_accent_color']) : '');
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 206 - 210 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 211 - 215 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 216 - 220 */

// Template 04
$slider .= "|" . (isset($_POST['modal_04_name_font_size']) ? sanitize_text_field($_POST['modal_04_name_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_04_name_font_color']) ? sanitize_text_field($_POST['modal_04_name_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_04_designation_font_size']) ? sanitize_text_field($_POST['modal_04_designation_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_04_designation_font_color']) ? sanitize_text_field($_POST['modal_04_designation_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_04_description_font_size']) ? sanitize_text_field($_POST['modal_04_description_font_size']) : '');
/* 221 - 225 */

$slider .= "|" . (isset($_POST['modal_04_description_font_color']) ? sanitize_text_field($_POST['modal_04_description_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_label_font_size']) ? sanitize_text_field($_POST['modal_04_contact_label_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_label_font_color']) ? sanitize_text_field($_POST['modal_04_contact_label_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_content_font_size']) ? sanitize_text_field($_POST['modal_04_contact_content_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_content_font_color']) ? sanitize_text_field($_POST['modal_04_contact_content_font_color']) : '');
/* 226 - 230 */

$slider .= "|" . (isset($_POST['modal_04_name_font_family']) ? sanitize_text_field($_POST['modal_04_name_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_04_designation_font_family']) ? sanitize_text_field($_POST['modal_04_designation_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_04_description_font_family']) ? sanitize_text_field($_POST['modal_04_description_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_label_font_family']) ? sanitize_text_field($_POST['modal_04_contact_label_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_content_font_family']) ? sanitize_text_field($_POST['modal_04_contact_content_font_family']) : '');
/* 231 - 235 */

$slider .= "|" . (isset($_POST['modal_04_accent_color']) ? sanitize_text_field($_POST['modal_04_accent_color']) : '');
$slider .= "|" . (isset($_POST['modal_04_contact_background_color']) ? sanitize_text_field($_POST['modal_04_contact_background_color']) : '');
$slider .= "|" . (isset($_POST['modal_04_description_text_align']) ? sanitize_text_field($_POST['modal_04_description_text_align']) : '');
$slider .= "|";
$slider .= "|";
/* 236 - 240 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 241 - 245 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 246 - 250 */

// Template 05
$slider .= "|" . (isset($_POST['modal_05_name_font_size']) ? sanitize_text_field($_POST['modal_05_name_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_05_name_font_color']) ? sanitize_text_field($_POST['modal_05_name_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_05_designation_font_size']) ? sanitize_text_field($_POST['modal_05_designation_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_05_designation_font_color']) ? sanitize_text_field($_POST['modal_05_designation_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_05_description_font_size']) ? sanitize_text_field($_POST['modal_05_description_font_size']) : '');
/* 251 - 255 */

$slider .= "|" . (isset($_POST['modal_05_description_font_color']) ? sanitize_text_field($_POST['modal_05_description_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_05_contact_label_font_size']) ? sanitize_text_field($_POST['modal_05_contact_label_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_05_contact_label_font_color']) ? sanitize_text_field($_POST['modal_05_contact_label_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_05_contact_content_font_size']) ? sanitize_text_field($_POST['modal_05_contact_content_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_05_contact_content_font_color']) ? sanitize_text_field($_POST['modal_05_contact_content_font_color']) : '');
/* 256 - 260 */

$slider .= "|" . (isset($_POST['modal_05_name_font_family']) ? sanitize_text_field($_POST['modal_05_name_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_05_designation_font_family']) ? sanitize_text_field($_POST['modal_05_designation_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_05_description_font_family']) ? sanitize_text_field($_POST['modal_05_description_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_05_contact_label_font_family']) ? sanitize_text_field($_POST['modal_05_contact_label_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_05_contact_content_font_family']) ? sanitize_text_field($_POST['modal_05_contact_content_font_family']) : '');
/* 261 - 265 */

$slider .= "|" . (isset($_POST['modal_05_accent_color']) ? sanitize_text_field($_POST['modal_05_accent_color']) : '');
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 266 - 270 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 271 - 275 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 276 - 280 */


// Template 06
$slider .= "|" . (isset($_POST['modal_06_name_font_size']) ? sanitize_text_field($_POST['modal_06_name_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_06_name_font_color']) ? sanitize_text_field($_POST['modal_06_name_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_06_designation_font_size']) ? sanitize_text_field($_POST['modal_06_designation_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_06_designation_font_color']) ? sanitize_text_field($_POST['modal_06_designation_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_06_description_font_size']) ? sanitize_text_field($_POST['modal_06_description_font_size']) : '');
/* 281 - 285 */

$slider .= "|" . (isset($_POST['modal_06_description_font_color']) ? sanitize_text_field($_POST['modal_06_description_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_06_contact_label_font_size']) ? sanitize_text_field($_POST['modal_06_contact_label_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_06_contact_label_font_color']) ? sanitize_text_field($_POST['modal_06_contact_label_font_color']) : '');
$slider .= "|" . (isset($_POST['modal_06_contact_content_font_size']) ? sanitize_text_field($_POST['modal_06_contact_content_font_size']) : '');
$slider .= "|" . (isset($_POST['modal_06_contact_content_font_color']) ? sanitize_text_field($_POST['modal_06_contact_content_font_color']) : '');
/* 286 - 290 */

$slider .= "|" . (isset($_POST['modal_06_name_font_family']) ? sanitize_text_field($_POST['modal_06_name_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_06_designation_font_family']) ? sanitize_text_field($_POST['modal_06_designation_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_06_description_font_family']) ? sanitize_text_field($_POST['modal_06_description_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_06_contact_label_font_family']) ? sanitize_text_field($_POST['modal_06_contact_label_font_family']) : '');
$slider .= "|" . (isset($_POST['modal_06_contact_content_font_family']) ? sanitize_text_field($_POST['modal_06_contact_content_font_family']) : '');
/* 291 - 295 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 296 - 300 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 301 - 305 */

$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
$slider .= "|";
/* 306 - 310 */

$memberorder = $_POST['custom_css'];

$wpdb->query($wpdb->prepare("UPDATE $style_table SET css = %s, slider = %s, memberorder=%s WHERE id = %d", $css, $slider, $memberorder, $styleId));
