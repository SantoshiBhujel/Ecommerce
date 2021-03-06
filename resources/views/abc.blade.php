<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script type="text/javascript" charset="utf-8" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <!--[if IE]><script type="text/javascript" src="http://explorercanvas.googlecode.com/svn/tags/m3/excanvas.compiled.js"></script><![endif]-->
	<title>Farbtastic v2</title>
	<script type="text/javascript" charset="utf-8" src="/js/farbtastic.js"></script>
	<script type="text/javascript" charset="utf-8">
	 $(function () {
	   $('#colorpicker1').farbtastic('#color1');
	   $('#colorpicker2').farbtastic({ callback: '#color2', width: 150 });
	 });
	</script>
	<style type="text/css" media="screen">
	 .colorpicker {
	   float: left;
	   margin: 1em;
	 }
	 form {
	   margin: 2em 1em 0 1;
	   text-align: center;
	 }
	 body {
	   font-family: "Lucida Grande", "Lucida Unicode", "Lucida Sans", sans-serif;
	 }
	 p {
	   clear: both;
	 }
	</style>
</head>

<body>
  
<h1>Farbtastic 2.0 alpha</h1>
<h2>Canvas/JS. No external CSS, no images.</h2>
<h3>Note: this is an alpha version, not suitable for use on production websites.</h3>

<div class="colorpicker">
  <div id="colorpicker1"></div>
  <form><input type="text" id="color1" /></form>
</div>

<div class="colorpicker">
  <div id="colorpicker2"></div>
  <form><input type="text" id="color2" /></form>
</div>

<p><a href="http://acko.net/">› Acko.net</a></p>
</body>
</html>