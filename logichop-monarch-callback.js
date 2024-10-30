(function($){
	$(document).ajaxSuccess(function (event, xhr, setting) {
		if (setting.data) {
			var dataVars = new URLSearchParams(setting.data);
			if (dataVars.has('action') && dataVars.get('action') == 'add_stats_record_db') {
				if (dataVars.has('stats_data_array')) {
					if (typeof logichop_monarch_callback === 'function') { 
						var stats_data_array = JSON.parse(dataVars.get('stats_data_array'));
						logichop_monarch_callback(stats_data_array);
					}
				}
			}
		}
	});
})(jQuery)