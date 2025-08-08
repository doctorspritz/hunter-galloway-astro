// opening and closing popups
	keradan.mbb.hide_popup = function (popup_name) {
		keradan.mbb.log('keradan.mbb.hide_popup: ', popup_name);
		let popup = document.querySelector(`#keradan-popup-${popup_name}`);
		popup.classList.toggle('show-on', false);
		setTimeout(() => {
			popup.classList.toggle('display-on', false);
			
			let popup_data = keradan.mbb.model[popup_name];
			popup_data.current_screen = 'items-list';
			popup_data.current_item = null;
		}, 300);
	}

	keradan.mbb.show_popup = function (popup_name) {
		keradan.mbb.log('keradan.mbb.show_popup: ', popup_name);

		keradan.mbb.render_popup_dynamic_content(popup_name);

		let popup = document.querySelector(`#keradan-popup-${popup_name}`);
		popup.classList.toggle('display-on', true);
		setTimeout(() => popup.classList.toggle('show-on', true), 0);
	};

	let keradan_popup_checklist = document.querySelector('#keradan-popup-checklist');
	keradan_popup_checklist.addEventListener('click', function(event) {
		if (event.target == keradan_popup_checklist) keradan.mbb.hide_popup('checklist');
	});

	let keradan_popup_checklist_close_btn = document.querySelector('#keradan-popup-checklist button.close');
	keradan_popup_checklist_close_btn.addEventListener('click', function(event) {
		if (event.currentTarget == keradan_popup_checklist_close_btn) keradan.mbb.hide_popup('checklist');
	});

	let keradan_popup_roadmap = document.querySelector('#keradan-popup-roadmap');
	keradan_popup_roadmap.addEventListener('click', function(event) {
		if (event.target == keradan_popup_roadmap) keradan.mbb.hide_popup('roadmap');
	});

	let keradan_popup_roadmap_close_btn = document.querySelector('#keradan-popup-roadmap button.close');
	keradan_popup_roadmap_close_btn.addEventListener('click', function(event) {
		if (event.currentTarget == keradan_popup_roadmap_close_btn) keradan.mbb.hide_popup('roadmap');
	});

// event listeners of popups interactive elements
	document.querySelectorAll('[data-keradan-int-el]').forEach((int_el) => {
		int_el.addEventListener('click', (e) => {
			let popup_el = int_el.closest('[data-keradan-popup-name]');
			let popup_data = keradan.mbb.model[popup_el.dataset.keradanPopupName];

			popup_data.current_screen = int_el.dataset.keradanPopupSetScreen;
			popup_data.current_item = int_el.dataset.keradanPopupSetListItemId ?? null;
			if (popup_data.current_item) popup_data.already_seen.push(popup_data.current_item);

			console.log('popup_data: ', popup_data);

			keradan.mbb.render_popup_dynamic_content(popup_el.dataset.keradanPopupName);
		});
	});

// render dynamic part
	keradan.mbb.render_popup_dynamic_content = function(popup_name) {
		let popup_data = keradan.mbb.model[popup_name];

		let old_show_el_selector = `[data-keradan-popup-name="${popup_name}"] [data-current-show]`;

		let new_show_el_selector = ``;
		new_show_el_selector += `[data-keradan-popup-name="${popup_name}"]`;
		new_show_el_selector += ` [data-keradan-popup-screen="${popup_data.current_screen}"]`;
		new_show_el_selector += popup_data.current_item ? `[data-keradan-popup-item-id="${popup_data.current_item}"]` : '';

		document.querySelectorAll(old_show_el_selector).forEach(function(el) {
			el.removeAttribute('data-current-show');
		});

		console.log('new_show_el_selector: ', new_show_el_selector);

		document.querySelector(new_show_el_selector).setAttribute('data-current-show', '');

		popup_data.already_seen.forEach(function(id) {
			let items = document.querySelectorAll(`[data-keradan-popup-name="${popup_name}"] [data-keradan-popup-item-id="${id}"]`);
			items.forEach(function(item){
				item.setAttribute('data-keradan-popup-item-already-seen', '');
			})
		});
	};





