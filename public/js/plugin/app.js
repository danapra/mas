var wrapper = document.getElementById("signature-pad"),
    clearButton = wrapper.querySelector("[data-action=clear]"),
    savePNGButton = wrapper.querySelector("[data-action=save-png]"),
    saveSVGButton = wrapper.querySelector("[data-action=save-svg]"),
    
    canvas = wrapper.querySelector("canvas"),
    signaturePad;

var wrapper2 = document.getElementById("print-value"),
    savePrintButton = wrapper2.querySelector("[data-action=save-print]");

// Adjust canvas coordinate space taking into account pixel ratio,
// to make it look crisp on mobile devices.
// This also causes canvas to be cleared.
function resizeCanvas() {
    // When zoomed out to less than 100%, for some very strange reason,
    // some browsers report devicePixelRatio as less than 1
    // and only part of the canvas is cleared then.
    var ratio =  Math.max(window.devicePixelRatio || 1, 1);
    canvas.width = canvas.offsetWidth * ratio;
    canvas.height = canvas.offsetHeight * ratio;
    canvas.getContext("2d").scale(ratio, ratio);
}

window.onresize = resizeCanvas;
resizeCanvas();

signaturePad = new SignaturePad(canvas);

clearButton.addEventListener("click", function (event) {
    signaturePad.clear();
});


savePrintButton.addEventListener("click",function(event){
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

      var printWindow = window.open('', '', 'height=400,width=800');
            printWindow.document.write('<!DOCTYPE html><html><head><title></title></head><body>');
            printWindow.document.write(kota);
            printWindow.document.write(ttd);
            printWindow.document.write(nama);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.print();
    });

savePNGButton.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        alert("Please provide signature first.");
    } else {
        // window.open(signaturePad.toDataURL());
        signaturePad.toDataURL()
    }
});

saveSVGButton.addEventListener("click", function (event) {
    if (signaturePad.isEmpty()) {
        alert("Please provide signature first.");
    } else {
        window.open(signaturePad.toDataURL('image/svg+xml'));
    }
});
