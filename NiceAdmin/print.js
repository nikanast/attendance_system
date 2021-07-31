function myFunction() {
var prtContent = document.getElementById("print1");
var WinPrint = window.open('', '', 'left=0,top=0,width=auto,height=auto,toolbar=0,scrollbars=0,status=0');
WinPrint.document.write(prtContent.innerHTML);
WinPrint.document.close();
WinPrint.focus();
WinPrint.print();
WinPrint.close();
}
