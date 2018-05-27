<?php
/**
 * Electre v1.0
 * Author: Azhary Arliansyah
 * Github: azhry
 *
 * 27 May 2018
 */

defined('BASEPATH') or exit('No direct script access allowed');

class Electre {

	private $weights, $data, $dataCopy, $normalizer;
	private $rows, $cols;

	public function __construct() {
		// just an empty constructor
	}

	private function showMatrix( $data ) {
		echo '<table>';
		foreach ( $data as $row ) {
			echo '<tr>';
			foreach ( $row as $col ) {
				echo '<td>' . $col . '</td>';
			}
			echo '</tr>';
		}
		echo '</table>';
	}

	public function alternative() {
		$this->showMatrix( $this->data );
		echo '<br>';
		$this->normalize();
		$this->showMatrix( $this->data );
		echo '<br>';
		$this->weighting();
		$this->showMatrix( $this->data );
		echo '<br>';
		$this->concordanceIndex();
		$this->discordanceIndex();
		$this->showMatrix( $this->concordanceMatrix() );
		echo '<br>';
		$this->showMatrix( $this->discordanceMatrix() );
		echo '<br>';
	}

	public function fit( $data, $weights, $excludedCols = [] ) {

		$this->dataCopy = $this->data = $data;
		if ( $this->isAssociative( $this->data ) ) {
			$this->data = array_values( $this->data );
		}
		$this->data = $this->removeColumns( $this->data, $excludedCols );
		$this->weights = $weights;
		$this->normalizer = [];

		$this->rows = count( $this->data );
		if ( $this->rows > 0 ) {

			if ( $this->isAssociative( $this->data[0] ) ) {
				foreach ( $this->data as &$row ) {
					$row = array_values( $row );
				}
			}

			$this->cols = count( $this->data[0] );
			for ( $j = 0; $j < $this->cols; $j++ ) {
				$this->normalizer []= sqrt( array_sum( array_map( function( $x ) { return pow( $x, 2 ); }, array_column( $this->data , $j) ) ) );
			}

		} else $this->cols = 0;

	}

	private function isAssociative( $arr ) {
		return $arr === [] ? false : array_keys( $arr ) !== range( 0, count( $arr ) - 1 );
	}

	private function removeColumns( $data, $excludedCols ) {
		
		foreach ( $data as &$row ) {
			$row = array_filter( $row, function($k) use ($excludedCols) {
				return !in_array( $k, $excludedCols );
			}, ARRAY_FILTER_USE_KEY );
		}
		return $data;
	
	}

	private function weighting() {

		for ( $i = 0; $i < $this->rows; $i++ ) {
			$this->data[$i] = array_map( function($x, $weight) {
				return $x * $weight;
			}, $this->data[$i], $this->weights );
		}

	}

	private function normalize() {

		for ( $i = 0; $i < $this->rows; $i++ ) {
			$this->data[$i] = array_map( function($x, $k) {
				$divisor = $this->normalizer[$k];
				return $divisor == 0 ? 0 : $x / $divisor;
			}, $this->data[$i], range(0, $this->cols - 1) );
		}

	}

	private function concordanceIndex() {

		$concordanceIndex = [];
		for ( $i = 0; $i < $this->rows; $i++ ) {
			for ( $j = 0; $j < $this->rows; $j++ ) {
				$concordanceIndex[$i][$j] = array_filter( range(0, $this->cols - 1), function($v) use ($i, $j) {
					return $this->data[$i][$v] >= $this->data[$j][$v];
				} ); 
			}
		}
		return $concordanceIndex;

	}

	private function discordanceIndex() {

		$discordanceIndex = [];
		for ( $i = 0; $i < $this->rows; $i++ ) {
			for ( $j = 0; $j < $this->rows; $j++ ) {
				$discordanceIndex[$i][$j] = array_filter( range(0, $this->cols - 1), function($v) use ($i, $j) {
					return $this->data[$i][$v] < $this->data[$j][$v];
				} ); 
			}
		}
		return $discordanceIndex;

	}

	private function concordanceMatrix() {

		$concordanceMatrix = [];
		$concordanceIndex = $this->concordanceIndex();
		for ( $i = 0; $i < $this->rows; $i++ ) {
			for ( $j = 0; $j < $this->rows; $j++ ) {
				$concordanceMatrix[$i][$j] = $i == $j ? 0 : array_sum( array_map( function($k) {
					return $this->weights[$k];
				}, $concordanceIndex[$i][$j] ) );
			}
		}
		return $concordanceMatrix;

	}

	private function concordanceThreshold() {
		
	}

	private function discordanceMatrix() {

		$discordanceMatrix = [];
		$discordanceIndex = $this->discordanceIndex();
		for ( $i = 0; $i < $this->rows; $i++ ) {
			for ( $j = 0; $j < $this->rows; $j++ ) {
				if ( $i == $j ) $discordanceMatrix[$i][$j] = 0;
				else {
					$subset = array_map( function($k) use ($i, $j) {
						return abs( $this->data[$i][$k] - $this->data[$j][$k] );
					}, $discordanceIndex[$i][$j] );
					$divisor = array_map( function($k) use ($i, $j) {
						return abs( $this->data[$i][$k] - $this->data[$j][$k] );
					}, range(0, $this->cols - 1) );
					if ( count( $divisor ) == 0 ) $discordanceMatrix[$i][$j] = 0;
					else $discordanceMatrix[$i][$j] = (count( $subset ) ? max( $subset ) : 0) / max( $divisor );
				}
			}
		}
		return $discordanceMatrix;

	}

}