//Hitung Cow
function hitung2() {
  var nama1, nama2, nama3, nama4, nama5;
  var harga1 = parseInt(0);
  var harga2 = parseInt(0);
  var harga3 = parseInt(0);
  var harga4 = parseInt(0);
  var harga5 = parseInt(0);

  var harga1n = parseInt(0);
  var harga2n = parseInt(0);
  var harga3n = parseInt(0);
  var harga4n = parseInt(0);
  var harga5n = parseInt(0);

  var qty1 = parseInt(document.getElementById('qtyc1').value);
  var qty2 = parseInt(document.getElementById('qtyc2').value);
  var qty3 = parseInt(document.getElementById('qtyc3').value);
  var qty4 = parseInt(document.getElementById('qtyc4').value);
  var qty5 = parseInt(document.getElementById('qtyc5').value);

  nama1 = '	Limousin';
  harga1 = 160000000;
  nama2 = 'Brahman';
  harga2 = 57000000;
  nama3 = 'Angus';
  harga3 = 78000000;
  nama4 = 'Brangus';
  harga4 = 89000000;
  nama5 = 'Ongole';
  harga5 = 32000000;

  harga1n = 160000000;
  harga2n = 57000000;
  harga3n = 78000000;
  harga4n = 89000000;
  harga5n = 32000000;

  if (qty1>1) {
    harga1=harga1*0.2;
  };
  if (qty2>1) {
    harga2=harga2*0.2;
  };
  if (qty3>1) {
    harga3=harga3*0.2;
  };
  if (qty4>1) {
    harga4=harga4*0.2;
  };
  if (qty5>1) {
    harga5=harga5*0.2;
  };

  totaln = qty1 * harga1n + qty2 * harga2n + qty3 * harga3n + qty4 * harga4n + qty5 * harga5n;
  document.getElementById('totaltemp').value = totaln;
  total = qty1 * harga1 + qty2 * harga2 + qty3 * harga3 + qty4 * harga4 + qty5 * harga5;
  document.getElementById('totaltempc').value = total;
};
