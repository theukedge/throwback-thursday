<?php

// when is Throwback Thursday?

$todaysday = date ( 'w', current_time( 'timestamp' ) ); // find out what day WordPress says it is

if( $todaysday == 4 ) {
	$querydate = date( 'j' ); // today's date
	$querymonth = date( 'n' ); // today's month
} else {
	$querydate = date( 'j', strtotime( 'Next Thursday' ) ); // next Thursday's date
	$querymonth = date( 'n', strtotime( 'Next Thursday' ) ); // next Thursday's month
}

// get posts for Thursday's date that were posted prior to today

$args = array(
	'date_query'  => array(
		array(
			'before'    => 'today',
			'day'       => $querydate,
			'month'     => $querymonth,
			'inclusive' => false // don't get today's posts
		),
	),
	'post_type'   => 'any', // the world is bigger than posts
	'post_status' => 'publish', // no private posts or drafts
	'nopaging'    => true,
);