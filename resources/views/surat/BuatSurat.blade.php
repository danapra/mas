@extends('backpack::layout')

@section('header')
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <script src="{{ asset('vendor/tinymce') }}/js/jquery.min.js"></script>
    <script src="{{ asset('vendor/tinymce') }}/js/bootstrap.min.js"></script>

@endsection

@section('content')
<div>
	<body>
<table width="175px" border="0" cellspacing="0" cellpadding="0">
  <tbody>
<tr align="center">
      <td><input type="button" name="view" id="view" value="Preview"></td>
      <td><input type="button" name="print" id="print" value="Print"></td>
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
		      <td align="left">
              	<p>
		    		<label for="textarea"></label>
		    		<label for="textfield"></label>
            		<input name="textfield" type="text" id="textfield" value="" placeholder="Surabaya,24-05-2017">
		  		</p>
          </td>
	        </tr>
		    <tr>
		      <td align="left">
              <div onselectstart="return false">
                        <div id="signature-pad" class="m-signature-pad">
                          <div class="m-signature-pad--body">
                            <canvas></canvas>
                          </div>
                          <div class="m-signature-pad--footer">
                            <div class="description">Sign above</div>
                            <div class="left">
                              <button type="button" class="button clear" data-action="clear">Clear</button>
                            </div>
                            <div class="right">
                              <button type="button" class="button save" data-action="save-png">Save as PNG</button>
                              <button type="button" class="button save" data-action="save-svg">Save as SVG</button>
                            </div>
                          </div>
                        </div>
                      </div>
              </td>
	        </tr>
		    <tr>
		      <td align="left">
                  <p>
                    <label for="textarea"></label>
                    <label for="textfield"></label>
                    <input name="textfield" type="text" id="textfield" value="" placeholder="Nama Pengirim">
                  </p>
              </td>
	        </tr>
	      </table>  
	</form>

@endsection