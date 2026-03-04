$(document).ready(function() {
	/* Загрузка постера -- fileupload plugin */
	$('#poster').fileuploader({
		limit: 1,
    extensions: ['jpg', 'jpeg', 'png', 'gif'],
		changeInput: ' ',
		theme: 'thumbnails',
    enableApi: true,
		addMore: true,
		fileMaxSize: 2,
		thumbnails: {
			box: '<div class="fileuploader-items">\
              <ul class="fileuploader-items-list">\
					      <li class="fileuploader-thumbnails-input">\
					      	<div class="fileuploader-thumbnails-input-inner"><b>постер не загружен</b></div>\
					      </li>\
              </ul>\
              </div>',
			item: '<li class="fileuploader-item">\
				       <div class="fileuploader-item-inner">\
                           <div class="thumbnail-holder">${image}</div>\
                           <div class="actions-holder">\
                               <a id="action-remove" class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>\
                           </div>\
                       	   <div class="progress-holder">${progressBar}</div>\
                       </div>\
                   </li>',
			item2: '<li class="fileuploader-item">\
				       <div class="fileuploader-item-inner">\
                           <div class="thumbnail-holder">${image}</div>\
                           <div class="actions-holder">\
                               <a id="action-remove" class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>\
                           </div>\
                       </div>\
                   </li>',
      // removeConfirmation: false,
			startImageRenderer: true,
			canvasImage: false,
			_selectors: {
				list: '.fileuploader-items-list',
				item: '.fileuploader-item',
				start: '.fileuploader-action-start',
				retry: '.fileuploader-action-retry',
				remove: '.fileuploader-action-remove'
			},
			onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
				var plusInput = listEl.find('.fileuploader-thumbnails-input'),
					api = $.fileuploader.getInstance(inputEl.get(0));
				
				if(api.getFiles().length >= api.getOptions().limit) {
					plusInput.hide();
				}
				
				plusInput.insertAfter(item.html);
				
				
				if(item.format == 'image') {
					item.html.find('.fileuploader-item-icon').hide();
				}
			},
			onItemRemove: function(html, listEl, parentEl, newInputEl, inputEl) {
				var plusInput = listEl.find('.fileuploader-thumbnails-input'),
					api = $.fileuploader.getInstance(inputEl.get(0));
				
                html.children().animate({'opacity': 0}, 200, function() {
                    setTimeout(function() {
                        html.remove();
						
						if(api.getFiles().length - 1 < api.getOptions().limit) {
							plusInput.show();
						}
                    }, 100);
                });
				
            }
		},
		afterRender: function(listEl, parentEl, newInputEl, inputEl) {
			var plusInput = listEl.find('.fileuploader-thumbnails-input'),
				api = $.fileuploader.getInstance(inputEl.get(0));
		
			plusInput.on('click', function() {
				api.open();
			});
		},
		onRemove: function(item) {
		// send POST request
			$.post('', {
				poster_del: item.name
			});
		}
  });

	/* Загрузка постера -- fileupload plugin */

	/* Загрузка скриншотов -- fileupload plugin */
	$('#screens').fileuploader({
		limit: 6,
    extensions: ['jpg', 'jpeg', 'png', 'gif'],
		changeInput: ' ',
		theme: 'thumbnails2',
    enableApi: true,
		addMore: true,
		thumbnails: {
			box: '<div class="fileuploader-items">\
                      <ul class="fileuploader-items-list">\
					      <li class="fileuploader-thumbnails2-input"><div class="fileuploader-thumbnails2-input-inner">+</div></li>\
                      </ul>\
                  </div>',
			item: '<li class="fileuploader-item">\
				       <div class="fileuploader-item-inner">\
                           <div class="thumbnail-holder">${image}</div>\
                           <div class="actions-holder">\
                               <a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>\
                           </div>\
                       	   <div class="progress-holder">${progressBar}</div>\
                       </div>\
                   </li>',
			item2: '<li class="fileuploader-item">\
				       <div class="fileuploader-item-inner">\
                           <div class="thumbnail-holder">${image}</div>\
                           <div class="actions-holder">\
                               <a class="fileuploader-action fileuploader-action-remove" title="Remove"><i class="remove"></i></a>\
                           </div>\
                       </div>\
                   </li>',
			startImageRenderer: true,
			canvasImage: false,
			_selectors: {
				list: '.fileuploader-items-list',
				item: '.fileuploader-item',
				start: '.fileuploader-action-start',
				retry: '.fileuploader-action-retry',
				remove: '.fileuploader-action-remove'
			},
			onItemShow: function(item, listEl, parentEl, newInputEl, inputEl) {
				var plusInput = listEl.find('.fileuploader-thumbnails2-input'),
					api = $.fileuploader.getInstance(inputEl.get(0));
				
				if(api.getFiles().length >= api.getOptions().limit) {
					plusInput.hide();
				}
				
				plusInput.insertAfter(item.html);
				
				
				if(item.format == 'image') {
					item.html.find('.fileuploader-item-icon').hide();
				}
			},
			onItemRemove: function(html, listEl, parentEl, newInputEl, inputEl) {
				var plusInput = listEl.find('.fileuploader-thumbnails2-input'),
					api = $.fileuploader.getInstance(inputEl.get(0));
				
                html.children().animate({'opacity': 0}, 200, function() {
                    setTimeout(function() {
                        html.remove();
						
						if(api.getFiles().length - 1 < api.getOptions().limit) {
							plusInput.show();
						}
                    }, 100);
                });
				
            }
		},
		afterRender: function(listEl, parentEl, newInputEl, inputEl) {
			var plusInput = listEl.find('.fileuploader-thumbnails2-input'),
				api = $.fileuploader.getInstance(inputEl.get(0));
		
			plusInput.on('click', function() {
				api.open();
			});
		},
		onRemove: function(item) {
		// send POST request
			$.post('', {
				screen_del: item.name
			});
		}
  });
	/* Загрузка скриншотов -- fileupload plugin */



});