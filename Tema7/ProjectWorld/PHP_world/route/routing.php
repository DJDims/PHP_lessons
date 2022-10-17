<?php

$host = explode('?', $_SERVER['REQUEST_URI']);

$path=$host[0];
	$num = substr_count($path, '/');
	$route = explode('/', $path)[$num];
if(strstr($_SERVER['REQUEST_URI'],'?')){
	$id=urldecode($host[1]);
}
//----------------------------------------------

if ($route == '' OR $route == 'index.php') {
	Controller::StartSite();
} elseif($route == 'states'){
	Controller::StateList();
} elseif($route == 'citiesState'){
	if (isset($id)) {
		Controller::CityListByState($id);
	} else {
		Controller::error404();
	}
} elseif($route == 'cities'){
	Controller::CitiesList();
} elseif($route == 'continent'){
	Controller::ContinentList();
} elseif($route == 'continentState'){
	if (isset($id)) {
		Controller::StateListByContinent($id);
	} else {
		Controller::error404();
	}
} elseif($route == 'search'){
	if (isset($_GET['text'])) {
		Controller::SearchByCode($_GET['text']);
	} else {
		Controller::error404();
	}
} elseif($route == 'countryList'){
	ControllerCountry::CountryList();
} elseif($route == 'addCountry'){
	ControllerCountry::CountryAddForm();
} elseif($route == 'addResult'){
	ControllerCountry::CountryAddResult();

// } elseif($route == ''){

// } elseif($route == ''){

// } elseif($route == ''){

// } elseif($route == ''){

} else {
	Controller::error404();
}

?>