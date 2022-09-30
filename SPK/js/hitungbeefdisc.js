//Hitung Beef
function hitung() {
  var nama1, nama2, nama3, nama4, nama5, nama6, nama7, nama8, nama9, nama10;
  var harga1 = parseInt(0);
  var harga2 = parseInt(0);
  var harga3 = parseInt(0);
  var harga4 = parseInt(0);
  var harga5 = parseInt(0);
  var harga6 = parseInt(0);
  var harga7 = parseInt(0);
  var harga8 = parseInt(0);
  var harga9 = parseInt(0);
  var harga10 = parseInt(0);

  var harga1n = parseInt(0);
  var harga2n = parseInt(0);
  var harga3n = parseInt(0);
  var harga4n = parseInt(0);
  var harga5n = parseInt(0);
  var harga6n = parseInt(0);
  var harga7n = parseInt(0);
  var harga8n = parseInt(0);
  var harga9n = parseInt(0);
  var harga10n = parseInt(0);

  var qty1 = parseInt(document.getElementById('qty1').value);
  var qty2 = parseInt(document.getElementById('qty2').value);
  var qty3 = parseInt(document.getElementById('qty3').value);
  var qty4 = parseInt(document.getElementById('qty4').value);
  var qty5 = parseInt(document.getElementById('qty5').value);
  var qty6 = parseInt(document.getElementById('qty6').value);
  var qty7 = parseInt(document.getElementById('qty7').value);
  var qty8 = parseInt(document.getElementById('qty8').value);
  var qty9 = parseInt(document.getElementById('qty9').value);
  var qty10 = parseInt(document.getElementById('qty10').value);

  var total;
  var totaln;

  nama1 = 'Kobe Meat';
  harga1 = 1860000;
  nama2 = 'Wagyu Meat';
  harga2 = 3320000;
  nama3 = 'Tenderloin Meat';
  harga3 = 1350000;
  nama4 = 'Bone in Ribeye Meat';
  harga4 = 235000;
  nama5 = 'Porterhouse Meat';
  harga5 = 220000;
  nama6 = 'Silverside Meat';
  harga6 = 70000;
  nama7 = 'Mignon Meat';
  harga7 = 540000;
  nama8 = 'Brahman Meat';
  harga8 = 140000;
  nama9 = 'Beefalo Meat';
  harga9 = 122875;
  nama10 = 'Limousin Meat';
  harga10 = 99000;

  harga1n = 1860000;
  harga2n = 3320000;
  harga3n = 1350000;
  harga4n = 235000;
  harga5n = 220000;
  harga6n = 70000;
  harga7n = 540000;
  harga8n = 140000;
  harga9n = 122875;
  harga10n = 99000;

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
  if (qty6>1) {
    harga1=harga6*0.2;
  };
  if (qty7>1) {
    harga2=harga7*0.2;
  };
  if (qty8>1) {
    harga3=harga8*0.2;
  };
  if (qty9>1) {
    harga4=harga9*0.2;
  };
  if (qty10>1) {
    harga5=harga10*0.2;
  };

  totaln = qty1 * harga1n + qty2 * harga2n + qty3 * harga3n + qty4 * harga4n + qty5 * harga5n + qty6 * harga6n + qty7 * harga7n + qty8 * harga8n + qty9 * harga9n + qty10 * harga10n;
  total = qty1 * harga1 + qty2 * harga2 + qty3 * harga3 + qty4 * harga4 + qty5 * harga5 + qty6 * harga6 + qty7 * harga7 + qty8 * harga8 + qty9 * harga9 + qty10 * harga10;
  document.getElementById('totaltemp').value = totaln;
  document.getElementById('totaldisc').value = total;
};
