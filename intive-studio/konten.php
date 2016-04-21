<?php

if ($_GET['min']=='home') {
	# code...
	include 'home.php';
}

if ($_GET['min']=='carabeli') {
	# code...
	include 'modul/carabeli/carabeli.php';
}

if ($_GET['min']=='changepasw') {
	# code...
	include 'modul/changepwd/changepwd.php';
}

if ($_GET['min']=='opslider') {
	# code...
	include 'modul/slider/slider.php';
}

if ($_GET['min']=='inpSlider') {
	# code...
	include 'modul/slider/tambah-slider.php';
}

if ($_GET['min']=='cs') {
	# code...
	include 'modul/cs/ym.php';
}

if ($_GET['min']=='inpCS') {
	# code...
	include 'modul/cs/plusYM.php';
}

if ($_GET['min']=='bank') {
	# code...
	include 'modul/bank/bank.php';
}

if ($_GET['min']=='inpBank') {
	# code...
	include 'modul/bank/tambah_bank.php';
}

if ($_GET['min']=='komen') {
	# code...
	include 'modul/komentar/komen.php';
}

if ($_GET['min']=='inpberita') {
	# code...
	include 'modul/artikel/tambah_artikel.php';
}

if ($_GET['min']=='artikel') {
	# code...
	include 'modul/artikel/artikel.php';
}

?>