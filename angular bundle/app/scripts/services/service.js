/******************************************************************
                                           NG Service
******************************************************************/
app.service('getData', function($http) {
	return $http.get('server/data.json')	
});