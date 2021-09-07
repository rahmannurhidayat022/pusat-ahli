console.log('drago JS loaded');

$(document).ready(function () {
  
})
/*
* ajax request
*/
function sendAjax(url,method,dataSend)
{
	loading();
	if(method == 'POST' || method == 'post'){
		console.log('POST ajax sent');
		$.ajax({
			url: url,
			method: method,
			headers: {
	            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	        },
	        dataType: "JSON",
	        data: dataSend,
	        success: function( resp ) {
	            removeLoading();
	            console.log('ajax success');

	            if(typeof(resp.data.reload) != "undefined" && resp.data.reload !== null) {
				    location.reload();
				}
	        },
	        error: function( err ) {
	        
	        	c = confirm(err.responseJSON.message);

	        	if(c){
	        		removeLoading();
	        		// location.reload();
	        	}else{
	        		removeLoading();
	        		// location.reload();
	        	}
	        },
	        fail: function( fail ) {
	       
	        	console.log('ajax fail');
	        },
	        done: function( done ){
	        	console.log('ajax done');
	        	
	            // location.reload();
	        }
		});
	} else {
		console.log('GET ajax sent');
		$.ajax({
			url: url,
			method: method,
	        success: function( resp ) {
	            // location.reload();
	           	removeLoading();
	        },
	        error: function ( err ) {
	        	
	        }
		});
	}
	
}

/*
* show loading screen
*/
function loading()
{
	$('body').find('.loadingBlock').removeClass('hidden');
}

/*
* remove loading screen
*/
function removeLoading()
{
	$('body').find('.loadingBlock').addClass('hidden');
}

/*
* add comma separated
*/
function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + '.' + '$2');
    }
    return x1;
}