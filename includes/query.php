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