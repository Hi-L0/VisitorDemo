
//formJS

function IntOnlyBis(str)
		{
			var s ="0123456789",ls=str.length;
			var c= event.which || event.keyCode;
			var car=String.fromCharCode(c);
			var lc=car.length;
			
			if((car == '-')&&(ls==0))
			{
				event.returnValue = false;
				event.preventDefault();
			}
			else if((car == '-') && (str.indexOf('-')==-1)&& str.indexOf('-')==str.lastIndexOf('-'))
			{
				event.returnValue = false;
				event.preventDefault();
			}
			if (s.indexOf(car)==-1) 
			{
				event.returnValue = false;
				event.preventDefault();
			}
		}

		function alphaOnly(str){
			var str="ABCDEFGHIJKLMNOPQRSTUVWXYZ'abcdefghijklmnopqrstuvwxyzéàèùâêîôûäëüçÉÀÈÙÂÊÎÔÛÄËÜÇ "
			var x=event.which || event.keyCode;
			var car=String.fromCharCode(x);
			var ls=str.length;
			var s=str.split(' '), l=s.length;
			
			if(str.indexOf(car)==-1 || (car == ' ') && (ls==0))   
			{
				event.returnVlaue = false;	
				event.preventDefault(); 
			}
			else if((car == ' ') && (str.indexOf(' ')==ls-1)&& str.indexOf(' ')!=str.lastIndexOf(' '))
			{
				event.returnVlaue = false;	
				event.preventDefault(); 
			}
	

		}

		function cinVerif(str){
			var list ="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz",ls=str.length;
			var c= event.which || event.keyCode;
			var car=String.fromCharCode(c);
			
			if(list.indexOf(car)==-1)   
			{
				event.returnVlaue = false;	
				event.preventDefault(); 
			}
		}


		function verifSaisi(str){
			var ls=str.length;
			if(ls==0)
			{
				alert("champ est vide");
				return;
			}
			//document.getElementById('formulaire').submit();
		}

		function isTeleFormat(str){
			var ls=str.length;
			if (ls==0) {
				alert("champ est vide");
				return;
			}
			else if (ls!=10) {
				alert("format Telephone incorrect: 0xxxxxxxxx");
				return;
			}
		}