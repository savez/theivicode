$(document).ready(function(){
	$('#btn_decodifica').click(function(){
		msg = $('#messaggio').val();
		$('#testo').fadeOut(300,function(){
			$('#testo').addClass('hidden');
			$('#loading').show();
		});

		setTimeout(function(){
			$.post('decodifica.php', "messaggio="+msg, function(data){
				$('#decodifica_testo').html(data);
				$('#msg_originale_decodifica').html(msg);
	            $('#loading').fadeOut(400,function(){
					$('#decodifica').removeClass('hidden');
					$('#loading').hide();
				});
	        });
		}, 2000);
	});

	$('#btn_codifica').click(function(){
		msg = $('#messaggio').val();
		console.log(msg);
		$('#testo').fadeOut(300,function(){
			$('#testo').addClass('hidden');
			$('#loading').show();
		});

		setTimeout(function(){
			$.post('codifica.php', "messaggio="+msg, function(data){
				$('#codifica_testo').html(data);
				$('#msg_originale_codifica').html(msg);
	            $('#loading').fadeOut(400,function(){
					$('#codifica').removeClass('hidden');
					$('#loading').hide();
				});
	        });
		}, 2000);
	});

	$('button[name="btn_nuovo_messaggio"]').click(function(){
		$('#testo').fadeIn(400,function(){
			$('#testo').removeClass('hidden');
			$('#decodifica, #codifica').addClass('hidden');
		});
		
	});
});