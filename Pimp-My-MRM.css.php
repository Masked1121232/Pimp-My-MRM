<?php
	// Determina o tipo do conteúdo e o charset
	header("Content-type: text/css; charset: UTF-8");
?>
/*
 * Pimp My MRM
 * @version: 20140523
 */
 
<?php if (isset($_GET['RemoverBarrinhas'])): ?>
.post-content > .poster > .row:nth-child(3) {
	display: none;
}
<?php endif; ?>

<?php if (isset($_GET['FixarHeader'])): ?>
#header {
	position: fixed;
	z-index: 1;
	top: 0;
	left: 205px;
	right: 0px;
}

#body-area {
	margin: 0 80px;
	padding-top: 50px;
}

#feed-box {
position: fixed;
margin-left: 53.4%;
}
<?php endif; ?>

<?php if (isset($_GET['SidebarVerdana'])): ?>
#sidebar {
	font-family: "Verdana",sans-serif;
}
<?php endif; ?>

<?php if (isset($_GET['ImagemDeFundo'])): ?>
#main {
	font-family: "Open Sans",Arial,Helvetica,sans-serif;
	background-color: #e9eaed;
	background-image: url(http://i.imgur.com/087A3X1.png);
	background-repeat: repeat;
}
<?php endif; ?>

<?php if (isset($_GET['FullWidth'])): ?>
#body-area {
	margin-left: 0;
	margin-right: 0;
}

#body-area > .col-md-12 {
	padding-left: 0;
	padding-right: 0;
}
<?php endif; ?>

<?php if (isset($_GET['TemaVerde'])): ?>
#header #logo {
	background-color:#64bc50 !important;
}

#sidebar .side-menu>ul li.current {
	background-color:#64bc50 !important;
}

#sidebar .menu-pages {
    color:#64bc50;
}

a, #sidebar a {
    color:#64bc50;
}

.panel-category a:hover {
	color:#386c2c;
}

#info-center .panel-body>.row h5 a {
	color:#64bc50;
}

#info-center .panel-body>.row h5 a:hover {
	color:#386c2c;
}

#info-center .panel-body>.row h5 {
	color:#64bc50;
}

.panel-default>.panel-heading {
    background-color: #f5f5f5 !important;
}

.panel-heading {
	background-color:#64bc50 !important;
}

.panel.panel-category {
	border-color:#64bc50;
}

#info-center .panel-heading {
	background-color:#55a044 !important;
	border-color:#55a044;
}

#info-center .panel-primary {
	border-color:#55a044;
}

<?php endif; ?>

<?php if (isset($_GET['RemoverConquistas'])): ?>
.post-content .poster .conquistas {
	display: none;
}
<?php endif; ?>

<?php if (isset($_GET['SlimPosterArea'])): ?>
@media (min-width: 995px) {
	.poster .row > .col-md-12:not(.blurb) {
		padding-left: 0;
		padding-right: 0;
	}

	.post-content .poster {
		width: 141px !important;
	}

	.post-content .postarea {
		padding-left: 141px;
	}
	
	.post-content .poster .awards fieldset, .post-content .poster .conquistas fieldset {
		border-bottom: none;
		border-left: none;
		border-right: none;
	}
}
<?php endif; ?>
