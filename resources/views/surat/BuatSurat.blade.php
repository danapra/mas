@extends('backpack::layout')

@section('header')
    <script src="{{ asset('vendor/tinymce') }}/js/jquery.min.js"></script>
    <script src="{{ asset('vendor/tinymce') }}/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="{{ asset('vendor/signature/') }}/assets/jquery.signaturepad.css">


@endsection

@section('content')
<div>
	<body>
<table width="175px" border="0" cellspacing="0" cellpadding="0">
  <tbody>
<tr align="center">
      <td><label for="textarea2">Kepada Yth.</label> <br>
      <textarea name="textarea" id="textarea"></textarea> <br>
      <input type="button" name="button" id="button" value="Browser"></td>
    </tr>
  </tbody>
</table> <br>
<p>
  <textarea class="tinymce"></textarea>
		  
		  <!-- javascript -->
<!-- 		  <script src="js/jquery.min.js"></script>
		  <script src="plugin/tinymce/tinymce.min.js"></script>
		  <script src="plugin/tinymce/init-tinymce.js"></script> -->
      <script src="{{ asset('vendor/tinymce') }}/js/jquery.min.js"></script>
      <script src="{{ asset('vendor/tinymce') }}/plugin/tinymce/tinymce.min.js"></script>
      <script src="{{ asset('vendor/tinymce') }}/plugin/tinymce/init-tinymce.js"></script>

    </p>
		<form name="form1" method="post" action="">

		  <table width="175" border="0" cellspacing="0" cellpadding="0">
          	<tr>
           	  <td align="center">
                <!-- <p><label>Tanggal Surat</label></p> -->
                
                </td>
            </tr>
		    <tr>
		      <td align="center">
              	<p>
		    		<label for="textarea"></label>
		    		<label for="textfield"></label>
            		<input name="textfield" type="text" id="textfield" value="" placeholder="Surabaya,24-05-2017">
		  		</p>
          </td>
	        </tr>
		    <tr>
		      <td align="center">
              	<p>
		      		<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Signature Pad</button>
		  		</p>
              </td>
	        </tr>
		    <tr>
		      <td align="center">
                  <p>
                    <label for="textarea"></label>
                    <label for="textfield"></label>
                    <input name="textfield" type="text" id="textfield" value="" placeholder="Nama Pengirim">
                  </p>
              </td>
	        </tr>
	      </table>  
	</form>

<div class="sigPad" id="smoothed" style="width:404px;">
<h2>Bezier Curves (constant pen width)</h2>
<ul class="sigNav">
<li class="drawIt"><a href="#draw-it" >Draw It</a></li>
<li class="clearButton"><a href="#clear">Clear</a></li>
</ul>
<div class="sig sigWrapper" style="height:auto;">
<div class="typed"></div>
<canvas class="pad" width="400" height="250"></canvas>
<input type="hidden" name="output-2" class="output">
</div>
</div>
<button type="submit">I accept the terms of this agreement.</button>
</form>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="{{ asset('vendor/signature/') }}/assets/numeric-1.2.6.min.js"></script> 
<script src="{{ asset('vendor/signature/') }}/assets/bezier.js"></script> 
<script src="{{ asset('vendor/signature/') }}/jquery.signaturepad.js"></script> 
<script>
$(document).ready(function() {
// $('#linear').signaturePad({drawOnly:true, lineTop:200});
$('#smoothed').signaturePad({drawOnly:true, drawBezierCurves:true, lineTop:200});
// $('#smoothed-variableStrokeWidth').signaturePad({drawOnly:true, drawBezierCurves:true, variableStrokeWidth:true, lineTop:200});
});
</script> 
<script src="{{ asset('vendor/signature/') }}/assets/json2.min.js"></script>

@endsection