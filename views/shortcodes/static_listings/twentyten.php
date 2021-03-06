<?php

$template = array(

'css' => '
/*
This template has no html body because it uses the built in listing renderer.
It can be used as a guide for making a custom template that styles output created by the built in renderer.
*/
.pl-tpl-stl-twentyten {
}
.pl-tpl-stl-twentyten .clear {
	clear: both;
}
.pl-tpl-stl-twentyten form {
	clear: both;
	padding: 1em 0 0 0;
}
.pl-tpl-stl-twentyten p {
	display: block !important;
	float: none !important;
	border: none !important;
	margin: 0 0 .1em 0 !important;
	padding: 0 !important;
	background: none !important;
	line-height: 1.2em !important;
}

/* style each listing... */
.pl-tpl-stl-twentyten .listing-item {
	position: relative;
	display: block !important;
	float: none !important;
	clear: both !important;
	margin: 0 !important;
	border: none !important;
	padding: 10px 0.5% 25px !important;
	width: 99% !important;
	font-size: 14px;
	font-weight: 300 !important;
	overflow: hidden !important;
	background: none !important;
}
.pl-tpl-stl-twentyten .listing-item>div {
	width: auto !important;
}
.pl-tpl-stl-twentyten .listing-item div {
	border: none !important;
	background: none !important;
}
/* thumbnail */
.pl-tpl-stl-twentyten .listing-thumbnail {
	float: left !important;
	margin: 0 20px 5px 0 !important;
	width: 180px !important;
}
.pl-tpl-stl-twentyten .listing-thumbnail img {
	display: block !important;
	margin: 0 !important;
	border: none !important;
	padding: 0 !important;
	width: 180px !important;
	height: 120px !important;
}
/* defaults for text */
.pl-tpl-stl-twentyten .listing-item-details a {
	margin: 0 !important;
	padding: 0 !important;
	text-decoration: none !important;
}
/* info block */
.pl-tpl-stl-twentyten .listing-item-details {
	margin: 0 !important;
	padding: 0 !important;
}
/* heading */
.pl-tpl-stl-twentyten header {
	float: none !important;
	margin: 0 !important;
	padding: 0 !important;
}
.pl-tpl-stl-twentyten p.h4 {
	max-width: 570px !important;
	font-size: 18px !important;
}
.pl-tpl-stl-twentyten .h4 a {
	color: inherit;
}
.pl-tpl-stl-twentyten .basic-details ul {
	float: none !important;
	margin: .3em 0 !important;
	padding: 0 !important;
	width: auto !important;
	max-width: 370px !important;
	list-style-type: none !important;
	list-style-image: none !important;
	overflow: hidden !important;
}
.pl-tpl-stl-twentyten .basic-details li {
	list-style: square outside none !important;
	float: left !important;
	margin: 0 .8em 0.1em 0 !important;
	padding: 0 !important;
	list-style-type: none !important;
	list-style-image: none !important;
	line-height: 1.2em !important;
	font-size: 14px !important;
	font-weight: bold !important;
	font-family: Georgia,"Bitstream Charter",serif !important;
}
.pl-tpl-stl-twentyten .basic-details li:before {
	content: none !important;
}
/* description and compliance */
.pl-tpl-stl-twentyten .listing-item .compliance-wrapper {
	clear: both !important;
	float: right;
}
.pl-tpl-stl-twentyten .listing-item .compliance-wrapper img,
.pl-tpl-stl-twentyten .listing-item .agent-details img {
	display: none !important;
}
.pl-tpl-stl-twentyten p.listing-description,
.pl-tpl-stl-twentyten .listing-item .compliance-wrapper p {
	float: left !important;
	margin: 0 0 .2em 0 !important;
	max-height: 52px !important;
	max-width: 370px !important;
	line-height: 17px !important;
	font-size: 14px !important;
	font-family: Georgia,"Bitstream Charter",serif !important;
	overflow: hidden !important;
}
.pl-tpl-stl-twentyten .listing-item .compliance-wrapper p,
.pl-tpl-stl-twentyten .pl-tpl-footer .compliance-wrapper p {
	font-size: .8em !important;
}
.pl-tpl-stl-twentyten .listing-item .clear {
	clear: none;
}
.pl-tpl-stl-twentyten .actions {
	float: none !important;
	position: absolute;
	bottom: 0;
	right: 0;
	margin: 0 !important;
	padding: 0 !important;
}
.pl-tpl-stl-twentyten a.more-link {
	float: right !important;
	margin-left: 1em !important;
}
.pl-tpl-stl-twentyten #pl_add_remove_lead_favorites,
.pl-tpl-stl-twentyten .pl_add_remove_lead_favorites {
	float: right !important;
}

/* compliance -shortcode- in the footer */
.pl-tpl-stl-twentyten .pl-tpl-footer .compliance-wrapper {
	clear: both !important;
	margin: 2em 0 !important;
	padding: 0 !important;
}
.pl-tpl-stl-twentyten .pl-tpl-footer .compliance-wrapper img {
	float: left !important;
	height: auto !important;
	width: auto !important;
	margin: 0 .75em .5em 0 !important;
	padding: 0 !important;
}

/* controls */
.pl-tpl-stl-twentyten #pls_num_results_found {
	float: right !important;
	font-size: 115% !important;
	margin: 0 1em 1em 0 !important;
	padding: 0 !important;
}
.pl-tpl-stl-twentyten .sort_wrapper {
	margin: 1em 0 0 1em !important;
	padding: 0 !important;
	border: 0 !important;
	background: none !important;
	height: auto !important;
	width: auto !important;
}
.pl-tpl-stl-twentyten .sort_wrapper::before {
	content: "Sort by" !important;
	display: inline-block !important;
	margin: 0 1em 0 0 !important;
	padding: 0 !important;
}
.pl-tpl-stl-twentyten .sort_wrapper .sort_item {
	display: inline-block !important;
	float: none !important;
	vertical-align: middle !important;
	margin: 0 1em 0 0 !important;
	padding: 0 !important;
	height: auto !important;
	width: 130px !important;
	max-width: 35% !important;
}
.pl-tpl-stl-twentyten .sort_wrapper .sort_item label {
	display: none !important;
}
.pl-tpl-stl-twentyten .dataTables_length {
	display: none !important;
	float: right !important;
	margin: -2.35em 1em 0 0 !important;
	border: 0 !important;
	background: none !important;
	height: auto !important;
	width: auto !important;
}
.pl-tpl-stl-twentyten .dataTables_length::before {
	content: "Show" !important;
	display: inline-block !important;
	margin: 0 1em 0 0 !important;
	padding: 0 !important;
}
.pl-tpl-stl-twentyten .dataTables_length label {
	display: inline-block !important;
	float: none !important;
	vertical-align: middle !important;
	margin: 0 !important;
	padding: 0 !important;
	height: auto !important;
	width: 85px !important;
}
.pl-tpl-stl-twentyten .dataTables_length span#dataTables_length_show,
.pl-tpl-stl-twentyten .dataTables_length span#dataTables_length_results {
	display: none !important;
}
.pl-tpl-stl-twentyten .sort_wrapper .sort_item .chzn-container,
.pl-tpl-stl-twentyten .dataTables_length label .chzn-container {
	width: 100% !important;
}
.pl-tpl-stl-twentyten .sort_wrapper .sort_item .chzn-drop,
.pl-tpl-stl-twentyten .dataTables_length label .chzn-container {
	width: 94% !important;
}
.pl-tpl-stl-twentyten .dataTables_processing {
	visibility: hidden !important;
}
.pl-tpl-stl-twentyten .dataTables_info {
	display: none !important;
}
.pl-tpl-stl-twentyten .dataTables_paginate {
	clear: both !important;
	margin: 0 !important;
	padding: 1em 0 0 0 !important;
	border: 0 !important;
	background: none !important;
}
.pl-tpl-stl-twentyten .dataTables_paginate a {
	margin: 0 0.5em !important;
	padding: 0 !important;
	font-weight: 200 !important;
}
.pl-tpl-stl-twentyten .dataTables_paginate a.paginate_active {
	font-weight: 400 !important;
}
.pl-tpl-stl-twentyten .dataTables_paginate a.first,
.pl-tpl-stl-twentyten .dataTables_paginate a.last {
	display: none !important;
}

/* table formatting */
.pl-tpl-stl-twentyten #container {
	width: 100% !important;
}
.pl-tpl-stl-twentyten table,
.pl-tpl-stl-twentyten thead,
.pl-tpl-stl-twentyten tfoot,
.pl-tpl-stl-twentyten tbody,
.pl-tpl-stl-twentyten tr,
.pl-tpl-stl-twentyten th,
.pl-tpl-stl-twentyten td {
	display: block !important;
	margin: 0 !important;
	border: 0 !important;
	padding: 0 !important;
	width: 100% !important;
}
.pl-tpl-stl-twentyten table#placester_listings_list {
	position: static !important;
}
.pl-tpl-stl-twentyten table#placester_listings_list:after {
	display: none !important;
}
.pl-tpl-stl-twentyten table#placester_listings_list tbody tr {
	background: none !important;
}
.pl-tpl-stl-twentyten table#placester_listings_list tbody tr td {
	border: 1px solid #dfdfdf !important;
	border-width: 0 0 1px 0 !important;
	background: none !important;
}

/* styling for alternate rows */
.pl-tpl-stl-twentyten table tbody tr.odd td {
		clear: both !important;
		float: none !important;
}
.pl-tpl-stl-twentyten table tbody tr.even td {
		clear: both !important;
		float: none !important;
}
',

'snippet_body' => '',

'before_widget' => '<div class="pl-tpl-stl-twentyten">',

'after_widget' => '<div class="pl-tpl-footer">[compliance]</div></div>',

);
