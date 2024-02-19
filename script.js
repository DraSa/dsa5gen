function select_type(x){
	if (x == 2){ $('input#achaz, input#ork').attr('disabled', true); } else { $('input#achaz, input#ork').attr('disabled', false); }
	if (x == 3){ $('input#elf').attr('disabled', false); } else { $('input#elf').prop('checked', false); $('input#elf').attr('disabled', true); }
}

function save_pdf(){
	var element = document.getElementById('print');
	var opt = {
		margin: 0,
		filename: 'DSA5Light_CharSheet.pdf',
		image: { type: 'png', quality: 1 },
		html2canvas: { scale: 3, dpi: 300, letterRendering: true, useCORS: false },
		jsPDF: { unit: 'pt', format: 'A4', orientation: 'portrait' },
		enableLinks: true
	};
	html2pdf().set(opt).from(element).save();
	//html2pdf(element, opt);
}

window.onload = function(){
	$('#dsa5gen')[0].reset();
}