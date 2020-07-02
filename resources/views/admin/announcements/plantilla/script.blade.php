<script>async function toPDF(){
    var pdf = new jsPDF('p', 'pt', 'letter');
    // source = $('#datos')[0];
    source = document.getElementById('datos');
    specialElementHandlers = {
      '#bypassme': function(element, renderer){
        return true
      }
    }
    margins = {
        top: 10,
        left: 60,
        width: 545
      };
    pdf.fromHTML(
        source // HTML string or DOM elem ref.
        , margins.left // x coord
        , margins.top // y coord
        , {
          'width': margins.width // max width of content on PDF
          , 'elementHandlers': specialElementHandlers
        },
        function (dispose) {
          // dispose: object with X, Y of the last line add to the PDF
          //          this allow the insertion of new lines after html
            pdf.save('html2pdf.pdf');
          }
      )	
}
</script>
<script>function preView(){
           var pdf = new jsPDF('p', 'pt', 'letter');
        //   pdf.html(document.getElementById('datos'), {
        //   callback: function (pdf) {
        //   var iframe = document.createElement('iframe');
        //   iframe.setAttribute('style', 'position:absolute;right:0; top:0; bottom:0; height:100%; width:500px');
        //   document.body.appendChild(iframe);
        //   iframe.src = pdf.output('datauristring');
        // }
        //     });
        pdf.html(document.body, {
        callback: function (doc) {
        pdf.save('holis.pdf');
            }
          });
        }
</script>

<script>function test(){
  html2canvas(document.getElementById('datos'),{ scale: 2}).then(canvas => {
      var imgWidth = 200;
      var pageHeight = 190;
      var imgHeight = canvas.height * imgWidth / canvas.width;
      var heightLeft = imgHeight;
      const contentDataURL = canvas.toDataURL('image/png', 10)
      var options = {
      size: '70px',
      background: '#fff',
      pagesplit: true,
    };
    let pdf = new jsPDF('p', 'mm', 'letter', 1); 
    var position = 0;
    var width = pdf.internal.pageSize.width;
    var height = pdf.internal.pageSize.height;
    pdf.addImage(contentDataURL, 'PNG', 2, position, imgWidth, imgHeight, options);
    heightLeft -= pageHeight;
    while (heightLeft >= 0) {
      position = heightLeft - imgHeight;
      pdf.addPage();
      pdf.addImage(contentDataURL, 'PNG', 2, position, imgWidth, imgHeight, options);
      heightLeft -= pageHeight;
    }
    pdf.save('testD.pdf');
    });
}
</script>