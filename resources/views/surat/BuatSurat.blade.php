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


		  
		  <!-- javascript -->
<!-- 		  <script src="js/jquery.min.js"></script>
		  <script src="plugin/tinymce/tinymce.min.js"></script>
		  <script src="plugin/tinymce/init-tinymce.js"></script> -->
      <script src="{{ asset('vendor/tinymce') }}/js/jquery.min.js"></script>
      <script src="{{ asset('vendor/tinymce') }}/plugin/tinymce/tinymce.min.js"></script>
      <script src="{{ asset('vendor/tinymce') }}/plugin/tinymce/init-tinymce.js"></script>

    
		<form name="form1" method="post" action="{{route('surat.print')}}">
    {{ csrf_field() }}
      <p>
  <textarea name="isi" class="tinymce"></textarea>
  </p>
  <table align="center" width="175px" border="0" cellspacing="0" cellpadding="0">
    <tbody>
      <tr align="center" id="print-value">
        <td><input type="submit" name="submit" id="view" value="Download"></td>
        <!-- <td><input type="button" name="print" id="print" data-action="save-print" value="Print"></td> -->
      </tr>
    </tbody></table>
<!--   </table> <br>
		  <table width="200" border="0" cellspacing="0" cellpadding="0">
		      <td align="left">
              	<p>
            		<input name="kota" class="kota" type="text" id="textfield" value="" placeholder="Surabaya,24-05-2017">
		  		</p>
          </td>
          <td><p>       </p></td>
		      <td align="right">
                  <p>
                    <input name="nama" class="nama" type="text" id="textfield" value="" placeholder="Nama Pengirim">
                  </p>
              </td>
              <td>
                <input type="hidden" name="ttd" id="ttd" value="">
	      </table> -->
          <div style="margin-top: 2%"><input name="kota" class="kota" type="text" id="textfield" value="" placeholder="Surabaya,24-05-2017"></div>
          <div style="margin-top: 2%"><input name="nama" class="nama" type="text" id="textfield" value="" placeholder="Nama Pengirim"></div>
          <div><input type="hidden" name="ttd" id="ttd" value=""></div>
          <div onselectstart="return false" style="margin-top: 1%">
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
                      <button type="button" class="button save" data-action="save-png">Apply</button>
                    </div>
                  </div>
                </div>
              </div>  
	</form>

  <script type="text/javascript">
    var wrapper = document.getElementById("print-value");
    var savePrintButton = wrapper.querySelector("[data-action=save-print]");
    savePrintButton.addEventListener('click',function(){
    var isi = tinymce.activeEditor.getContent();
    var kota = $('.kota').val();
    var nama = $('.nama').val();
      
      var ttd ='';
      if (signaturePad.isEmpty()) {
          alert("Please provide signature first.");
      } else {
          // window.open(signaturePad.toDataURL());
          ttd = '<img src="'+signaturePad.toDataURL()+'">';
      }

      var printWindow = window.open('', '', 'size: 7in 9.25in');
            printWindow.document.write('<!DOCTYPE html><html><head><title></title></head><body>');
            printWindow.document.write('<br>');
            printWindow.document.write(isi);
            printWindow.document.write('<br>');
            printWindow.document.write(kota);
            printWindow.document.write('<br>');
            printWindow.document.write(ttd);
            printWindow.document.write('<br>');
            printWindow.document.write(nama);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.focus();
            printWindow.print();
};
  </script>
@endsection