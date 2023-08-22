//zmienna globalna
var suma = 0;
var licznik = 0;

//FUNKCJE
//funkcja1 - bez parametrow
function zmiana_na_czerwony(){
	
	//$('#hf_upper_banner') 		--> uchwyt
	//css('background-color', 'red')--> zmiana wlasciwosci css
	
	$('#hf_upper_banner').css('background-color', 'red');
}


//funkcja z 1 parametrem
function zmiana_koloru(nazwa_koloru){
	$('#hf_upper_banner').css('background-color', nazwa_koloru);
}


//funkcja z 2 parametrami
function zmiana_koloru2(nazwa_koloru, nazwa_przycisku){
	
	$('#hf_upper_banner').css('background-color', nazwa_koloru);
	alert('Nacisnales przycisk o nazwie ' + nazwa_przycisku);
}

//funkcja ktora usuwa produkt z listy produktów
function usun(id_produktu){
	
	//zczytywanie ceny produktu jako TEKST
	var cena = $('button[id='+id_produktu+']').nextAll('.hf_product_price').text();
	cena = parseFloat(cena); //tekst zamienamy na float
	//cena = cena.toPrecision(4);	 //float zaokrąglamy do 3 miejsc po przecinku
	//alert('id prod: '+id_produktu+' a cena to: ' + cena);
	
	//usuwamy produkt z listy
	$('.hf_delete').parent('#'+id_produktu).parent().remove();
	
	//potem zmienjszamy ilosc zmiennej licznik o 1
	licznik = licznik - 1;
	
	//na koncy podmieniamy wartosc(ilosc) koszyka
	$('#hf_shop_count').text(licznik);
	
	
	//zmniejszenie sumy koszyka
	var suma_cen_produktow = $('.hf_shop_sum').text().replace('SUMA: $', '');
	
	//pobrany tekst zamien na liczbę z przecinkiem
	suma_cen_produktow = parseFloat(suma_cen_produktow);
	//suma_cen_produktow = suma_cen_produktow.toPrecision(4);
	
	//od sumy cen produktow odejmij kwote usuwanego produktu
	suma_cen_produktow = suma_cen_produktow - cena;
	//suma_cen_produktow = suma_cen_produktow.toPrecision(4);
 
	//podmina zawartosci sumy koszyka
    $('.hf_shop_sum').text('SUMA: $' + suma_cen_produktow);
}


function dodaj_do_koszyka(id_produktu){
	
	//zwiększenie licznika koszyka o 1
	licznik = licznik + 1;
	
	//pobranie ceny produktu z bazy danych!!!!
	var cena = 0;
	var nazwa_produktu = 'test';
	//sprawdz czy da sie pobrac wartosc z bazy bez uzcia ajaxa 
	
	
	
	suma = suma + cena;
	
	//wyswietlenie aktualnej wartosci koszyka na stronie
    $('#hf_shop_count').text(licznik);
	
	//dodawanie do listy
	$('#hf_shop_list').append('<div class="hf_shop_product"><button id="'+licznik+'" onclick="usun('+licznik+')"><span class="material-symbols-outlined hf_delete">delete</span></button>'+licznik + '. <span>' + nazwa_produktu + '</span> - $<span class="hf_product_price">' + cena + '</span></div>');
  
	$('.hf_shop_sum').text('SUMA: $' + suma);
}
  
  
function pokaz_ukryj(){
	
	//ukryj region test1
	$('#test1').css('display', 'none');
	
	//pokaz region test2
	$('#test2').css('display', 'block');
}

function ukryj_pokaz(){
	//ukryj region test2
	$('#test2').css('display','none');

	//pokaz region test1
	$('#test1').css('display','block');
}
  
  



//DOCUMENT READY
//kiedy cala strona jest gotowa
$( document ).ready(function() {	

	//slider
	$('.hf_card.hf_card_right').slick({
	  dots: true,
	  infinite: false,
	  speed: 1000,
	  slidesToShow: 4,
	  slidesToScroll: 2,
	  responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	  ]
	});
	
	
	//funkcja pokazujaca lub ukrywajaca zawartosc koszyka
	$('.hf_s_icon.hf_schopping > div').not('#hf_shop_list').on('click', function() {
	//$('.hf_s_icon.hf_schopping').on('click', function() {
		
		//$(this).children('div').not('#hf_shop_list')
		

		//krok 1 - sprawdz czy zawartosc koszyka jest widoczna
		let czy_widoczny = $('#hf_shop_list').css('display');
		  
		//krok2 - sprawdz czy zmienna czy_widoczny ma wartosc "block"
		//jesli ma block to zmieniamy niec nie robimy, a jesli none to zmieniamy na block
		if(czy_widoczny == 'block'){
		  null;
		}else{
		  $('#hf_shop_list').css('display', 'block');
		}

	});
	
	
	//funkcja dodajaca produkty do koszyka
/*	$('.hf_card_bubble.hf_add_to_shop').on('click', function() {
 
	  licznik = licznik + 1;
	  
	  //konwersja z napisu na liczbe
	  var cena = parseFloat($(this).parent().parent().find('.hf_product_price').text().replace('$', '')); //.toPrecision(4);
	  
	  suma = suma + cena;
	  
	  //wyswietlenie aktualnej wartosci koszyka na stronie
	  $('#hf_shop_count').text(licznik);
	  
	  
	  //dodawanie do listy
	  var produkt = $(this).parent().parent().find('.hf_card_brand').text();

	  
	  $('#hf_shop_list').append('<div class="hf_shop_product"><button id="'+licznik+'" onclick="usun('+licznik+')"><span class="material-symbols-outlined hf_delete">delete</span></button>'+licznik + '. <span>' + produkt + '</span> - $<span class="hf_product_price">' + cena + '</span></div>');
	  
	  $('.hf_shop_sum').text('SUMA: $' + suma);

	});
*/

	
	//funkcja do zamykania okna koszyka
	$('.hf_shop_close').on('click', function(){	

		$(this).parents('#hf_shop_list').css('display', 'none');
	
	})

	
	 
	

	
});

